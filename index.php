<?php
// Include router class
require_once('Classes/Route.php');
require_once('Classes/Controller.php');

//TODO CHANGE LATER TO ''
$prefix = "/imgboard";

$ctrl = new Controller();

// Add base route (startpage)
Route::add($prefix.'/',function(){
    global $ctrl;
    $ctrl->indexAction();
});

// Simple test route that simulates static html file
Route::add($prefix.'/test.html',function(){
    echo 'Hello from test.html';
});

// Post route example
Route::add($prefix.'/contact-form',function(){
    echo '<form method="post"><input type="text" name="test" /><input type="submit" value="send" /></form>';
},'get');

// Post route example
Route::add($prefix.'/contact-form',function(){
    echo 'Hey! The form has been sent:<br/>';
    print_r($_POST);
},'post');

// Accept only numbers as parameter. Other characters will result in a 404 error
Route::add($prefix.'/foo/([0-9]*)/bar',function($var1){
    echo $var1.' is a great number!';
});

Route::run('/');