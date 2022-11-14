<?php

require_once 'db_conn.php';

function loginUser($conn, $username, $password){
    $query = "SELECT * FROM `tbl_users` WHERE username='$username' AND password='$password' ";
    $result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) != 0) {
        $dbusername = $row['username'];
        $dbpassword = $row['password'];

        header("Location: landing_page.php");
    } else {
        echo "Invalid Log in";
    }
}