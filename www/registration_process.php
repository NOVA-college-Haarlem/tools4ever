<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    // Controleren of elk veld is ingevuld
    if (!isset($_POST['firstname']) || empty(trim($_POST['firstname']))) {
        $errors[] = "Voornaam is verplicht.";
    }

    if (!isset($_POST['lastname']) || empty(trim($_POST['lastname']))) {
        $errors[] = "Achternaam is verplicht.";
    }

    if (!isset($_POST['email']) || empty(trim($_POST['email']))) {
        $errors[] = "Email is verplicht.";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Voer een geldig emailadres in.";
    }

    if (!isset($_POST['password']) || empty(trim($_POST['password']))) {
        $errors[] = "Wachtwoord is verplicht.";
    } elseif (strlen(trim($_POST['password'])) < 6) {
        $errors[] = "Wachtwoord moet minimaal 6 tekens lang zijn.";
    }

    if (!isset($_POST['address']) || empty(trim($_POST['address']))) {
        $errors[] = "Adres is verplicht.";
    }

    if (!isset($_POST['city']) || empty(trim($_POST['city']))) {
        $errors[] = "Stad is verplicht.";
    }

    if (!isset($_POST['role']) || empty(trim($_POST['role']))) {
        $errors[] = "Rol is verplicht.";
    }

    // Als er fouten zijn, toon ze
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        // Hier zou je de data naar de database schrijven
        echo "<p style='color:green;'>Registratie succesvol!</p>";
        // Voorbeeld van doorverwijzing na succesvolle registratie
        // header("Location: success.php");
        // exit;
    }

    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $role = $_POST['role'] ?? 'administrator'; 

    require 'database.php';
    $sql = "INSERT INTO users (email, password, firstname, lastname, address, city, is_active, role)
                    VALUES ('$email', '$password', '$firstname', '$lastname', '$address', '$city', 1, '$role') ";

    if(mysqli_query($conn, $sql)){
        echo "je bent geregistreerd!";
        exit;
    }

}
?>
