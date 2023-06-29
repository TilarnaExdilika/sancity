<?php
require_once 'config/db.php';
require_once 'model/LoginModel.php';
require_once 'model/UserModel.php';

class DashBoardController
{
    protected $user;

    public function __construct()
    {
        $userModel = new UserModel();
        $user_id = $_SESSION['auth'];
        $this->user = $userModel->getUserByID($user_id);
    }
    public function index()
    {
        $user = $this->user;
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
        require_once 'view/dashboard/saveProperty.php';
    }

    public function myProperty()
    {
        $user = $this->user;
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
        require_once 'view/dashboard/admin/admin_dashboard.php';
    }


}

?>