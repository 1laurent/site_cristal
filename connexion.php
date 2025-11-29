<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - CRISTAL</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f7fb; margin:0; padding:0; }
        .container { width:90%; max-width:450px; background:white; padding:25px; margin:40px auto; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.15); }
        h2 { text-align:center; color:#FF7F11; }
        label { display:block; margin-top:15px; font-weight:bold; color:#003366; }
        input { width:94%; padding:12px; margin-top:5px; border:1px solid #ccc; border-radius:8px; }
        button { width:100%; background:green; color:white; padding:12px; margin-top:20px; border:none; border-radius:8px; font-size:16px; cursor:pointer; }
        button:hover { background:#00264d; }
        .message { text-align:center; margin-top:15px; font-weight:bold; padding:10px; border-radius:8px; }
        .error { background:red; color:white; }
        .success { background:green; color:white; }
    </style>
</head>
<body>

<div class="container">
    <h2>Connexion</h2>

    <?php
        // Affichage des messages de succès et d'erreur
        if (isset($_GET['success'])) {
            echo "<p class='message success'>Inscription réussie ! Connectez-vous maintenant !.</p>";
        }

        if (isset($_GET['error'])) {
            $msg = "";
            switch ($_GET['error']) {
                case "vide":
                    $msg = "Veuillez remplir tous les champs.";
                    break;
                case "identifiant":
                    $msg = "Email ou mot de passe incorrect.";
                    break;
                case "db":
                    $msg = "Erreur serveur, veuillez réessayer plus tard.";
                    break;
                default:
                    $msg = "Erreur inconnue.";
            }
            echo "<p class='message error'>$msg</p>";
        }
    ?>

    <form action="login_traitement.php" method="POST">
        <label>Email :</label>
        <input type="email" name="email" required>
        <label>Mot de passe :</label>
        <input type="password" name="password" required>
        <button type="submit">Se connecter</button>
    </form>
</div>

</body>
</html>
