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
    </style>
</head>
<body>
<section class="credo-valeurs-container">
    <!-- Colonne gauche : Credo -->
    <div class="credo">
        <div class="credo-table">
            <div class="credo-title">Organe du CRISTAL</div>
            <div class="credo-content">
             Les connaissances acquises à l’Université aussi solides soient-elles ne suffisent pas à préparer pleinement les étudiants aux défis du monde professionnel. Conscients de ce décalage, les étudiants de l’ENSPD ont décidé de prendre les choses en mains. C’est ainsi qu’est né le CRISTAL, un collectif dont l’ambition est de combler ce fossé entre la théorie et la pratique. 
             Il a été créé le mardi 12 juillet 2016 par les étudiants de l’Ecole Nationale de Statistique, de Planification et de Démographie.
            </div>
        </div>
    </div>

    <div class="organe">
    <a href="organe.php" class="button">Organes du CRISTAL</a>
</div>


<style>
/* Colonne Credo */
.credo {
    flex: 1;
}

.credo-table {
    border: 2px solid #ff9900ff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
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
    padding: 25px;
    font-size: 16px;
    line-height: 1.7;
    text-align: justify;
}

</style>
</body>
</html>
