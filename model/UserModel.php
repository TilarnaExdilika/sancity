<?php

require_once 'config/db.php';

class UserModel extends Connect
{
    public function login($username, $password)
    {
        $hashedPassword = $this->getHashedPassword($username);
        if ($hashedPassword !== null) {
            if (password_verify($password, $hashedPassword)) {
                // Xác thực thành công
                return true;
            }
        }
        return false;
    }

    public function register($username, $email, $password)
    {
        // Kiểm tra xem tên người dùng đã tồn tại trong cơ sở dữ liệu chưa
        $existingUser = $this->getUserByUsername($username);
        if ($existingUser !== null) {
            // Tên người dùng đã tồn tại
            return false;
        }

        // Thực hiện thêm người dùng mới vào cơ sở dữ liệu
        $query = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
        $statement = $this->db->prepare($query);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $statement->execute([$username, $hashedPassword, $email]);
        return true;
    }

    public function getUserByUsername($username)
    {
        $query = "SELECT * FROM users WHERE username = ?";
        $statement = $this->db->prepare($query);
        $statement->execute([$username]);
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    public function getHashedPassword($username)
    {
        $query = "SELECT password FROM users WHERE username = ?";
        $statement = $this->db->prepare($query);
        $statement->execute([$username]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        if ($result !== false) {
            return $result['password'];
        }
        return null;

        
    }
}
?>
