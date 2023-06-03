<?php
class connect
{
    protected $db = null;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=sancityup1';
        $user = 'root';
        $pass = '';
        try {
            $this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (PDOException $e) {
            throw new Exception("Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->db;
    }

    public function getInstance($query)
    {
        $stmt = $this->db->query($query);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function exec($query)
    {
        $result = $this->db->exec($query);
        return $result;
    }
}
?>
