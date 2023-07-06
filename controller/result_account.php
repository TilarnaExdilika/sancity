<?php
// Kết nối cơ sở dữ liệu
require '../config/db.php';
$connection = new connect();
$db = $connection->getConnection();

// Lấy thông tin từ form và user_id
$accountTypeId = $_POST['account_type_id'];
$status = $_POST['status'];
$userId = $_POST['user_id'];

// Câu truy vấn UPDATE
$query = "UPDATE users SET account_type_id = :accountTypeId, status = :status WHERE user_id = :userId";

// Thực thi câu truy vấn
$stmt = $db->prepare($query);
$stmt->bindParam(':accountTypeId', $accountTypeId);
$stmt->bindParam(':status', $status);
$stmt->bindParam(':userId', $userId);

if ($stmt->execute()) {
    echo 'Cập nhật thành công';
} else {
    echo "Lỗi khi cập nhật thông tin.";
}

?>
