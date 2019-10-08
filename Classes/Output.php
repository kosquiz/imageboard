<?php

class Output{

    public function __construct(){

    }

    public function indexOutput(){
        
    }
    
    public function loginOutput($error){
        echo $error . "<br>";
        ?>
        <form method="post">
            <input type="text" name="e-mail"/>
            <input type="password" name="password"/>
            <input type="submit" value="send"/>
        </form>
        <?php
    }

    public function registerOutput($error){
        echo $error . "<br>";
        ?>
        <form method="post">
            <input type="text" name="e-mail"/>
            <input type="password" name="password"/>
            <input type="submit" value="send"/>
        </form>
        <?php
    }

    public function messageOutput($msg){
        echo $msg;
    }
}