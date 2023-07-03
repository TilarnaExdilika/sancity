<?php
require_once 'config/db.php';
$connect = new connect();

// Xác định controller và action dựa trên các tham số truyền vào
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'Home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Kiểm tra xem tệp controller có tồn tại hay không
$controllerFile = 'controller/' . $controller . '.php';
if (file_exists($controllerFile)) {
    // Gọi file controller tương ứng
    require_once $controllerFile;

    // Kiểm tra xem lớp controller có tồn tại hay không
    $controllerClass = ucfirst(strtolower($controller)) . 'Controller';
    if (class_exists($controllerClass)) {
        // Khởi tạo đối tượng controller
        $controllerObject = new $controllerClass();

        // Kiểm tra xem phương thức action có tồn tại trong lớp controller hay không
        if (method_exists($controllerObject, $action)) {
            // Gọi phương thức action tương ứng trên controller
            $controllerObject->{$action}();
        } else {
            // Xử lý khi action không tồn tại
            echo 'Action không tồn tại!';
        }
    } else {
        // Xử lý khi controller không tồn tại
        echo 'Controller không tồn tại!';
    }
} else {
    // Xử lý khi tệp controller không tồn tại
    echo 'Tệp controller không tồn tại!';
}





?>