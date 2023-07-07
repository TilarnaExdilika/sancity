<?php
session_start();
require_once "config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new connect();

    $userId = $_SESSION["uauth"]["user_id"];
    $oldPassword = $_POST["oldPassword"];
    $newPassword = $_POST["newPassword"];

    // Kiểm tra mật khẩu cũ
    $user = $db->getInstance("SELECT * FROM users WHERE user_id = $userId");
    if ($user && $user["password"] === md5($oldPassword)) {
        // Mật khẩu cũ hợp lệ, thực hiện đổi mật khẩu
        $newHashedPassword = md5($newPassword);
        $db->exec("UPDATE users SET password = '$newHashedPassword' WHERE user_id = $userId");
        echo "success";
    } else {
        // Mật khẩu cũ không khớp
        echo "error";
    }
}
?>
