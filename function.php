<?php
session_start();
function checkIfLoggedIn (){
    if(empty($_SESSION[ 'isLoggedIn' ])){
        header('Location: /login.php');
        exit;
    }
}