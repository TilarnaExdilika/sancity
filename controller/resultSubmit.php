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

    // Thực hiện câu truy vấn INSERT vào bảng "property_utilities" cho từng tiện ích được chọn
    foreach($utilities as $utility){
        $query = "INSERT INTO property_utilities (property_id, utility_id) VALUES (:property_id, :utility_id)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':property_id', $property_id);
        $stmt->bindParam(':utility_id', $utility);
        $stmt->execute();
    }


    // Đường dẫn tới thư mục đích
    $targetDir = 'public/img/gallery/';

    // Lặp qua từng tệp hình ảnh đã tải lên
    foreach ($_FILES['image_url']['tmp_name'] as $key => $tmpFilePath) {
        // Kiểm tra xem tệp đã được chọn hay chưa
        if (!empty($tmpFilePath)) {
            // Tạo tên tệp mới
            $fileName = uniqid() . '_' . basename($_FILES['image_url']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;

            // Di chuyển tệp tạm thời vào thư mục đích
            if (move_uploaded_file($tmpFilePath, $targetFilePath)) {
                // Thực hiện câu truy vấn INSERT vào bảng "images"
                $query = "INSERT INTO images (property_id, image_url) VALUES (:property_id, :image_url)";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':property_id', $property_id);
                $stmt->bindParam(':image_url', $targetFilePath);
                $stmt->execute();

                // Tệp đã được tải lên và thông tin đã được lưu vào bảng "images"
                echo 'Hình ảnh đã được tải lên và lưu vào cơ sở dữ liệu thành công.';
            } else {
                // Đã xảy ra lỗi khi di chuyển tệp
                echo 'Đã xảy ra lỗi khi di chuyển tệp vào thư mục đích.';
            }
        }
    }

    // Chuyển hướng về trang thành công
    header("Location: ../success.php");
    exit();
}
?>
