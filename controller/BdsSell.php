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
        $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
        $city = isset($_POST['city']) ? $_POST['city'] : '';
        $propertyType = isset($_POST['propertyTypes']) ? $_POST['propertyTypes'] : '';
        $price = isset($_POST['price']) ? $_POST['price'] : '';
        $bedroom = isset($_POST['bedroom']) ? $_POST['bedroom'] : '';
        $bathroom = isset($_POST['bathroom']) ? $_POST['bathroom'] : '';
        $age = isset($_POST['age']) ? $_POST['age'] : '';
        $minArea = isset($_POST['min_area']) ? $_POST['min_area'] : '';
        $maxArea = isset($_POST['max_area']) ? $_POST['max_area'] : '';
        $utilities = isset($_POST['utilities']) ? $_POST['utilities'] : '';
        $offset = isset($_POST['offset']) ? $_POST['offset'] : 0;
        $limit = isset($_POST['limit']) ? $_POST['limit'] : 10;
    
        $result = $this->model->sellProperties($keyword, $city, $propertyType, $price, $bedroom, $bathroom, $age, $minArea, $maxArea, $utilities, $offset, $limit);
    
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
