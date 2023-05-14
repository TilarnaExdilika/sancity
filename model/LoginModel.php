<?php
require_once 'master.php';
require_once 'config/db.php';

class LoginModel extends MasterModel
{
    private $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = new connect();
    }

    public function checkLogin($username, $password)
    {
        // Lấy thông tin người dùng từ cơ sở dữ liệu dựa trên tên người dùng
        $query = "SELECT * FROM users WHERE username = '$username'";
        $user = $this->db->getInstance($query);
    
        if ($user && password_verify($password, $user['password'])) {
            return true; // Đăng nhập thành công
        } else {
            return false; // Đăng nhập không thành công
        }
    }

    public function registerUser($username, $password, $email)
    {
        // Mã hóa mật khẩu
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Tạo câu truy vấn INSERT để thêm người dùng vào cơ sở dữ liệu
        $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashedPassword', '$email')";

        // Thực thi câu truy vấn
        $result = $this->db->exec($query);

        if ($result) {
            return true; // Đăng kí thành công
        } else {
            return false; // Đăng kí không thành công
        }
    }
}
?>
