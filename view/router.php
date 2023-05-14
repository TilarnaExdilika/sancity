<?php
require_once 'config/db.php';
$connect = new connect();

// Xác định controller và action dựa trên các tham số truyền vào
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'Home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Gọi đúng file controller tương ứng
require_once 'controller/' . $controller . '.php';

// Khởi tạo đối tượng Controller
$controllerClass = ucfirst($controller) . 'Controller';

if (class_exists($controllerClass)) {
    $controllerObject = new $controllerClass();
    
    // Gọi phương thức tương ứng trên Controller
    if (method_exists($controllerObject, $action)) {
        $controllerObject->{$action}();
    } else {
        // Xử lý khi action không tồn tại
        echo 'Action không tồn tại!';
    }
} else {
    // Xử lý khi controller không tồn tại
    echo 'Controller không tồn tại!';
}
?>
