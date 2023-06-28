<?php
require_once 'config/db.php';
require_once 'model/LoginModel.php';

class DashBoardController
{
    public function index()
    {
        require_once 'view/dashboard/index.php';
    }

    public function profile()
    {
        require_once 'view/dashboard/profile.php';
    }

    public function saveProperty()
    {
        require_once 'view/dashboard/saveProperty.php';
    }

    public function myProperty()
    {
        require_once 'view/dashboard/myProperty.php';
    }

    public function messages()
    {
        require_once 'view/dashboard/messages.php';
    }

    public function package()
    {
        require_once 'view/dashboard/package.php';
    }

    public function newProperty()
    {
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
        require_once 'view/dashboard/changePassword.php';
    }
}

?>