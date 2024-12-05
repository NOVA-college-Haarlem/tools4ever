<?php

session_start();//session continue

if(!isset($_SESSION['email'])){
    echo "Stop jij mag hier niet zijn!!";
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Welkom ". $_SESSION['firstname']; ?></h1>

    <a href="logout.php">Logout</a>
</body>
</html>


