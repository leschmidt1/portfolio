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
						<h1><?php echo $projet[4]['titre'];?> (Suivi de la forme physique et des habitudes)</h1>
						<span class="logo"><img src="images/pentest.png" alt="" /></span>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								<h2>Objectif : Créer une application pour suivre la santé physique et mentale, incluant le suivi des exercices, de l'alimentation, et des habitudes de vie. </li>
									
									</h2>
								<p>
									
									<ul>
                                        <li>
                                          <strong>Description : Développer une application qui permet à l'utilisateur de suivre ses activités physiques, son alimentation, ses habitudes de sommeil, son niveau de stress et d'autres aspects de son bien-être. Les utilisateurs peuvent enregistrer leurs entrées quotidiennes et suivre leurs progrès dans un tableau de bord. L'application pourrait proposer des rappels ou des conseils personnalisés en fonction des données collectées.</strong>
                                          <br>
                                          Mon travail commençait par la compréhension des besoins du client ou du projet. Je devais m'assurer de bien comprendre les objectifs du site : s'il s'agissait d'une vitrine, d'un e-commerce, ou d'une plateforme plus complexe. Après cette phase d'analyse, je concevais la structure du site en définissant l'architecture des pages et la navigation.
                                          <br>
                                          

                                        </li>
                                        
                                        <br>
                                      
                                        <li>
                                          <strong>Fonctionnalités :</strong>
                                          <br>
                                          <ul>
                                            <li><strong>Suivi des exercices :</strong> Enregistrer les types d'exercices, les durées, les calories brûlées, etc.</li>
                                            <li><strong>Suivi des repas : </strong>Permettre aux utilisateurs d'entrer ce qu'ils mangent avec une base de données d'aliments pour calculer les calories et les nutriments.</li>
                                            <li><strong>Suivi du sommeil : </strong>Saisir la durée du sommeil et la qualité du sommeil.</li>
                                            <li><strong>Tableau de bord : </strong>Visualiser les progrès via des graphiques et des statistiques pour chaque domaine (exercice, alimentation, sommeil).</li>
                                            <li><strong>Rappels et notifications : </strong>Rappels pour s'exercer, boire de l'eau, manger des repas équilibrés.</li>
                                            <li><strong>Conseils personnalisés : </strong> Conseils basés sur les progrès et les données saisies (ex. ajustement des objectifs d'exercice, suggestions d’aliments).</li>
                                          </ul>
                                        </li>
                                        
                                        <br>
                                      
                                        <li>
                                          <strong>Technologies suggérées :</strong>
                                          <br>
                                          <br><br>
                                          <ul>
                                            <li><strong>Frontend : </strong>React Native ou Flutter pour une application mobile multiplateforme (iOS et Android).</li>
                                            <li><strong>Backend : </strong>Node.js avec Express.</li>
                                            <li><strong>Base de données : </strong> Firebase ou MongoDB.</li>
                                            <li><strong>Authentification : </strong> Auth0 ou Firebase Authentication.</li>
                                            <li><strong>Déploiement :</strong>Firebase, AWS, ou DigitalOcean pour l’hébergement des APIs.</li>
                                          </ul>
                                        </li>
                                        
                                        <br>
                                      
                                      
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