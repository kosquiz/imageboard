<?php

class Output{

    public function __construct(){

    }

    
    public function loginOutput(){
        ?>
        <form method="post">
            <input type="text" name="e-mail"/>
            <input type="password" name="password"/>
            <input type="submit" value="send"/>
        </form>
        <?php
    }

    public function registerOutput(){
        ?>
        <form method="post">
            <input type="text" name="e-mail"/>
            <input type="password" name="password"/>
            <input type="submit" value="send"/>
        </form>
        <?php
    }
}