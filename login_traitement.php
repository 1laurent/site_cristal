<?php
session_start();
require "db.php"; // $conn défini ici

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        header("Location: connexion.php?error=vide");
        exit;
    }

    // Chercher l’utilisateur avec mysqli
    $stmt = $conn->prepare("SELECT * FROM membres WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_nom'] = $user['nom'];

        // Redirection selon membre du CRISTAL ou non
        if ($user['enspd'] == "oui") {
            header("Location: tableau_de_bord.php"); // Dashbord du CRISTAL
        } else {
            header("Location: dashboard_non_cristal.php"); // Dashbord du NON CRISTAL
        }
        exit;

    } else {
        header("Location: connexion.php?error=identifiant");
        exit;
    }
}
?>
