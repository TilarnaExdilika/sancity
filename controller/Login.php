<?php

require_once 'model/LoginModel.php';

class LoginController {
    private $loginModel;

    public function __construct() {
        $this->loginModel = new LoginModel();
    }

    public function login() {
        // Xử lý logic đăng nhập
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $result = $this->loginModel->authenticate($username, $password);
            
            if ($result) {
                // Đăng nhập thành công, thực hiện các hành động sau khi đăng nhập
                $_SESSION["uauth"] = $result;
                $user_id = $this->loginModel->getUserIdByUsername($username); // Lấy user_id từ cơ sở dữ liệu
                $_SESSION["auth"] = $user_id;
                echo '<script>window.location.href = "index.php?controller=Home&action=index";</script>';
            } else {
                // Đăng nhập không thành công, hiển thị thông báo lỗi
                echo "lỗi nữa rồi";
            }
        }
    }

    public function register() {
        // Xử lý logic đăng ký
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $result = $this->loginModel->register($username, $email, $password);
            
            if ($result) {
                // Đăng ký thành công, thực hiện các hành động sau khi đăng ký
                echo '<script>window.location.href = "index.php?controller=DashBoard&action=index";</script>';
            } else {
                // Đăng ký không thành công, hiển thị thông báo lỗi
            }
        }
    }
}

class UserController {
    private $loginModel;

    public function __construct() {
        $this->loginModel = new LoginModel();
    }

    public function checkLogin() {
        $loggedIn = $this->loginModel->isLoggedIn();
        return $loggedIn;
    }
}
