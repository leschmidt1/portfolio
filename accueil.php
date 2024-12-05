<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
?>

<?php
require 'auth.php'; // Vérifie si l'utilisateur est connecté
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="bubbles"></div>
    </div>
    <header>
    <h1>Portfolio</h1>
    <p>Bassem BRAIKI | Développeur Full Stack</p>

    <!-- Le bouton de profil sous forme de personnage -->
    <div class="profile-button-container">
        <button class="profile-button" id="profileButton">
            <span class="icon">👤</span> 
        </button>
    </div>

    <!-- Menu déroulant caché -->
    <div class="menu-dropdown" id="dropdownMenu">
        <ul>
            <!-- Affiche le nom d'utilisateur et l'email si connecté -->
            <?php if (isset($_SESSION['username']) && isset($_SESSION['email'])): ?>
                <li>Connecté en tant que <span id="username"><?php echo htmlspecialchars($_SESSION['username']); ?></span></li>
                <li>Email : <span id="email"><?php echo htmlspecialchars($_SESSION['email']); ?></span></li>
                <li><a href="logout.php">Se déconnecter</a></li>
            <?php else: ?>
                <!-- Si non connecté, affiche un message de bienvenue générique et le lien de connexion -->
                <li>Bienvenue, visiteur !</li>
                <li><a href="login.php">Se connecter</a></li>
            <?php endif; ?>
        </ul>
    </div>

    <!-- Menu de navigation -->
    <nav>
        <ul>
            <!-- Liens de navigation en dehors du menu déroulant -->
            <li><a href="accueil.php" class="nav-button">Accueil</a></li>
            <li><a href="#projets" class="nav-button">Projets</a></li>
            <li><a href="#contact" class="nav-button">Contact</a></li>

            <!-- Vérification de la session pour afficher un lien de connexion uniquement si l'utilisateur n'est pas connecté -->
            <?php if (!isset($_SESSION['user_id'])): ?>
                <li><a href="login.php" class="nav-button">Se connecter</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>


    <main>
        <!-- Section À propos -->
        <section id="a-propos">
            <h2>À propos de moi</h2>
            <div class="about-container">
                <img src="bassem.jpg"alt="Photo de Bassem Braiki" class="photo-profil">
                <p>
                    Développeur Full Stack passionné avec plus de 6 ans d’expérience dans la création de solutions web performantes et évolutives. Spécialisé dans l’architecture des applications modernes, du développement frontend (React, Vue.js, Angular) à la gestion de bases de données (MySQL, MongoDB) et la mise en place d'APIs backend robustes (Node.js, Express, Django). J'ai travaillé avec des équipes de développement agiles pour offrir des applications sur-mesure, optimisées et intuitives.                </p>
            </div>
        </section>

        <!-- Section Expertise -->
        <section id="expertise">
            <h2>Experience</h2>
            <ul>
                <li><strong>WebLab Agency – Paris, France
                    Septembre 2015 – Mai 2017:</strong> Développement de solutions sur-mesure pour des applications web à fort trafic.
                    Création et gestion des APIs RESTful avec Express.js et Django, intégration de services tiers (PayPal, Stripe, Google Maps).
                    Optimisation des performances des sites web en réduisant le temps de chargement et en augmentant l’accessibilité.
                    Mise en place de systèmes de gestion de contenu personnalisés pour des clients e-commerce, y compris l'intégration avec des plateformes comme Shopify et WooCommerce.
                    Maintenance et mise à jour des projets existants pour garantir leur sécurité et leur pérennité.
                    Développeur Frontend Junior</li><br>
                <li><strong>InnovDev Solutions – Paris, France
                    Juin 2017 – Décembre 2020 :</strong> Conception et développement d’applications web interactives et évolutives pour des clients dans divers secteurs (e-commerce, fintech, santé).
                    Mise en place de l’architecture backend avec Node.js/Express et intégration des bases de données SQL et NoSQL (MongoDB, PostgreSQL).
                    Réalisation d’interfaces utilisateur fluides et responsive avec React et Vue.js.
                    Supervision de l’intégration continue/déploiement continu (CI/CD) en utilisant GitLab CI et Docker.
                    Collaboration avec les équipes UX/UI pour garantir une expérience utilisateur optimale.
                    Participation à la révision du code, mentorat de développeurs juniors et amélioration des pratiques de développement au sein de l’équipe.
                    Développeur Full Stack</li><br>
                <li><strong>CodeCraft Studios – Paris, France
                    Janvier 2021 – Présent
                    :</strong>Développeur Full Stack Senior </li>
            </ul>
        </section>

        <!-- Section Compétences -->
<section id="competences">
    <h2>Compétences</h2>
    <div class="grid">
        <div class="card">
            <h3>Langages de programmation</h3>
            <ul>
                <li>Python (Automatisation, Scapy)</li>
                <li>Bash (Scripts Linux)</li>
                <li>JavaScript</li>
            </ul>
        </div>
        <div class="card">
            <h3>Outils de cybersécurité</h3>
            <ul>
                <li>Nmap</li>
                <li>Metasploit</li>
                <li>Wireshark</li>
                <li>Burp Suite</li>
            </ul>
        </div>
        <div class="card">
            <h3>Certifications</h3>
            <ul>
                <li>Formation TryHackMe</li>
                <li>Hack The Box (niveau débutant)</li>
                <li>Introduction à la cybersécurité (Cisco)</li>
            </ul>
        </div>
    </div>
</section>

<!-- Section Projets -->
<section id="projets">
    <h2>Projets</h2>
    <nav class="menu">
        <div id="filter-buttons" class="filters">
            <button class="filter-button" data-filter="html"><?php echo $projet[0]['category'];?></button>
            <button class="filter-button" data-filter="css"><?php echo $projet[2]['category'];?></button>
            <button class="filter-button" data-filter="java"><?php echo $projet[1]['category'];?></button>
            <button class="filter-button" data-filter="tout">Tout afficher</button>
        </div>
    </nav>
    <ul>
        <li class="html"><button onclick="location.href='<?php echo $projet[0]['link'];?>'" target="_blank">Projet 1</button></li>
        <br>
        <li class="css"><button onclick="location.href='<?php echo $projet[1]['link'];?>'" target="_blank">Projet 2</button></li>
        <br>
        <li class="java"><button onclick="location.href='<?php echo $projet[2]['link'];?>'" target="_blank">Projet 3</button></li>
        <li class="css"><button onclick="location.href='<?php echo $projet[3]['link'];?>'" target="_blank">Projet 4</button></li>
        <li class="html"><button onclick="location.href='<?php echo $projet[4]['link'];?>'" target="_blank">Projet 5</button></li>
    </ul>
</section>

<!-- Section Contactez-moi -->
<section id="contact">
    <h2>Contactez-moi</h2>
    <form action="#" method="post" class="contact-form">
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" placeholder="Votre nom" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Votre email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Votre message" required></textarea>

        <button type="submit">Envoyer</button>
    </form>
</section>


<footer>

    <p>© 2024 - Portfolio de Bassem BRAIKI</p>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    
    const filterButtons = document.querySelectorAll('.filter-button');

    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filterValue = button.getAttribute('data-filter');

            
            const projects = document.querySelectorAll('#projets ul li');

            
            projects.forEach(project => {
                if (filterValue === 'tout') {
                    project.style.display = 'block'; 
                } else {
                    
                    if (project.classList.contains(filterValue)) {
                        project.style.display = 'block'; 
                    } else {
                        project.style.display = 'none'; 
                    }
                }
            });
        });
    });
});

// Sélectionner le bouton et le menu déroulant
const profileButton = document.getElementById('profileButton');
const dropdownMenu = document.getElementById('dropdownMenu');

// Ajouter l'événement de clic
profileButton.addEventListener('click', function() {
    // Basculer l'affichage du menu déroulant
    dropdownMenu.style.display = (dropdownMenu.style.display === 'block') ? 'none' : 'block';
});



</script>


</body>
</html>

