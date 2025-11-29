<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "cristal_site";   // nouveau nom ici

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}
?>
