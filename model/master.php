<?php
class Mastermodel
{
    public function __construct()
    {

    }

    //Hàm được dùng để đổ giá trị của bảng khi gán gtrj bảng 
    public static function get_all_from($table)
    {
        $db = new connect();
        $select = "select * from $table";
        $result = $db->getList($select);
        return $result;
    }
}
?>