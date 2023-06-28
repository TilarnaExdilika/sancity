<?php

require_once 'config/db.php';

class LoginModel extends connect {

    public function authenticate($username, $password) {
        // Xử lý logic xác thực đăng nhập

        $query = "SELECT * FROM users WHERE username = :username AND password = :password";
        $statement = $this->getConnection()->prepare($query);
        $hashedPassword = md5($password);
        $statement->bindParam(':username', $username);
        $statement->bindParam(':password', $hashedPassword);
        $statement->execute();
        $result = $statement->fetch();
        
        if ($result) {
            $_SESSION["auth"] = $result;
            $this->isLoggedIn(); // Đánh dấu là đã đăng nhập thành công
            return $result;
        } else {
            // Xác thực không thành công, trả về false
            return false;
        }
    }

    public function register($username, $email, $password) {
        // Xử lý logic đăng ký

        $query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $statement = $this->getConnection()->prepare($query);
        $hashedPassword = md5($password);
        $statement->bindParam(':username', $username);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $hashedPassword);
        $result = $statement->execute();
        
        if ($result) {
            // Đăng ký thành công, trả về true
            $_SESSION["auth"] = $result;
            $this->isLoggedIn(); // Đánh dấu là đã đăng nhập thành công
            return true;
        } else {
            // Đăng ký không thành công, trả về false
            return false;
        }
    }

    public function isLoggedIn() {
        $loggedIn = false;

        if(isset($_SESSION["auth"])){
            $loggedIn = true;
        }
        return $loggedIn;
    }

    public function getUserIdByUsername($username) {
        $query = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
    
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['user_id'];
    }
    
    
}
