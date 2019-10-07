<?php

class Database{
    
    private $db;

    public function __construct(){
        $this->db = new PDO("mysql:dbname=imgboard;host=127.0.0.1;charset=utf8", "root");
    }
}