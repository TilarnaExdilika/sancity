<?php
// Kết nối tới cơ sở dữ liệu
require_once '../config/db.php';
$db = new connect();
$conn = $db->getConnection();

// Xử lý dữ liệu gửi từ biểu mẫu
if(isset($_POST['submit'])){
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
    $query = "INSERT INTO properties (property_name, type_id, address, price, status, real_area, age) 
              VALUES (:property_name, :type_id, :address, :price, :status, :real_area, :age)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':property_name', $property_name);
    $stmt->bindParam(':type_id', $property_type);
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

    // Chuyển hướng về trang thành công
    header("Location: ../success.php");
    exit();
}
?>
