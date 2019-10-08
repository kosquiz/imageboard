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
        $this->out->indexOutput();
    }

    public function loginActionGet(){
        $this->out->loginOutput("");
    }

    public function loginActionPost(){
        $user = $this->db->getUser($_POST['e-mail']);
        if(!empty($user) && password_verify($_POST['password'], $user['password'])){
            $_SESSION['logged_in'] = true;
            $_SESSION['email'] = $_POST['e-mail'];
            header('Location: /imgboard');
        }
        else{
            $this->out->loginOutput("Wrong login credentials");
        }

    }

    public function registerActionGet(){
        $this->out->registerOutput("");
    }

    public function registerActionPost(){
        $email = $_POST['e-mail'];
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $exists = $this->db->getUser($email);
        if(empty($exists)){
            $this->db->insertUser($email, $pass);
            $_SESSION['logged_in'] = true;
            $_SESSION['email'] = $email;
            $this->out->messageOutput("Congratulations ".$email.", you have been registered!");
        }
        else{
            $this->out->registerOutput("Error with registering");
        }
        
    }
}