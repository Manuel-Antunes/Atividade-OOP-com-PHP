<?php

require_once "app/data/repositories/Repository.php";

class UserRepository extends Repository
{
    public function index()
    {
        $query = $this->conn->query('SELECT * FROM users');
        $fetchAll = $query->fetchAll(PDO::FETCH_ASSOC);
        return $fetchAll;
    }
    public function store(String $username, String $password, String $fullname, String $email)
    {
        $stmt = $this->conn->prepare('INSERT INTO users (username, password, fullname, email) VALUES (:username, :password, :fullname, :email)');
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":fullname", $fullname);
        $stmt->execute();
    }
    public function auth(String $email, String $password)
    {
        $stmt = $this->conn->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return sizeof($result) > 0 ? $result[0] : NULL;
    }
}
