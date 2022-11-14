<?php
session_start();
if(isset($_POST["username"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'db_conn.php';
    require_once 'functions.php';
    
    loginUser($conn, $username, $password);

}