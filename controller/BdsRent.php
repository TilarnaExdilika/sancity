<?php
require_once "model/Property.php";
class BdsRentController
{
    protected $model;
    public function __construct()
    {
        $db = new connect();
        $this->model = new ModelHome($db);
    }
    public function index()
    {
        $result = $this->model->RentProperties();
        require_once 'view/bds_rent/index.php';
    }
}

?>