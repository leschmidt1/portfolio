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
						<h1><?php echo $projet[3]['titre'];?> (Projet de gestion d'équipe et de tâches)<li>Janvier 2013 – Décembre 2014</li></h1>
						<span class="logo"><img src="images/pentest.png" alt="" /></span>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								<h2>En tant que développeur de pages web responsives, mon rôle était de créer des sites web qui offrent une expérience fluide et agréable, quel que soit le dispositif utilisé. L'objectif principal était de garantir une navigation optimale et un design adaptatif pour répondre aux besoins de chaque utilisateur, que ce soit sur un smartphone, une tablette ou un ordinateur de bureau.<li> Voici un aperçu des missions que j'accomplissais dans ce domaine : </li>
									
									</h2>
								<p>
									
									<ul>
                                        <li><strong>HTML5</strong> : Le langage de balisage utilisé pour structurer le contenu des pages web. Il est essentiel de s'assurer que le site de gestion de projet soit construit avec des balises sémantiques appropriées, telles que <code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code>, <code>&lt;section&gt;</code>, pour permettre une bonne hiérarchisation de l'information. Cela améliore l'accessibilité, le référencement et facilite l'intégration de fonctionnalités dynamiques.</li><br>
                                        <li><strong>CSS3</strong> : Le langage de mise en forme utilisé pour styliser le site de gestion de projet. L'application de **media queries** permet de garantir que le design reste réactif, peu importe l'appareil utilisé, que ce soit un ordinateur de bureau, une tablette ou un smartphone. L'utilisation des **flexbox** et des **grilles CSS** garantit une disposition fluide et adaptable des éléments en fonction de la taille de l'écran.</li><br>
                                        <li><strong>JavaScript et jQuery</strong> : JavaScript est essentiel pour ajouter de l'interactivité à l'interface utilisateur, par exemple, en permettant la gestion dynamique des tâches, l'actualisation des projets en temps réel, ou encore la gestion des notifications. **jQuery** simplifie les interactions, comme l'affichage de données de manière dynamique via AJAX, et permet de gérer plus facilement les animations et les transitions.</li><br>
                                        <li><strong>Outils de gestion de version</strong> : Un développeur de site web collaboratif utilise des outils comme **Git** pour suivre les modifications du code, gérer les versions du site, et faciliter la collaboration avec d'autres membres de l'équipe de développement, garantissant ainsi un développement fluide et une gestion cohérente des différentes versions du projet.</li><br>
                                        <li><strong>Outils de conception</strong> : Les outils comme **Figma**, **Sketch** ou **Adobe XD** sont utilisés pour la création des maquettes du projet. Le développeur travaille souvent avec l’équipe de conception pour transformer ces maquettes en pages web interactives et fonctionnelles. Ces outils permettent également de collaborer efficacement entre designers et développeurs tout au long du processus.</li><br>
                                    </ul>
                                    
                                    <li><strong>Les étapes clés du développement d'une plateforme de gestion de projets collaboratifs</strong><br>
                                        <strong>Analyse des besoins</strong> : Avant de commencer à coder, il est primordial de comprendre les objectifs du projet et les attentes des utilisateurs finaux. Cette phase inclut la discussion des fonctionnalités nécessaires comme la gestion des projets, la gestion des tâches, l'attribution de rôles, et les intégrations avec d'autres outils comme les calendriers ou les messageries internes.
                                    </li><br>
                                    
                                    <li><strong>Design adaptatif (Responsive Design)</strong> : Assurer que la plateforme de gestion de projets s’adapte parfaitement à tous les types d’appareils est essentiel. Les **media queries CSS** sont utilisées pour définir différentes règles de style en fonction de la taille des écrans, garantissant ainsi une interface fluide sur tous les appareils, de la version mobile à la version bureau.
                                    </li><br>
                                    
                                    <li><strong>Création de la structure HTML</strong> : La structure HTML5 du site de gestion de projet est définie en utilisant des balises sémantiques comme <code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code>, <code>&lt;article&gt;</code>, <code>&lt;section&gt;</code> et autres pour organiser les informations de manière logique. Cela permet d’améliorer l’accessibilité et le référencement naturel, tout en offrant une base solide pour l’intégration de contenus dynamiques.
                                    </li><br>
                                    
                                    <li><strong>Stylisation avec CSS3</strong> : Une fois la structure HTML mise en place, le développeur applique des règles CSS3 pour styliser les différentes sections de la plateforme de gestion de projet. Cela inclut la mise en page, les couleurs, les typographies, ainsi que l’adaptation du design à différentes tailles d’écran via les **media queries**. Une attention particulière est portée à l’interface utilisateur pour que la navigation entre les projets, tâches et discussions soit fluide et intuitive.
                                    </li><br>
                                    
                                    <li><strong>Ajout d'interactivité avec JavaScript et jQuery</strong> : Les fonctionnalités dynamiques telles que la gestion en temps réel des tâches, les interactions avec le tableau de bord, la modification instantanée des dates d’échéance ou des statuts des tâches, et l'affichage des notifications sont ajoutées avec **JavaScript**. Des bibliothèques comme **jQuery** facilitent l'intégration de ces fonctionnalités de manière fluide et rapide, en gérant les requêtes AJAX pour la mise à jour asynchrone des données sans rechargement de la page.
                                    </li><br>
                                    
                                    <li><strong>Tests et optimisations</strong> : Tester une plateforme de gestion de projets collaboratifs est crucial pour s'assurer de sa robustesse et de son bon fonctionnement sur tous les appareils. Le développeur utilise des outils comme **Chrome DevTools** pour tester le rendu sur différents écrans et résoudre les problèmes de mise en page ou de performance. L'optimisation des performances est également primordiale : cela inclut la compression des images, la minification des fichiers CSS et JS, et l'amélioration des temps de réponse des pages.
                                    </li><br>
                                    
                                    <li><strong>Maintenance continue</strong> : Une fois le site mis en ligne, la maintenance continue devient essentielle pour s’assurer que la plateforme de gestion de projets reste fonctionnelle, à jour et sécurisée. Cela comprend la gestion des bugs, les mises à jour de sécurité, ainsi que l’ajout de nouvelles fonctionnalités pour répondre aux besoins changeants des utilisateurs.
                                    </li><br>
                                    
                                    <li><strong>Compétences en collaboration et gestion de projets</strong><br>
                                        En plus des compétences techniques, un développeur travaillant sur une plateforme de gestion de projets collaboratifs doit posséder des compétences en gestion de projets et en collaboration inter-équipes :
                                    </li><br>
                                    
                                    <ul>
                                        <li><strong>Communication</strong> : Un développeur doit être en mesure de travailler efficacement avec des designers, des chefs de projet, des développeurs backend et des utilisateurs finaux pour comprendre les besoins, résoudre les problèmes et faire avancer le projet selon les attentes.</li><br>
                                        <li><strong>Gestion de projet</strong> : Le développeur doit être capable de suivre les délais de développement, de travailler sous des méthodologies comme **Agile** ou **Scrum**, et de collaborer avec les parties prenantes pour garantir que le projet avance conformément au planning et aux exigences des utilisateurs.</li><br>
                                    </ul>
                                    
                                    <li><strong>Perspectives de carrière</strong><br>
                                        Le métier de développeur pour des plateformes de gestion de projets collaboratifs offre une évolution vers des rôles plus spécialisés dans le domaine du développement logiciel. Les développeurs expérimentés peuvent évoluer vers des rôles tels que :
                                    </li><br>
                                    
                                    <ul>
                                        <li><strong>Développeur Full Stack</strong> : Compétences en développement frontend et backend, permettant de gérer l’ensemble de la pile technologique du projet.</li><br>
                                        <li><strong>Architecte logiciel</strong> : Conception de l'architecture technique des systèmes complexes pour des plateformes de gestion de projets à grande échelle.</li><br>
                                        <li><strong>Responsable de la gestion de produits (Product Manager)</strong> : Gestion des stratégies de développement et des fonctionnalités produits d'une plateforme de gestion de projets.</li><br>
                                    </ul></p>
								
								
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