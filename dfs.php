<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
?>

<?php
require 'auth.php'; // Vérifie si l'utilisateur est connecté
?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>Mes projets</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="style.css" />
		<noscript><link rel="stylesheet" href="style.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><?php echo $projet[2]['titre'];?> (2023)</li></h1>
						<span class="logo"><img src="images/pentest.png" alt="" /></span>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								<h2>En 2023, j'ai participé à la création d'une plateforme de gestion de projets pour une agence marketing, visant à améliorer la collaboration et le suivi des campagnes publicitaires de l'équipe.</li>
									
									</h2>
								<p>
									
									<ul>
                                        <li><strong>Qu'est-ce qu'un développeur de pages web responsives ?</strong><br>
                                          Un développeur de pages web responsives est un professionnel qui crée des sites internet qui s’adaptent parfaitement à toutes les tailles d’écrans. Il s’assure que le contenu d’un site reste fonctionnel, esthétique et facile à utiliser sur tout appareil, sans que l’utilisateur ait besoin de zoomer ou de faire défiler horizontalement.
                                        </li><br>
                                      
                                        <li><strong>Compétences techniques nécessaires</strong><br>
                                          Les développeurs de pages web responsives utilisent un ensemble de technologies et d'outils pour rendre leurs sites web accessibles et performants :
                                        </li><br>
                                      
                                        <ul>
                                          <li><strong>HTML5</strong> : Le langage de balisage qui structure le contenu des pages web. Il est essentiel d'utiliser les bonnes balises sémantiques pour garantir une hiérarchisation correcte de l'information, ce qui favorise l'accessibilité et le référencement.</li><br>
                                          <li><strong>CSS3</strong> : Le langage de mise en forme qui contrôle l'apparence visuelle du site. Les développeurs utilisent des media queries pour adapter la présentation du site en fonction de la taille de l'écran. Ils emploient aussi des flexbox et des grilles CSS pour créer des mises en page flexibles et responsives.</li><br>
                                          <li><strong>JavaScript et jQuery</strong> : JavaScript permet d’ajouter de l'interactivité, comme des animations, des menus déroulants, et de charger des données dynamiquement. jQuery simplifie le développement JavaScript, en rendant certaines actions comme les animations et les requêtes AJAX plus rapides et plus simples.</li><br>
                                          <li><strong>Outils de gestion de version</strong> : Le développement moderne implique l'utilisation d'outils comme Git pour suivre les modifications du code, collaborer avec d'autres développeurs et gérer les versions du site.</li><br>
                                          <li><strong>Outils de conception</strong> : Les développeurs peuvent utiliser des outils comme Figma, Sketch ou Adobe XD pour collaborer avec les designers afin de transformer les maquettes en pages web fonctionnelles.</li><br>
                                        </ul>
                                      
                                        <li><strong>Les étapes clés du développement d’un site web responsive</strong><br>
                                          <strong>Analyse des besoins</strong> : Avant de commencer à coder, un développeur doit comprendre les besoins du client, les objectifs du site web et la cible utilisateur. Cela implique souvent de discuter des exigences de conception et des fonctionnalités nécessaires.
                                        </li><br>
                                      
                                        <li><strong>Design adaptatif (Responsive Design)</strong> : L'un des aspects les plus cruciaux du développement web moderne est de s'assurer que le site est "responsive", c'est-à-dire qu’il fonctionne bien sur tous types d'appareils, quel que soit leur écran. Pour cela, le développeur utilise des techniques comme les media queries en CSS pour appliquer des styles différents selon les dimensions de l’écran.
                                        </li><br>
                                      
                                        <li><strong>Création de la structure HTML</strong> : La première étape du développement consiste à coder la structure HTML5 du site. Cela inclut l'utilisation de balises sémantiques comme &lt;header&gt;, &lt;footer&gt;, &lt;article&gt;, &lt;section&gt;, et autres pour organiser le contenu de manière logique et hiérarchique, ce qui est crucial pour l’accessibilité et le référencement.
                                        </li><br>
                                      
                                        <li><strong>Stylisation avec CSS3</strong> : Une fois la structure mise en place, le développeur applique des styles avec CSS3. Cela comprend la définition de la mise en page (grilles, flexbox), des couleurs, des polices et des espacements. Il adapte aussi l’apparence du site à différents appareils avec des règles de media queries.
                                        </li><br>
                                      
                                        <li><strong>Ajout d'interactivité avec JavaScript et jQuery</strong> : Le développeur ajoute des fonctionnalités dynamiques telles que des menus déroulants, des formulaires interactifs, des carrousels d'images, et du contenu chargé de manière asynchrone pour améliorer l'expérience utilisateur.
                                        </li><br>
                                      
                                        <li><strong>Tests et optimisations</strong> : Tester un site web responsive est essentiel pour s'assurer qu'il s'affiche correctement sur toutes les tailles d'écran et navigateurs. Le développeur utilise des outils comme Chrome DevTools pour simuler des appareils et repérer les problèmes de mise en page. L'optimisation des performances (réduction de la taille des fichiers, compression des images) est également primordiale pour garantir un temps de chargement rapide.
                                        </li><br>
                                      
                                        <li><strong>Maintenance continue</strong> : Le rôle du développeur ne s'arrête pas à la mise en ligne du site. La maintenance continue est nécessaire pour garantir que le site reste à jour, sécurisé, et performant. Le développeur résout les bugs signalés par les utilisateurs, met à jour le contenu et les technologies, et apporte des améliorations au besoin.
                                        </li><br>
                                      
                                        <li><strong>Compétences en collaboration et gestion de projets</strong><br>
                                          En plus des compétences techniques, un développeur de pages web responsives doit posséder des compétences en gestion de projets et en collaboration :
                                        </li><br>
                                      
                                        <ul>
                                          <li><strong>Communication</strong> : Un développeur de sites web travaille souvent avec une équipe de designers, de chefs de projet, de développeurs backend et d'autres parties prenantes. Il est essentiel de bien communiquer pour comprendre les besoins et les contraintes de chaque membre de l'équipe.</li><br>
                                          <li><strong>Gestion de projet</strong> : Le développeur doit être capable de suivre les délais et de travailler dans des méthodologies comme Agile ou Scrum, en s'assurant que le projet avance conformément au planning et aux attentes des clients.</li><br>
                                        </ul>
                                      
                                        <li><strong>Perspectives de carrière</strong><br>
                                          Le métier de développeur de pages web responsives offre de nombreuses opportunités de carrière. À mesure que les entreprises se rendent compte de l'importance d'avoir un site web qui fonctionne sur tous les appareils, la demande pour ces compétences augmente. Un développeur peut évoluer vers des rôles plus spécialisés, comme :
                                        </li><br>
                                      
                                        <ul>
                                          <li><strong>Développeur Full Stack</strong> : Compétences en développement frontend et backend.</li><br>
                                          <li><strong>Architecte web</strong> : Conception et gestion de l'architecture technique des sites.</li><br>
                                          <li><strong>Responsable de l’expérience utilisateur (UX)</strong> : Prise en charge de la stratégie et du design de l'expérience utilisateur.</li><br>
                                        </ul>
                                    </p>
								
								
							</section>

						</div>

						<!-- Footer -->
							<footer id="footer">
								
								<section>
									<h2>Bassem BRAIKI</h2>
									<dl class="alt">
										<dt>Développeur Full Stack</dt>
									</dl>
									
								</section>
								
							</footer>
		
					</div>
		>
		
			</body>
		</html>