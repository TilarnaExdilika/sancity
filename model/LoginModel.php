<?php

require_once 'config/db.php';

class LoginModel extends connect {

    public function authenticate($username, $password) {
        // Xử lý logic xác thực đăng nhập

        $hashedPassword = md5($password); // Mã hóa mật khẩu bằng MD5

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$hashedPassword'";
        $result = $this->getInstance($query);
        
        if ($result) {
            $_SESSION["auth"] = $result;
            $this->isLoggedIn(); // Đánh dấu là đã đăng nhập thành công
            return $result;
        } else {
            // Xác thực không thành công, trả về false
            return false;
        }
    }

    public function register($username, $email, $password) {
        // Xử lý logic đăng ký
        
        $hashedPassword = md5($password); // Mã hóa mật khẩu bằng MD5

        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
        $result = $this->exec($query);
        
        if ($result) {
            // Đăng ký thành công, trả về true
            $_SESSION["auth"] = $result;
            $this->isLoggedIn(); // Đánh dấu là đã đăng nhập thành công
            return true;
        } else {
            // Đăng ký không thành công, trả về false
            return false;
        }
    }

    public function isLoggedIn() {
        $loggedIn = false;

        if(isset($_SESSION["auth"])){
            $loggedIn = true;
        }
        return $loggedIn;
    }
}
