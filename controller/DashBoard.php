<?php
require_once 'config/db.php';
require_once 'model/LoginModel.php';
require_once 'model/UserModel.php';
require_once 'model/newsModel.php';

class DashBoardController
{
    protected $user;
    protected $user_2;

    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $user_id = $_SESSION['auth'];
        $this->user = $this->userModel->getUserByID($user_id);
    }
    public function index()
    {
        
        $user = $this->user;
        $user_id = $user['user_id'];
        
        // Đếm tổng số bất động sản của người dùng
        $propertyCount = $this->userModel->countTotalByColumn('user_id', 'properties', $user_id);
    
        $properties = $this->userModel->getPropertyByUser($user_id);
        require_once 'view/dashboard/index.php';
    }

    public function profile()
    {
        $user = $this->user;
        require_once 'view/dashboard/profile.php';
    }

    public function saveProperty()
    {
        $user = $this->user;
        $userId = $_SESSION["uauth"]["user_id"];
        // Gọi hàm getAllNewsByUserId để lấy danh sách tin tức của user
        $newsModel = new NewsModel();
        $newsList = $newsModel->getAllNewsByUserId($userId);
        require_once 'view/dashboard/saveProperty.php';
    }

    public function myProperty()
    {
        $user = $this->user;
        $user_id = $user['user_id'];
        
        // Đếm tổng số bất động sản của người dùng
        $propertyCount = $this->userModel->countTotalByColumn('user_id', 'properties', $user_id);
    
        $properties = $this->userModel->getPropertyByUser($user_id);
        require_once 'view/dashboard/myProperty.php';
    }

    public function messages()
    {
        $user = $this->user;
        require_once 'view/dashboard/messages.php';
    }

    public function package()
    {
        $user = $this->user;
        require_once 'view/dashboard/package.php';
    }

    public function newProperty()
    {
        
        $user = $this->user;
        $newsModel = new NewsModel();
        $tags = $newsModel->getAllTags();
        require_once 'view/dashboard/newProperty.php';
    }

    public function submitProperty()
    {
        $loginModel = new LoginModel();
        $isLoggedIn = $loginModel->isLoggedIn();
    
        
        // Tiếp tục xử lý dữ liệu và thực hiện các thao tác khác
    
        require_once 'view/dashboard/submitProperty.php';
    }
    

    

    public function changePassword()
    {
        $user = $this->user;
        require_once 'view/dashboard/changePassword.php';
    }

    // admin controller
    public function admin_dashboard()
    {
        $user = $this->user;
        $user_id = $user['user_id'];

        // Đếm số lượng ảnh trong bảng property_images
        $imageCount = $this->userModel->countPropertyImages();

        // Đếm tổng số bất động sản trong bảng properties
        $propertyCount = $this->userModel->countProperties();

        // Đếm tổng số tin tức trong bảng news_blog
        $newsCount = $this->userModel->countNewsBlogs();

        // Đếm tổng số người dùng trong bảng users
        $userCount = $this->userModel->countUsers();

        $totalViewCount = $this->userModel->countTotalViewCount();

        require_once 'view/dashboard/admin/admin_dashboard.php';
    }

    public function admin_account()
    {
        $user = $this->user;
        // Lấy danh sách người dùng kèm thông tin bất động sản
        $usersWithProperties = $this->userModel->getUsersWithPropertiesAdmin();
        require_once 'view/dashboard/admin/admin_account.php';
    }

    public function admin_account_per()
    {
        $this->userModel = new UserModel();
        $user_id_2 = $_GET['user_id'];
        $this->user_2 = $this->userModel->getUserByID_2($user_id_2);
        $user = $this->user;
        $user_2 = $this->user_2; // Lưu trữ dữ liệu của getUserByID_2
        $userModel = new UserModel();
        $accountTypes = $userModel->getAccountTypes();
        
        require_once 'view/dashboard/admin/admin_account_per.php';
    }

    public function admin_news()
    {
        $user = $this->user;
        $newsModel = new NewsModel();
        $newsList = $newsModel->getAllNews();
        require_once 'view/dashboard/admin/admin_news.php';
    }
    public function admin_property()
    {
        $user = $this->user;
        // Lấy danh sách bất động sản và dữ liệu người dùng tương ứng
        $properties = $this->userModel->getAllPropertyAdmin();
        require_once 'view/dashboard/admin/admin_property.php';
    }

}

?>