<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription - CRISTAL</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f7fb; margin:0; padding:0; }
        .container { width:90%; max-width:450px; background:white; padding:25px; margin:40px auto; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.15); }
        h2 { text-align:center; color:#FF7F11; }
        label { display:block; margin-top:15px; font-weight:bold; color:#003366; }
        input, select { width:94%; padding:12px; margin-top:5px; border:1px solid #ccc; border-radius:8px; }
        button { width:100%; background:green; color:white; padding:12px; margin-top:20px; border:none; border-radius:8px; font-size:16px; cursor:pointer; }
        button:hover { background:#00264d; }
        .message { text-align:center; margin-top:15px; font-weight:bold; padding:10px; border-radius:8px; }
        .error { background:red; color:white; }
        .success { background:green; color:white; }
        .choix { width:100%; padding:12px; margin-top:5px; border:1px solid #ccc; border-radius:8px; }

        /* champ carte étudiant caché au départ */
        #carte_etudiant_bloc {
            display: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Créer un compte</h2>

    <?php
        if (isset($_GET['error'])) {
            $msg = "";
            if ($_GET['error'] == "email") $msg = "Cet email est déjà utilisé.";
            elseif ($_GET['error'] == "inscription") $msg = "Erreur lors de l'inscription.";
            echo "<p class='message error'>$msg</p>";
        }
    ?>

    <!-- IMPORTANT : enctype ajouté -->
    <form action="traitement_inscription.php" method="POST" enctype="multipart/form-data">
        <label>Nom :</label>
        <input type="text" name="nom" required>

        <label>Prénom :</label>
        <input type="text" name="prenom" required>

        <label>Email :</label>
        <input type="email" name="email" required>

        <label>Mot de passe :</label>
        <input type="password" name="password" required>

        <label>Êtes-vous à l’ENSPD ?</label>
        <select name="enspd" required class="choix" id="enspd">
            <option value="">-- Choisir --</option>
            <option value="oui">Oui</option>
            <option value="non">Non</option>
        </select>

        <!-- CHAMP UPLOAD CARTE -->
        <div id="carte_etudiant_bloc">
            <label>Téléverser votre carte d’étudiant :</label>
            <input type="file" name="carte_etudiant" accept="image/*,application/pdf">
        </div>

        <button type="submit">Créer un compte</button>
    </form>
</div>

<!-- SCRIPT D’AFFICHAGE AUTOMATIQUE -->
<script>
    const selectENSPD = document.getElementById("enspd");
    const blocCarte = document.getElementById("carte_etudiant_bloc");

    selectENSPD.addEventListener("change", function () {
        if (this.value === "oui") {
            blocCarte.style.display = "block";
        } else {
            blocCarte.style.display = "none";
        }
    });
</script>

</body>
</html>
