<?php

class Database{
    
    private $db;

    public function __construct(){
        $this->db = new PDO("mysql:dbname=imgboard;host=127.0.0.1;charset=utf8", "root");
    }

    public function insertUser($user, $pass){
        $sql = $this->db->prepare("INSERT INTO users(email,password) VALUES(?,?)");
        $sql->execute($user,$pass);
        $this->db->commit();
        return $this->db->lastInsertId();
    }
}