<?php
class connect
{
    // khởi tạo thuộc tính lớp connect
    protected $db = null;


    ///kết nối database
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=sandb';
        $user = 'root';
        $pass = '';
        $this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    //Lấy dữ liệu database 
    public function getList($select)
    {
        $result = $this->db->query($select);
        return $result;
    }

    //tạo phương thức câu lệnh insert,update, delete
    public function exec($query)
    {
        $result = $this->db->exec($query);
        return $result;
    }

    public function getInstance($select)
    {
        $results = $this->db->query($select);
        $result = $results->fetch();
        return $result;
    }

}

?>