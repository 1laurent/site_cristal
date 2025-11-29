<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "cristal_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}
?>
