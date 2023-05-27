<?php

require_once 'model/BdsListModel.php';

class BdsListController {
    private $model;

    public function __construct() {
        $this->model = new BdsListModel();
    }

    public function showBdsSellList() {
        $bdsSellList = $this->model->getBdsSellList();
        // Trả về view và truyền danh sách bất động sản bán
        require 'path/to/view/bds_sell/index.php';
    }

    public function showBdsRentList() {
        $bdsRentList = $this->model->getBdsRentList();
        // Trả về view và truyền danh sách bất động sản cho thuê
        require 'path/to/view/bds_rent/index.php';
    }
}

?>
