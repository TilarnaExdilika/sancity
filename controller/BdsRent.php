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
    
    
    public function index()
    {
        $result = $this->model->RentProperties();

        foreach ($result as $key => $row) {
            $result[$key]['formatted_price'] = $this->formatPrice($row['price']);
        }
        

        require_once 'view/bds_rent/index.php';
    }

    public function single()
    {
        if (isset($_GET['property_id'])) {
            $propertyId = $_GET['property_id'];
            $property = $this->model->getPropertyById($propertyId);
    
            // Kiểm tra nếu bất động sản tồn tại
            if (!empty($property)) {
                // Định dạng lại giá bất động sản
                $property['formatted_price'] = $this->formatPrice($property['price']);
                
                // Truyền dữ liệu $property vào view
                $data['property'] = $property;
                require_once 'view/bds_rent/single.php';
            } else {
                // Xử lý trường hợp không tìm thấy bất động sản hoặc không có giá trị 'price'
                echo "Không tìm thấy bất động sản hoặc không có giá.";
            }
        } else {
            // Xử lý trường hợp không có ID bất động sản được truyền vào
            echo "Vui lòng cung cấp ID bất động sản.";
        }
    }
}
?>
