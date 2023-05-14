<?php
require_once 'model/LoginModel.php';

class LoginController
{
    private $loginModel;

    public function __construct()
    {
        $this->loginModel = new LoginModel();
    }

    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Kiểm tra nếu action là "login"
            if (isset($_POST["action"]) && $_POST["action"] === "login") {
                // Lấy giá trị từ form
                $username = $_POST["username"];
                $password = $_POST["password"];
        
                // Kiểm tra xử lý đăng nhập
                $loggedIn = $this->loginModel->checkLogin($username, $password);

                if ($loggedIn) {
                    // Đăng nhập thành công, bạn có thể thực hiện các hành động cần thiết ở đây
                    echo "Đăng nhập thành công!";
                } else {
                    // Đăng nhập không thành công, thông báo lỗi
                    echo "Tên người dùng hoặc mật khẩu không đúng!";
                }
            }
        }
    }

    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Kiểm tra nếu action là "register"
            if (isset($_POST["action"]) && $_POST["action"] === "register") {
                // Lấy giá trị từ form
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];

                // Kiểm tra xử lí đăng kí
                if (empty($username) || empty($email) || empty($password)) {
                    // Thông báo lỗi nếu có trường nào không được điền
                    echo "Vui lòng điền đầy đủ thông tin đăng kí!";
                } else {
                    $registered = $this->loginModel->registerUser($username, $password, $email);

                    if ($registered) {
                        // Đăng kí thành công, bạn có thể thực hiện các hành động cần thiết ở đây
                        echo "Đăng kí thành công!";
                    } else {
                        // Đăng kí không thành công, thông báo lỗi
                        echo "Đăng kí thất bại!";
                    }
                }
            }
        }
    }
}
?>
