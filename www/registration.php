<?php

require 'database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<main>
    <div class="container">
        <form action="registration_process.php" method="post">
            <div>
                <label for="firstname">Voornaam:</label>
                <input type="text" id="firstname" name="firstname">
            </div>
            <div>
                <label for="lastname">Achternaam:</label>
                <input type="text" id="lastname" name="lastname">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label for="password">Wachtwoord:</label>
                <input type="password" id="password" name="password">
            </div>
            <div>
                <label for="address">Adres:</label>
                <input type="text" id="address" name="address">
            </div>
            <div>
                <label for="city">Stad:</label>
                <input type="text" id="city" name="city">
            </div>
            <div>
                <label for="role">Rol:</label>
                <select id="role" name="role">
                    <option value="">Selecteer Rol</option>
                    <option value="administrator">Admin</option>
                    <option value="employee">Werknemer</option>
                </select>
            </div>

            <button type="submit">Registreer!</button>
        </form>
    </div>
</main>
</body>
</html>
