<?php
require_once 'model/UserModel.php';

class AgencyController
{
    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->getUsers();

        require_once 'view/agency/index.php';
    }
}
?>
