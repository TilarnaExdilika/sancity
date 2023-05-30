<?php
class LogoutController {
    public function index() {
        // Xử lý đăng xuất
        session_unset();
        session_destroy();
        // Chuyển hướng về trang đăng nhập
        echo '<script>window.location.href = "index.php?controller=Home&action=index";</script>';
        exit();
    }
}

?>