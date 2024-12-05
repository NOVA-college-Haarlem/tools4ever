<?php


require 'database.php';

if(!isset($_POST['email'])){
    echo "email key bestaat nite";
    exit;
}
if(!isset($_POST['password'])){
    echo "password key bestaat nite";
    exit;
}

if(empty($_POST['email'])){
    echo "email is leeg";
    exit;
}

if(empty($_POST['password'])){
    echo "password is leeg";
    exit;
}

$email = $_POST['email'];

$sql = "SELECT * FROM users WHERE email = '$email'";

$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

if(is_array($user)){
    echo $user['firstname'] . " is ingelogd";

}