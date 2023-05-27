<?php

require_once 'config/db.php';

class BdsListModel {
    private $db;

    public function __construct() {
        $this->db = new connect();
    }

    public function getBdsSellList() {
        $select = "SELECT * FROM properties WHERE type_id = 1";
        $bdsSellList = $this->db->getList($select);
        return $bdsSellList;
    }

    public function getBdsRentList() {
        $select = "SELECT * FROM properties WHERE type_id = 2";
        $bdsRentList = $this->db->getList($select);
        return $bdsRentList;
    }
}

?>
