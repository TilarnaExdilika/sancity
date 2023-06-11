<?php
// File HomeController.php
require_once "model/Property.php";

class HomeController
{
    protected $model;

    public function __construct()
    {
        $db = new connect();
        $this->model = new ModelHome($db);
    }

    public function index()
    {
        $result = $this->model->getProperties();
        require_once "view/Home/index.php";
    }
}

?>