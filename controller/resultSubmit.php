<?php
// Kết nối tới cơ sở dữ liệu
require_once '../config/db.php';
$db = new connect();
$conn = $db->getConnection();
// Bắt đầu session
session_start();

// Xử lý dữ liệu gửi từ biểu mẫu
if(isset($_POST['submit'])){

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
    $utilities = $_POST['utilities']; // Mảng các tiện ích được chọn

    // Thực hiện câu truy vấn INSERT vào bảng "properties"
    $query = "INSERT INTO properties (property_name, user_id, type_id, description, address, price, status, real_area, age) 
            VALUES (:property_name, :user_id, :type_id, :description, :address, :price, :status, :real_area, :age)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':property_name', $property_name);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':type_id', $property_type);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':real_area', $real_area);
    $stmt->bindParam(':age', $age);
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

    // Thực hiện câu truy vấn INSERT vào bảng "property_images" với URL ảnh
    if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
    
        echo "<pre>";
        print_r($_FILES['my_image']);
        echo "</pre>";
    
        $img_name = $_FILES['my_image']['name'];
        $img_size = $_FILES['my_image']['size'];
        $tmp_name = $_FILES['my_image']['tmp_name'];
        $error = $_FILES['my_image']['error'];
    
        if ($error === 0) {
            if ($img_size > 2000000) {
                $em = "Vui lòng chọn ảnh nhỏ hơn 2mb";
                header("Location: index.php?error=$em");
            }else {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
    
                $allowed_exs = array("jpg", "jpeg", "png"); 
    
                if (in_array($img_ex_lc, $allowed_exs)) {
                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_upload_path = 'public/img/gallery/'.$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
    
                    // Insert into Database
                    $sql = "INSERT INTO property_images(property_id ,image_url) 
                            VALUES('$property_id','$new_img_name')";
                    $conn->exec($sql);
                    header("Location: view.php");
                }else {
                    $em = "You can't upload files of this type";
                    header("Location: index.php?error=$em");
                }
            }
        }else {
            $em = "unknown error occurred!";
            header("Location: index.php?error=$em");
        }
    
    }else {
        header("Location: index.php");
    }

    
    header("Location: ../success.php");
    exit();
}
?>