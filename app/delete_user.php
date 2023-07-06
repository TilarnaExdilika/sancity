<?php
require '../config/db.php';

// Kiểm tra xem user_id đã được gửi từ Ajax hay chưa
if (isset($_POST['user_id'])) {
    // Lấy user_id từ dữ liệu gửi từ Ajax
    $userId = $_POST['user_id'];

    // Kết nối cơ sở dữ liệu
    $connection = new connect();
    $db = $connection->getConnection();

    // Xóa người dùng
    $query = "DELETE FROM users WHERE user_id = :userId";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':userId', $userId);

    // Thực thi câu truy vấn
    if ($stmt->execute()) {
        // Trả về kết quả thành công cho Ajax
        echo 'success';
    } else {
        // Trả về kết quả lỗi cho Ajax
        echo 'error';
    }
} else {
    // Trả về kết quả lỗi cho Ajax nếu user_id không được gửi
    echo 'error';
}
?>
