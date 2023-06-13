<?php
require_once "model/Property.php";
class BdsSellController
{
    protected $model;
    public function __construct()
    {
        $db = new connect();
        $this->model = new ModelHome($db);
    }
    public function index()
    {
        $result = $this->model->SellProperties();
        require_once 'view/bds_sell/index.php';
    }
}

?>