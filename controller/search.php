<?php
require_once '../config/db.php';

// Lấy các thông tin từ form
$keyword = $_GET['keyword'];
$city = isset($_GET['city']) ? $_GET['city'] : '';
$propertyType = $_GET['propertyType'];
$utilities = isset($_GET['utilities']) ? $_GET['utilities'] : array();

// Xây dựng câu truy vấn
$query = "SELECT p.*, l.city
          FROM properties p
          JOIN locations l ON p.property_id = l.property_id
          WHERE 1 = 1";

// Tìm kiếm theo từ khóa
if (!empty($keyword)) {
    $query .= " AND p.property_name LIKE '%$keyword%'";
}

// Tìm kiếm theo thành phố (nếu có giá trị)
if (!empty($city)) {
    $query .= " AND l.city = '$city'";
}

// Tìm kiếm theo loại bất động sản
if (!empty($propertyType)) {
    $query .= " AND p.type_id = $propertyType";
}

// Tìm kiếm theo tiện ích
if (!empty($utilities)) {
    $utilitiesStr = implode(',', $utilities);
    $query .= " AND p.property_id IN (SELECT property_id FROM property_utilities WHERE utility_id IN ($utilitiesStr))";
}

try {
    // Tạo đối tượng kết nối
    $connection = new connect();
    
    // Lấy kết nối đến cơ sở dữ liệu
    $pdo = $connection->getConnection();
    
    // Thực hiện truy vấn và xử lý kết quả
    $stmt = $pdo->query($query);
    
    // Hiển thị danh sách thông tin các bất động sản
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $row['property_id'] . "<br>";
        echo "Tên: " . $row['property_name'] . "<br>";
        echo "Thành phố: " . $row['city'] . "<br>";
        echo "Loại bất động sản: " . $row['type_id'] . "<br>";
        echo "---------------------------------------<br>";
    }
} catch (Exception $e) {
    echo "Lỗi: " . $e->getMessage();
}
?>
