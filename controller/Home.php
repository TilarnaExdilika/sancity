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
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : null;
        $city = isset($_GET['city']) ? $_GET['city'] : null;
        $propertyType = isset($_GET['propertyType']) ? $_GET['propertyType'] : null;
        $utilities = isset($_GET['utilities']) ? $_GET['utilities'] : array();
        
    
        $result = $this->model->getProperties($keyword, $city, $propertyType, $utilities);
        foreach ($result as $key => $row) {
            $result[$key]['formatted_price'] = $this->formatPrice($row['price']);
        }
        require_once "view/Home/index.php";
    }
    
    public function getLimitedProperties()
    {
        $offset = isset($_GET['offset']) ? $_GET['offset'] : 0;
        $limit = isset($_GET['limit']) ? $_GET['limit'] : 6;
    
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : null;
        $city = isset($_GET['city']) ? $_GET['city'] : null;
        $propertyType = isset($_GET['propertyType']) ? $_GET['propertyType'] : null;
        $utilities = isset($_GET['utilities']) ? $_GET['utilities'] : array();
    
        $result = $this->model->getLimitedProperties($keyword, $city, $propertyType, $utilities, $offset, $limit);
        foreach ($result as $key => $row) {
            $result[$key]['formatted_price'] = $this->formatPrice($row['price']);
        }
    
        header('Content-Type: application/json');
        echo json_encode($result);
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