<?php
// kế thừa hàm get_all_from($table) từ file master.php
class ModelHome extends Mastermodel
{
    function getDuLieu()
    {

        //lấy tất cả dữ liệu từ bảng 
        //get_all_from('tên bảng');
        return parent::get_all_from('users');
    }
}
?>