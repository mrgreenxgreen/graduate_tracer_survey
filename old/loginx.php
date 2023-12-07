<?php
session_start();
include_once('dbconnection.php');

if(isset($_POST['Submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users";
    $query_result = mysqli_query($mysqli, $sql);

    while($res = mysqli_fetch_array($query_result)){
        if( $username == $res['user_name'] && $password == $res['user_password']) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header('Location:admin.php');
        }else{
            $_SESSION['message'] = "Invalid username or password";
            header('Location:login.php');
        }
    }
    //query
    //check if equal
    //redirect
}




?>