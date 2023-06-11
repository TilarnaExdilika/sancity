<?php
// Kết nối tới cơ sở dữ liệu
require_once '../config/db.php';
$db = new connect();
$conn = $db->getConnection();
// Bắt đầu session
session_start();

// Xử lý dữ liệu gửi từ biểu mẫu
if (isset($_POST['submit'])) {
    $user_id = $_SESSION['auth'];
    // Lấy thông tin từ biểu mẫu
    $property_name = $_POST['property_name'];
    $status = $_POST['status'];
    $property_type = $_POST['property_type'];
    $price = $_POST['price'];
    $area = $_POST['area'];
    $real_area = $_POST['real_area'];
    $bedroom = $_POST['bedroom'];
    $bathroom = $_POST['bathroom'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $description = $_POST['description'];
    $age = $_POST['age'];
    $unit = $_POST['unit'];
    $utilities = $_POST['utilities']; // Mảng các tiện ích được chọn

    // Hàm format giá
    function formatPrice($price)
    {
        if ($price >= 1000000000) {
            return number_format($price / 1000000000, 1) . " tỷ";
        } elseif ($price >= 1000000) {
            return number_format($price / 1000000, 1) . " triệu";
        } elseif ($price >= 1000) {
            return number_format($price / 1000, 0) . " nghìn";
        } else {
            return $price;
        }
    }

    // Format giá trước khi lưu vào cơ sở dữ liệu
    $formattedPrice = formatPrice($price);

    // Thực hiện câu truy vấn INSERT vào bảng "properties"
    $query = "INSERT INTO properties (property_name, user_id, type_id, description, address, price, status, real_area, age, unit) 
            VALUES (:property_name, :user_id, :type_id, :description, :address, :price, :status, :real_area, :age, :unit)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':property_name', $property_name);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':type_id', $property_type);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':price', $formattedPrice);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':real_area', $real_area);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':unit', $unit);
    $stmt->execute();

    // Lấy ID của bất động sản vừa được thêm vào
    $property_id = $conn->lastInsertId();

    // Thực hiện câu truy vấn INSERT vào bảng "property_details"
    $query = "INSERT INTO property_details (property_id, bedroom_id, bathroom_id, area_id) 
              VALUES (:property_id, :bedroom_id, :bathroom_id, :area_id)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':property_id', $property_id);
    $stmt->bindParam(':bedroom_id', $bedroom);
    $stmt->bindParam(':bathroom_id', $bathroom);
    $stmt->bindParam(':area_id', $area);
    $stmt->execute();

    // Thực hiện câu truy vấn INSERT vào bảng "location"
    $query = "INSERT INTO locations (property_id, address, city) VALUES (:property_id, :address, :city)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':property_id', $property_id);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':city', $city);
    $stmt->execute();

    // Thực hiện câu truy vấn INSERT vào bảng "property_utilities"
    foreach ($utilities as $utility_id) {
        $query = "INSERT INTO property_utilities (property_id, utility_id) 
                  VALUES (:property_id, :utility_id)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':property_id', $property_id);
        $stmt->bindParam(':utility_id', $utility_id);
        $stmt->execute();
    }

    if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
        $img_files = $_FILES['my_image'];

        // Loop through each uploaded image
        for ($i = 0; $i < count($img_files['name']); $i++) {
            $img_name = $img_files['name'][$i];
            $img_size = $img_files['size'][$i];
            $tmp_name = $img_files['tmp_name'][$i];
            $error = $img_files['error'][$i];

            if ($error === 0) {
                if ($img_size > 2097152) {
                    $em = "Vui lòng chọn ảnh nhỏ hơn 2mb";
                } else {
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);

                    $allowed_exs = array("jpg", "jpeg", "png");

                    if (in_array($img_ex_lc, $allowed_exs)) {
                        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                        $img_upload_path = '../public/upload/properties/' . $new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);

                        // Insert into Database
                        $sql = "INSERT INTO property_images(property_id, image_url) 
                                VALUES('$property_id', '$new_img_name')";
                        $conn->exec($sql);
                    } else {
                        $em = "You can't upload files of this type";
                        header("Location: index.php?error=$em");
                        exit;
                    }
                }
            } else {
                $em = "Unknown error occurred!";
                header("Location: index.php?error=$em");
                exit;
            }
        }

        header("Location: view.php");
        exit;
    } else {
        header("Location: index.php");
        exit;
    }
}
?>
