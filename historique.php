<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>CRISTAL - Historique & Organes</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            margin: 0;
            padding: 0;
        }

        /* --- LAYOUT PRINCIPAL EN DEUX COLONNES --- */
        .credo-valeurs-container {
            display: flex;
            flex-direction: row;
            gap: 25px;
            padding: 40px;
            width: 100%;
            box-sizing: border-box;
            align-items: stretch; /* Assure que les colonnes ont la même hauteur */
        }

        /* RESPONSIVE */
        @media screen and (max-width: 768px) {
            .credo-valeurs-container {
                flex-direction: column;
            }
        }

        /* --- COLONNE HISTORIQUE --- */
        .credo { flex: 1; display: flex; }

        .credo-table {
            border: 2px solid #ff9900ff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            background: white;
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .credo-title {
            background-color: #ff9900ff;
            color: white;
            font-size: 24px;
            font-weight: bold;
            padding: 15px;
            text-align: center;
        }

        .credo-content {
            background-color: #fff7e6;
            padding: 10px;
            font-size: 18px;
            line-height: 1.7;
            text-align: justify;
            text-justify: inter-word;
            flex: 1; /* Prend toute la hauteur restante pour aligner les bordures */
        }

        /* --- COLONNE ORGANES --- */
        .valeurs { flex: 1; display: flex; }

        .valeurs-table {
            border: 2px solid #0B7A4B;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .valeurs-title {
            background-color: #0B7A4B;
            color: white;
            font-size: 24px;
            font-weight: bold;
            padding: 15px;
            text-align: center;
        }

        .valeurs-content {
            padding: 22px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            flex: 1; /* Prend toute la hauteur restante pour aligner les bordures */
        }

        /* --- BOUTONS CLIQUABLES --- */
        .value-box {
            display: block;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 6px black;
            text-align: center;
            font-weight: bold;
            color: black;
            background: white;
            text-decoration: none;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .value-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }

        .value-box h3 {
            margin: 0;
        }
    </style>
</head>
<body>

<section class="credo-valeurs-container">

    <!-- ***** COLONNE GAUCHE : HISTORIQUE ***** -->
    <div class="credo">
        <div class="credo-table">
            <div class="credo-title">Historique du CRISTAL</div>
            <div class="credo-content">
                Les connaissances acquises à l’Université aussi solides soient-elles ne suffisent pas 
                à préparer pleinement les étudiants aux défis du monde professionnel. Conscients de 
                ce décalage, les étudiants de l’ENSPD ont décidé de prendre les choses en mains. 
                C’est ainsi qu’est né le CRISTAL, un collectif dont l’ambition est de combler ce 
                fossé entre la théorie et la pratique. Il a été créé le mardi 12 juillet 2016 par les 
                étudiants de l’Ecole Nationale de Statistique, de Planification et de Démographie.
            </div>
        </div>
    </div>

    <!-- ***** COLONNE DROITE : ORGANES ***** -->
    <div class="valeurs">
        <div class="valeurs-table">
            <div class="valeurs-title">Organes du CRISTAL</div>
            <div class="valeurs-content">
                <!-- BOUTONS CLIQUABLES -->
                <a href="bureau.php" class="value-box"><h3>Bureau Exécutif</h3></a>
                <a href="comite.php" class="value-box"><h3>Comité de sections</h3></a>
                <a href="communication.php" class="value-box"><h3>Cellules</h3></a>
                <a href="consultant.php" class="value-box"><h3>Consultance</h3></a>
                <a href="sport.php" class="value-box"><h3>Sport</h3></a>
            </div>
        </div>
    </div>

</section>

</body>
</html>
