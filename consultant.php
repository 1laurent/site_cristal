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

    <div class="credo">
        <div class="credo-table">
            <div class="credo-title">Consultant Indépendant</div>
            <div class="credo-content">
                Le/la Consultant(e) Indépendant(e) apporte une expertise technique et stratégique au Bureau Exécutif et au Conseil d’Administration du CRISTAL, dans le but d’améliorer la qualité, la performance et l’impact des projets et activités du collectif. Ses responsabilités principales consistent à analyser et formuler des recommandations sur les projets, plans d’action et initiatives du CRISTAL, proposer des stratégies d’innovation, d’efficacité et de visibilité pour renforcer l’impact du collectif, accompagner les sections et commissions dans la conception ou l’amélioration de leurs activités, contribuer à la veille académique et organisationnelle en identifiant de nouvelles idées, opportunités ou partenariats, rédiger des notes techniques et rapports de conseil destinés au Président et/ou au Conseil d’Administration, participer à certaines réunions stratégiques à titre consultatif sans droit de vote pour éclairer les décisions, et garantir la neutralité et l’objectivité dans toutes ses analyses et interventions.            </div>
        </div>
    </div>

    <div class="valeurs">
        <div class="valeurs-table">
            <div class="valeurs-title">Consultant aux Comptes Indépendant</div>
            <div class="valeurs-content">
                Le/la Consultant(e) aux Comptes Indépendant(e) assure une mission de contrôle, d’audit interne et de suivi financier afin de garantir la transparence, la rigueur et la conformité dans la gestion des ressources du CRISTAL. Il agit comme un regard externe et impartial sur la gestion financière et administrative. Ses responsabilités principales incluent l’examen périodique des documents comptables et financiers tels que reçus, dépenses et rapports financiers, la vérification de la conformité des dépenses avec les décisions validées par le Bureau Exécutif et le Conseil d’Administration, l’évaluation de la régularité et de la traçabilité des flux financiers et matériels du collectif, la rédaction de rapports d’audit ou de vérification à présenter au Président et au Conseil d’Administration, et la formulation d’avis indépendants sur la santé financière du collectif avec proposition de mesures correctives. Il veille également à la mise en œuvre des principes de bonne gouvernance financière, incluant la transparence, la justification et l’archivage, et préserve la confidentialité des informations financières en agissant dans l’intérêt exclusif du collectif.            </div>
        </div>
    </div>

</section>

</body>
</html>
