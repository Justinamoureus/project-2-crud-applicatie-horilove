
<?php
function dbconnect() {
    // Declareert de database 
    $servername = "localhost";
    $database = "horilove";
    $dns = "mysql:host=$servername;dbname=$database";
    $username = "bit_academy";
    $password = "bit_academy";
    $conn = new PDO ($dns, $username, $password);
    return $conn;
}


 