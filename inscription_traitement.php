<?php
require "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom     = trim($_POST['nom']);
    $prenom  = trim($_POST['prenom']);
    $email   = trim($_POST['email']);
    $password = $_POST['password'];
    $enspd   = $_POST['enspd'];

    // Vérifier si l'email existe déjà
    $verif = $conn->prepare("SELECT id FROM membres WHERE email = ?");
    $verif->bind_param("s", $email);
    $verif->execute();
    $verif->store_result();

    if ($verif->num_rows > 0) {
        header("Location: inscription.php?error=email");
        exit();
    }

    // Hachage du mot de passe
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // Insertion dans la table membres
    $sql = "INSERT INTO membres (nom, prenom, email, password, enspd)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nom, $prenom, $email, $hash, $enspd);

    if ($stmt->execute()) {
        header("Location: connexion.php?success=1");
        exit();
    } else {
        header("Location: inscription.php?error=inscription");
        exit();
    }
}
?>
