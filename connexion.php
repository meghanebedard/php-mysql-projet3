<?php
$servername = "localhost";
$username = "alfy";
$password = "nufhig-Cepxob-jenzu1";
$port = 8889;

$dbname = "Colnet";

try {
    $dbco = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password);
    $dbco -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur : " . $e -> getMessage();
}
?>