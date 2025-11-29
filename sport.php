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
        }

        /* RESPONSIVE */
        @media screen and (max-width: 768px) {
            .credo-valeurs-container {
                flex-direction: column;
            }
        }

        /* --- COLONNE HISTORIQUE --- */
        .credo { 
            flex: 1; 
            display: flex;
            min-width: 0;           /* AJOUT */
            box-sizing: border-box;  /* AJOUT */
        }

        .credo-table {
            border: 2px solid #ff9900ff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            background: white;

            display: flex;
            flex-direction: column;
            width: 100%;
            box-sizing: border-box;  /* AJOUT */
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
            padding: 35px;
            font-size: 18px;
            line-height: 1.7;
            text-align: justify;
            text-justify: inter-word;
            flex: 1;
        }

        /* --- COLONNE ORGANES --- */
        .valeurs { 
            flex: 1; 
            display: flex;
            min-width: 0;           /* AJOUT */
            box-sizing: border-box;  /* AJOUT */
        }

        .valeurs-table {
            border: 2px solid #0B7A4B;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);

            display: flex;
            flex-direction: column;
            width: 100%;
            box-sizing: border-box;  /* AJOUT */
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
            background-color: #fff7e6;
            padding: 35px;
            font-size: 18px;
            line-height: 1.7;
            text-align: justify;
            text-justify: inter-word;
            flex: 1;
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

<!-- ===== PREMIER BLOC ===== -->
<section class="credo-valeurs-container">

    <div class="valeurs">
        <div class="valeurs-table">
            <div class="valeurs-title">Chargé du Sport</div>
            <div class="valeurs-content">
                Le/la Chargé(e) du Sport assure la promotion de la pratique sportive, la cohésion et le bien-être au sein du collectif à travers l’organisation d’activités sportives régulières, compétitives ou récréatives, dans un esprit d’unité, de discipline et de fair-play. Ses responsabilités principales consistent à planifier, coordonner et superviser les activités sportives du collectif, favoriser la participation des différentes sections pour renforcer la cohésion et la convivialité entre membres, représenter le CRISTAL et l’ENSPD dans les compétitions inter-écoles, inter-organisations ou événements sportifs officiels, collaborer avec la cellule de communication pour assurer la visibilité et la bonne organisation des activités sportives, veiller à la bonne gestion du matériel sportif, encourager l’esprit d’équipe, le respect et le fair-play dans toutes les activités physiques, et rédiger un rapport d’événement sportif à la fin de chaque événement ou à la demande du bureau exécutif.            </div>
            </div>
        </div>
    </div>

</section>

</body>
</html>
