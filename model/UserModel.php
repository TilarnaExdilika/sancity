<?php
require_once 'config/db.php';

class UserModel
{
    protected $db;

    public function __construct()
    {
        $connect = new Connect();
        $this->db = $connect->getConnection();
    }

    
    //Lấy DS tất cả User
    public function getUsers()
    {
        $query = "SELECT * FROM users";
        $result = $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    // Lấy danh sách người dùng kèm theo thông tin về bất động sản mà họ đã đăng.
    public function getUserWithProperties()
    {
        $query = "SELECT u.*, p.property_name, p.description
                  FROM users u
                  INNER JOIN properties p ON u.user_id = p.user_id";
        $result = $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }


    // Lấy danh sách người dùng kèm theo thông tin liên quan như tên loại bất động sản, URL hình ảnh, tên bất động sản và mô tả từ bảng liên kết.
    public function getUserWithRelatedInfo()
    {
        $query = "SELECT u.*, p.property_name, p.description, pt.type_name, pi.image_url
                  FROM users u
                  INNER JOIN properties p ON u.user_id = p.user_id
                  INNER JOIN property_types pt ON p.type_id = pt.type_id
                  INNER JOIN property_images pi ON p.property_id = pi.property_id";
        $result = $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}
?>