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

        foreach ($result as $key => $row) {
            $result[$key]['formatted_price'] = $this->formatPrice($row['price']);
        }

        require_once 'view/bds_sell/index.php';
    }

    private function formatPrice($price)
    {
        if ($price >= 1000000000) {
            $formatted_price = number_format($price / 1000000000, 1);
            return $formatted_price . " tỷ";
        } else if ($price >= 1000000) {
            return number_format($price / 1000000, 0) . " triệu";
        } else if ($price >= 1000) {
            return number_format($price / 1000, 0) . " nghìn";
        } else {
            return $price;
        }
    }
    
}

?>