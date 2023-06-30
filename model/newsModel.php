<?php
require_once 'config/db.php';

class NewsModel
{
    private $db;

    public function __construct()
    {
        $connect = new Connect();
        $this->db = $connect->getConnection();
    }

    public function getAllTags()
    {
        $query = "SELECT * FROM tags";
        $tags = $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
        return $tags;
    }
}
?>
