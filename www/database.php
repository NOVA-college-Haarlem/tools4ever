<?php

//database connection   
$dbhost = "mariadb";
$dbuser = "user";
$dbpass = "password";
$dbname = "tools4ever";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
