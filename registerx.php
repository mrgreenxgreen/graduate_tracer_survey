<?php
session_start();
include_once('connection.php');

if(isset($_POST['RegisterSubmit'])){
    $username = mysqli_real_escape_string($mysqli,$_POST['username']);
    $password = mysqli_real_escape_string($mysqli,$_POST['password']);
    $phoneNumber = mysqli_real_escape_string($mysqli,$_POST['phoneNumber']);

    if(empty($username) || empty($password) || empty($phoneNumber)){
        echo "empty username or password or phone number";
    } else {
        $result = mysqli_query($mysqli, "INSERT INTO client_users VALUES('','$username','$password','$phoneNumber',1)");
        
        echo "success!";
        echo "<a href=\"login.php\"> Proceed to login </a>";
    }
}
?>

