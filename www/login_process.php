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
$password = $_POST['password'];

require 'database.php';

$sql = "SELECT * FROM users WHERE email = '$email' ";

$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);


if(!is_array($user)){
    echo 'No user is found';
    exit;
}

if($password != $user['password']){
    echo "ohoh wachtwoord is niet correct!";
    exit;
}

header("location: dashboard.php");
exit;

