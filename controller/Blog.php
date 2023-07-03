<?php
require_once 'config/db.php';
require_once 'model/newsModel.php';
require_once 'model/Property.php';


class BlogController
{
    public function index()
    {
        $newsModel = new NewsModel();
        $newsList = $newsModel->getAllNews();
        require_once 'view/blog/index.php';
    }

    public function blog($newsId = null)
    {
        if (!is_null($newsId)) {
            $newsModel = new NewsModel();
            $newsModel->incrementNewsViewCount($newsId);
            $news = $newsModel->getNewsWithDetails($newsId);
            $tagModel = new NewsModel();
            $tagCounts = $tagModel->countNewsByTags();
            
            // Lấy danh sách tin tức để hiển thị trong phần "Trending Posts"
            $newsList = $newsModel->getAllNews();
            
            require_once 'view/blog/singleblog.php';
        }
    }
    
}

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
            // Kiểm tra xem có tham số `newsId` được truyền vào hay không
            if (isset($_GET['newsId'])) {
                // Gọi phương thức action tương ứng trên controller và truyền tham số `newsId`
                $controllerObject->{$action}($_GET['newsId']);
            } else {
                // Xử lý khi không có `newsId`
            }
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
