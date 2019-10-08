<?php

class Database{
    
    private $db;

    public function __construct(){
        $this->db = new PDO("mysql:dbname=imgboard;host=127.0.0.1;charset=utf8", "root");
    }

    public function insertUser($email, $pass){
        $sql = $this->db->prepare("INSERT INTO users(email,password) VALUES(?,?)");
        $sql->execute([$email,$pass]);
        return $this->db->lastInsertId();
    }

    public function getUser($email){
        $sql = $this->db->prepare("SELECT * FROM users WHERE email=?");
        $sql->execute([$email]);
        $user = $sql->fetch();
        return $user;
    }
}