<?php include 'function/databaseconnect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Create Account</h2>
        <form method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Voornaam">First Name</label>
                    <input type="text" class="form-control" id="Voornaam" name="Voornaam" placeholder="Enter first name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="Achternaam">Last Name</label>
                    <input type="text" class="form-control" id="Achternaam" name="Achternaam" placeholder="Enter last name" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="Leeftijd">Age</label>
                    <input type="number" class="form-control" id="Leeftijd" name="Leeftijd" placeholder="Enter age" required>
                </div>
                <div class="form-group col-md-8">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Enter email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="Telefoonnummer">Phone Number</label>
                <input type="tel" class="form-control" id="Telefoonnummer" name="Telefoonnummer" placeholder="Enter phone number" required>
            </div>
            <div class="form-group">
                <label for="username">Gebruikersnaam</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Create Account</button>
        </form>
        <?php

        if (isset($_POST['submit'])) {
            $Voornaam = $_POST['Voornaam'];
            $Achternaam = $_POST['Achternaam'];
            $Leeftijd = $_POST['Leeftijd'];
            $Telefoonnummer = $_POST['Telefoonnummer'];
            $Email = $_POST['Email'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $conn = dbconnect();
            $stmnt = $conn->prepare("INSERT INTO `accounts` (`Voornaam`, `Achternaam`, `Leeftijd`, `Telefoonnummer`, `Email`, `username`, `password`) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmnt->execute([$Voornaam, $Achternaam, $Leeftijd, $Telefoonnummer, $Email, $username, $password]);
            echo "Account aangemaakt!";
        }

        ?>
    </div>
</body>

</html>
