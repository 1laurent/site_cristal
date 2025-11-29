<?php include 'includes/header.php'; ?>

<!-- BANDEAU BIENVENUE + LOGOS -->
<section class="welcome-banner">
    <img src="assets/img/logo-enspd.jpg" class="logo-left" alt="Logo École">
    <h1 class="welcome-title" style="color: black;">BIENVENUE SUR LA PLATEFORME OFFICIELLE DU CRISTAL</h1>
    <img src="assets/img/logo-cristal.jpg" class="logo-right" alt="Logo CRISTAL">   
</section>
<style>
.slider {
  width: 100%;
  overflow: hidden;
  background: #000;
  padding: 20px 0;
  box-sizing: border-box;
}

.slider-track {
  display: flex;
  gap: 10px;                /* espace entre les images */
  animation: slide 14s linear infinite; /* animation continue */
}

.slider .slide {
  height: 496px;            /* hauteur des images */
  object-fit: contain;      /* garde les proportions */
  flex-shrink: 0;           /* empêche les images de rétrécir */
}

/* Animation défilement horizontal */
@keyframes slide {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); } /* défilement de moitié pour boucle continue */
}
</style>

<div class="slider">
  <div class="slider-track">
    <img src="assets/img/bureau_2023-2024.jpeg" class="slide" alt="">
    <img src="assets/img/bureau_2024-2025.jpeg" class="slide" alt="">
    <img src="assets/img/conte.jpeg" class="slide" alt="">
    <img src="assets/img/Coupe.jpeg" class="slide" alt="">
    <img src="assets/img/Directeur_JBE.jpeg" class="slide" alt="">
    <img src="assets/img/medaille.jpeg" class="slide" alt="">
    <img src="assets/img/personnels.jpeg" class="slide" alt="">
    <img src="assets/img/image.jpeg" class="slide" alt="">
    <img src="assets/img/rassemblement.jpeg" class="slide" alt="">
    <!-- on peut répéter les images pour boucle continue si nécessaire -->
  </div>
</div>

<section class="credo-valeurs-container">
    <!-- Colonne gauche : Credo -->
    <div class="credo">
        <div class="credo-table">
            <div class="credo-title">CREDO DU CRISTAL</div>
            <div class="credo-content">
                Nous croyons que seul le respect des principes de la nature, l'humilité, la patience pour bien se former, le travail bien fait, la culture de l'esprit d'innovation et de partage, le respect de l'autorité et de la chose publique, le respect des autres et le service au profit de la communauté, permettent à l'être humain de prendre en main les obligations de sa destinée, de s'inscrire véritablement dans sa mission et de révéler sa grandeur.

                Nous croyons aussi au caractère sacré de l'école et à sa capacité à faire de l'être humain un être complet pouvant faire le bien et éviter le mal.  

                Nous croyons enfin en notre capacité à éviter tout ce qui est souvent reproché aux Africains et qui entrave le progrès dans nos communautés.  

                Alors, que Dieu nous aide.
            </div>
        </div>
    </div>

    <!-- Colonne droite : Valeurs -->
    <div class="valeurs">
        <div class="valeurs-table">
            <div class="valeurs-title">VALEURS PRÔNÉES PAR LE CRISTAL</div>
            <div class="valeurs-content">
                <div class="value-box" style="color:white;"><h3>Discipline</h3></div>
                <div class="value-box" style="color:white;"><h3>Respect</h3></div>
                <div class="value-box" style="color:white;"><h3>Amour du travail bien fait</h3></div>
                <div class="value-box" style="bcolor:white;"><h3>Esprit de partage et d'équipe</h3></div>
            </div>
        </div>
    </div>
</section>

<style>
/* Conteneur principal en deux colonnes */
.credo-valeurs-container {
    display: flex;
    gap: 40px; 
    margin: 50px auto;
    max-width: 1200px;
    padding: 0 20px;
}

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

/* Colonne Valeurs */
.valeurs {
    flex: 1;
}

.valeurs-table {
    border: 2px solid #0B7A4B;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
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
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

/* Boîtes individuelles pour chaque valeur */
.value-box {
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 2px 6px black;
    text-align: center;
    font-weight: bold;
    color: #ffffff;
    transition: transform 0.3s, box-shadow 0.3s;
}

.value-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.2);
}

.value-box h3 {
    margin: 0;
}
</style>


<section class="features">
    <div class="feature-card1">
        <h3>Innovation</h3>
    </div>

    <div class="feature-card2">
        <h3>Impact</h3>
    </div>

    <div class="feature-card3">
        <h3>Excellence</h3>
    </div>
</section>

<?php include 'includes/footer.php'; ?>