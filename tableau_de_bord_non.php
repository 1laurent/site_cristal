<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Dashboard CRISTAL</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    body { font-family: Arial, sans-serif; margin:0; background: #f5f7fb; }
    header { display:flex; justify-content:space-between; align-items:center; background:#0B7A4B; color:white; padding:15px 30px; box-shadow:0 4px 6px rgba(0,0,0,0.1);}
    header h1 { margin:0; font-size:24px; }
    .animated-btn { text-decoration:none; color:white; background:#ff9900; padding:8px 15px; margin-left:10px; border-radius:5px; font-weight:bold; animation:pulse 1s infinite;}
    .logout-btn { text-decoration:none; color:white; background-color:#0B7A4B; padding:8px 15px; margin-left:10px; border-radius:5px; font-weight:bold;}
    @keyframes pulse {0%{transform:scale(1); background-color:#ff9900;} 50%{transform:scale(1.05); background-color:#ffc266;} 100%{transform:scale(1); background-color:#ff9900;}}
    main { padding:25px; }

    /* PROFIL */
    .profil { background:white; padding:20px; border-radius:10px; border-left:6px solid #0B7A4B; margin-bottom:25px; box-shadow:0 4px 10px rgba(0,0,0,0.1);}
    .profil h3 { margin:0 0 10px; color:#0B7A4B; text-align:center;}

    /* STATS */
    .stats { display:grid; grid-template-columns: repeat(4, 1fr); gap:15px; margin-bottom:30px;}
    .stat-box { background:white; padding:20px; border-radius:10px; text-align:center; border-bottom:5px solid #ff9900; box-shadow:0 3px 8px rgba(0,0,0,0.1);}
    .stat-box h2 { margin:0; color:#0B7A4B; font-size:28px; }
    .stat-box p { margin:5px 0 0; color:#555; }

    /* DASHBOARD CARDS */
    .dashboard-grid { display:grid; grid-template-columns: repeat(2, 1fr); gap:20px; margin-bottom:30px; }
    .dashboard-card { background:white; border:2px solid #0B7A4B; border-radius:10px; padding:20px; transition:0.3s; cursor:pointer; position:relative;}
    .dashboard-card:hover { transform: translateY(-5px); box-shadow:0 6px 14px rgba(0,0,0,0.2);}
    .dashboard-card h3 { color:#0B7A4B; margin-bottom:10px; }
    .dashboard-card p { color:#555; }
    .dashboard-card i { font-size:30px; color:#ff9900; position:absolute; top:20px; right:20px; }

    /* RACCOURCIS */
    .shortcuts { display:grid; grid-template-columns: repeat(3, 1fr); gap:15px; }
    .shortcut { background:#ff9900; color:white; padding:15px; text-align:center; border-radius:8px; font-weight:bold; cursor:pointer; transition:0.3s;}
    .shortcut:hover { background:#ffc266; }

    /* NOTIFICATIONS */
    .notifications { background:white; padding:20px; border-radius:10px; margin-top:30px; border-top:4px solid #0B7A4B; box-shadow:0 4px 10px rgba(0,0,0,0.1);}
    .notifications ul { padding-left:18px; }
    .notifications li { margin-bottom:8px; display:flex; align-items:center; }
    .notifications li i { margin-right:10px; color:#0B7A4B; }

    /* TABLEAUX */
    table { width:100%; border-collapse:collapse; background:white; margin-top:15px; border-radius:10px; overflow:hidden; box-shadow:0 4px 8px rgba(0,0,0,0.1);}
    th, td { padding:12px; text-align:left; border-bottom:1px solid #ddd; }
    th { background:#0B7A4B; color:white; }

    @media screen and (max-width:900px){
        .stats, .dashboard-grid, .shortcuts { grid-template-columns:1fr; }
    }
</style>
</head>
<body>

<header>
    <h1>Dashboard CRISTAL</h1>
    <div>
        <a href="historique.php" class="animated-btn">À propos du CRISTAL</a>
        <a href="deconnexion.php" class="logout-btn">Se déconnecter</a>
    </div>
</header>

<main>

<!-- PROFIL -->
<div class="profil">
    <h3 class="CRISTAL">Collectif de Recherche et d'Innovation en Statistique de Travail et d'Application sur les Logiciels</h3>
</div>

<!-- STATS -->
<div class="stats">
    <div class="stat-box"><h2>12</h2><p>Projets actifs</p></div>
    <div class="stat-box"><h2>5</h2><p>Événements</p></div>
    <div class="stat-box"><h2>28</h2><p>Membres actifs</p></div>
    <div class="stat-box"><h2>20+</h2><p>Ressources</p></div>
</div>

<!-- DASHBOARD CARDS -->
<div class="dashboard-grid">
    <div class="dashboard-card"><i class="fas fa-newspaper"></i><h3>Actualités du CRISTAL</h3><p>Suivez toutes les annonces et activités récentes du collectif.</p></div>
    <div class="dashboard-card"><i class="fas fa-project-diagram"></i><h3>Projets et Initiatives</h3><p>Découvrez les projets en cours et participez activement.</p></div>
    <div class="dashboard-card"><i class="fas fa-book"></i><h3>Ressources documentaires</h3><p>Accédez aux documents, tutoriels et guides pour vos études.</p></div>
    <div class="dashboard-card"><i class="fas fa-calendar-alt"></i><h3>Événements à venir</h3><p>Consultez le calendrier des conférences, ateliers et sessions.</p></div>
</div>

<!-- RACCOURCIS -->
<div class="shortcuts">
    <div class="shortcut">Responsables actuels du CRISTAL</div>
    <div class="shortcut">Membres récents</div>
    <div class="shortcut">Soumissions en attente</div>
</div>

<!-- TABLEAU PROJETS RECENTS -->
<div class="notifications">
    <h3>Projets récents</h3>
    <table>
        <thead>
            <tr><th>Nom du projet</th><th>Responsable</th><th>Statut</th><th>Date de début</th></tr>
        </thead>
        <tbody>
            <tr><td>Analyse chômage</td><td>Laureno DJAGLA</td><td>En cours</td><td>15/11/2025</td></tr>
            <tr><td>Modélisation des données</td><td>Marie K.</td><td>Terminé</td><td>01/10/2025</td></tr>
            <tr><td>Enquête sur le marché</td><td>Jean P.</td><td>En cours</td><td>20/11/2025</td></tr>
        </tbody>
    </table>
</div>

<!-- NOTIFICATIONS -->
<div class="notifications">
    <h3>Notifications récentes</h3>
    <ul>
        <li><i class="fas fa-bell"></i> Nouvelle formation disponible.</li>
        <li><i class="fas fa-bell"></i> Réunion CRISTAL prévue vendredi.</li>
        <li><i class="fas fa-bell"></i> Ouverture des adhésions 2025.</li>
    </ul>
</div>

</main>

</body>
</html>
