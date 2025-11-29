<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>CRISTAL</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>


    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background: #0b7a26;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 25px;
        }

        .hamburger {
            font-size: 26px;
            color: white;
            cursor: pointer;
        }

        .right-zone {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        /* Boutons connexion / inscription */
        .btn-zone {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .btn-inscription {
            background: orange;
            color: white;
            padding: 8px 18px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-connexion {
            border: 1px solid white;
            color: white;
            padding: 8px 18px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-deconnexion {
            background: red;
            color: white;
            padding: 7px 14px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            margin-left: 8px;
        }

        .user-name {
            color: white;
            font-weight: bold;
            margin-right: 8px;
        }

        /* Réseaux */
        .social-links a {
            color: white;
            font-size: 20px;
            margin-left: 12px;
        }

        /* Menu */
        #menu {
            position: absolute;
            top: 70px;
            left: 10px;
            background: white;
            width: 200px;
            border-radius: 8px;
            display: none;
            flex-direction: column;
        }

        #menu a {
            padding: 12px;
            text-decoration: none;
            color: #0b7a26;
            font-weight: bold;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>
    
<div id="particles-js"></div>
<header>

    <!-- Icône menu -->
    <div class="hamburger" onclick="toggleMenu()">
        ☰
    </div>
    <div class="social-links">
    <a href="https://www.facebook.com/profile.php?id=61575115630414" target="_blank"><i class="fab fa-facebook"></i></a>
    <a href="https://whatsapp.com/channel/0029VbBhS9W3GJOqDpGHQN0o" target="_blank"><i class="fab fa-whatsapp"></i></a>
    <a href="https://linkedin.com/in/votreprofil" target="_blank"><i class="fab fa-linkedin"></i></a>
    </div>

        <div class="right-zone">

        <!-- ✅ Zone dynamique PHP -->
        <div class="btn-zone">
            <a href="inscription.php" class="btn-inscription">Inscription</a>
            <a href="connexion.php" class="btn-connexion">Connexion</a>
        </div>
    </div>  
    <!-- Menu déroulant -->
    <nav id="menu">
        <a href="index.php">Accueil</a>
        <a href="historique.php">À propos</a>
        <a href="inscription.php">Inscription</a>
        <a href="connexion.php">Connexion</a>
    </nav>


</header>
