<?php

require_once('Database.php');
require_once('Output.php');

class Controller{

    private $out;
    private $db;

    public function __construct(){
        $this->out = new Output();
        $this->db = new Database();
    }

    public function indexAction(){

    }

    public function loginActionGet(){
        $this->out->loginOutput();
    }

    public function registerActionget(){
        $this->out->registerOutput();
    }
}