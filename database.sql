-- Création de la base de données
CREATE DATABASE IF NOT EXISTS `filtre_projet`;
USE `filtre_projet`;

-- Création de la table
CREATE TABLE IF NOT EXISTS `projet` (
    `projetid` INT AUTO_INCREMENT PRIMARY KEY,  -- Définition de `projetid` comme entier auto-incrémenté
    `titre` VARCHAR(255) NOT NULL,              -- Augmentation de la taille du champ `titre`
    `description` TEXT,                        -- Changement du type de `description` à `TEXT` pour des textes longs
    `category` VARCHAR(255),                   -- Augmentation de la taille du champ `category`
    `link` VARCHAR(255)                        -- Augmentation de la taille du champ `link`
);

-- Insertion de données
INSERT INTO `projet` (`titre`, `description`, `category`, `link`) 
VALUES 
('Développement de pages web responsives en utilisant HTML5, CSS3, JavaScript et jQuery. Janvier 2019 – Décembre 2023', 
'Mon travail en tant que développeur de pages web responsives consistait à concevoir et à créer des sites web qui sont non seulement esthétiques, mais aussi fonctionnels et accessibles sur tous types d’appareils. L’objectif principal était de garantir une expérience utilisateur optimale, quelle que soit la taille de lécran. Voici les principales missions que j’effectuais dans ce cadre :

1. Analyse des besoins et conception de la structure du site
Mon travail commençait par la compréhension des besoins du client ou du projet. Je devais m\'assurer de bien comprendre les objectifs du site : s\'il s\'agissait d\'une vitrine, d\'un e-commerce, ou d\'une plateforme plus complexe. Après cette phase d\'analyse, je concevais la structure du site en définissant l\'architecture des pages et la navigation.

Je préparais ensuite des maquettes ou des wireframes pour planifier l\'ergonomie du site et la disposition des éléments. Cela permettait de définir un modèle de page et d’assurer que le contenu était bien organisé et facile à naviguer.

2. Développement de la structure HTML5
Une fois la conception validée, je passais à la création du code HTML5. Cela consistait à créer le squelette des pages avec des éléments sémantiques. Je m\'assurais que le contenu était bien hiérarchisé et facile à indexer par les moteurs de recherche (SEO). Par exemple, je structurerai le texte avec des éléments comme les entêtes, les sections, les articles et le pied de page pour améliorer la lisibilité du contenu.

3. Stylisation avec CSS3
Ensuite, je passais à l\'étape de la stylisation avec CSS3. À ce stade, j\'adaptais l\'apparence visuelle du site selon la charte graphique définie avec le client ou l\'équipe design. Je travaillais sur les couleurs, les polices, les marges, et la mise en page.

Pour assurer une réactivité du site (c\'est-à-dire qu’il s’adapte à toutes les tailles d\'écrans), j’utilisais des media queries. Ces règles CSS permettaient de modifier l\'apparence de la page selon les dimensions de l\'écran, que ce soit sur un smartphone, une tablette, ou un ordinateur de bureau.

4. Ajout d\'interactivité avec JavaScript et jQuery
Une fois la mise en forme effectuée, je m\'assurais que le site soit interactif. J’utilisais JavaScript pour ajouter des éléments dynamiques, comme des menus déroulants, des animations ou des carrousels d\'images. JavaScript permettait également d\'améliorer l\'expérience utilisateur en rendant certaines actions plus fluides, comme la validation de formulaires ou le chargement de contenu sans recharger la page.

J’intégrais souvent jQuery, une bibliothèque JavaScript, pour simplifier l’écriture du code et rendre certaines tâches plus rapides, comme la gestion des événements ou les animations complexes.

5. Test et optimisation
Un aspect fondamental de mon travail était de tester le site sur différentes résolutions d\'écran, navigateurs et appareils. Cela me permettait de m\'assurer qu\'il était pleinement responsive et fonctionnait bien sur tous les supports, du téléphone mobile au PC de bureau.

J’utilisais des outils comme Chrome DevTools pour simuler l\'affichage sur différents appareils et corriger les erreurs de mise en page ou d\'interactivité. Je veillais également à ce que le site se charge rapidement, en optimisant les images, en réduisant la taille des fichiers CSS et JavaScript, et en utilisant des techniques de mise en cache.

6. Mise en ligne et maintenance
Une fois le site terminé et testé, je le mettais en ligne. Cela impliquait de télécharger les fichiers sur un serveur via FTP ou d’utiliser un système de gestion de version comme Git pour collaborer avec l’équipe et suivre l’historique des modifications.

Le travail ne s’arrêtait pas là : je m’assurais aussi de la maintenance continue du site, en apportant des améliorations ou en corrigeant les bugs signalés par les utilisateurs. Cela pouvait également inclure l’ajout de nouvelles fonctionnalités ou de mises à jour de contenu.

7. Suivi de la performance et de l’accessibilité
Enfin, je surveillais la performance du site, en utilisant des outils comme Google PageSpeed Insights pour analyser les temps de chargement et identifier des axes d’amélioration. J’étais également attentif à l\'accessibilité du site, en m’assurant qu’il soit utilisable par tous, y compris les personnes handicapées, en respectant les bonnes pratiques comme l’utilisation correcte des couleurs et des contrastes, ou l’ajout d’attributs alt pour les images.', 
'Développement', 'generic.php'),

('Collaboration avec l’équipe backend pour intégrer des API et afficher les données dynamiquement. Janvier 2014 – Décembre 2016', 
'En tant que développeur de pages web responsives, mon rôle était de créer des sites web qui offrent une expérience fluide et agréable, quel que soit le dispositif utilisé. L’objectif principal était de garantir une navigation optimale et un design adaptatif pour répondre aux besoins de chaque utilisateur, que ce soit sur un smartphone, une tablette ou un ordinateur de bureau. Voici un aperçu des missions que j’accomplissais dans ce domaine :

1. Compréhension des besoins et de l’expérience utilisateur (UX)
Un développeur de pages web responsives commence par analyser les besoins du client ou de l’entreprise afin de comprendre les objectifs du site web. Ce travail inclut l’étude du public cible et l’identification des spécifications techniques et ergonomiques. L’objectif est de créer une interface qui soit à la fois esthétique et facile à utiliser, tout en étant parfaitement fonctionnelle sur tous les types d’écrans.

2. Design adaptatif (Responsive Design)
Le responsive design est l’une des compétences clés de ce métier. Cela signifie que le site web doit ajuster son apparence en fonction de la taille de l’écran ou de l’appareil utilisé. Le développeur met en place des mises en page flexibles et des images adaptatives pour garantir que le site reste lisible et bien structuré, peu importe si l’utilisateur utilise un téléphone portable, une tablette ou un écran de bureau. Les media queries en CSS sont des outils essentiels pour appliquer des styles différents selon la taille de l’écran.

3. Développement de la structure du site avec HTML5 et CSS3
Un développeur responsable de la création de sites web réactifs utilise HTML5 pour structurer le contenu de manière sémantique, en utilisant des balises comme <header>, <footer>, <section>, et <article>, qui aident à hiérarchiser l’information. CSS3 est ensuite utilisé pour styliser le site et définir sa mise en page. Les techniques telles que les grilles flexibles et les grilles CSS permettent une disposition fluide des éléments sur la page, selon la taille de l’écran.

4. Ajout d’interactivité avec JavaScript et jQuery
Un autre aspect clé de ce rôle est l’intégration de l’interactivité sur le site. JavaScript est utilisé pour ajouter des fonctionnalités dynamiques telles que des menus déroulants, des animations, ou le chargement de contenu sans recharger la page, ce qui améliore l’expérience utilisateur. jQuery est une bibliothèque JavaScript populaire qui permet de simplifier la gestion des événements, des animations, et des requêtes AJAX pour rendre le site plus réactif et dynamique.

5. Test et optimisation
Le test est une partie intégrante du développement responsive. Un développeur doit tester le site sur différents navigateurs, résolutions d’écrans et appareils pour s’assurer que le site est pleinement fonctionnel et esthétique. Des outils comme Chrome DevTools permettent de simuler l’affichage sur divers appareils et de repérer les problèmes de mise en page ou d’interactivité. De plus, l’optimisation des performances (temps de chargement rapide, compression des images, minimisation des fichiers CSS/JS) est essentielle pour offrir une expérience fluide, en particulier sur les appareils mobiles.

6. SEO et accessibilité
Les développeurs de sites web responsives doivent également s’assurer que le site est bien optimisé pour le référencement naturel (SEO) en structurant correctement le contenu avec des balises sémantiques et en veillant à la rapidité du site. L’accessibilité est également un critère important : le site doit être accessible aux personnes ayant des handicaps, par exemple en utilisant des couleurs contrastées et en ajoutant des descriptions alternatives aux images.

7. Collaboration avec les équipes backend
Le développeur front-end travaille souvent en étroite collaboration avec l’équipe backend pour intégrer des API et récupérer des données dynamiques, telles que des articles de blog ou des produits e-commerce. Cela implique l’utilisation de technologies telles que AJAX pour charger ces données sans recharger toute la page, créant ainsi une expérience plus fluide pour l’utilisateur.', 
'Développement', 'generic.php');

8. Maintenance et mises à jour continues
Le rôle de développeur de sites web responsives ne se termine pas avec la mise en ligne du site. Il implique aussi la maintenance continue, en surveillant la performance du site, en corrigeant les erreurs éventuelles et en apportant des améliorations. Cela peut inclure la mise à jour des technologies utilisées, lajout de nouvelles fonctionnalités ou la révision de la compatibilité avec de nouveaux appareils ou navigateurs.

9. Outils et technologies utilisés
En plus des technologies de base comme HTML5, CSS3, JavaScript et jQuery, les développeurs de pages web responsives utilisent des outils comme :
- Sass ou LESS pour la gestion des feuilles de style.
- Bootstrap ou Tailwind CSS pour faciliter la création de grilles et de mises en page flexibles.
- Git pour la gestion de versions et la collaboration avec l’équipe de développement.
- Figma, Sketch, ou Adobe XD pour la conception des maquettes et des wireframes en collaboration avec les designers.

Bassem BRAIKI
Développeur Full Stack', 'Gestions de Projets, Tout afficher', 'bl.php'),


('Projet3', 'Plateforme de gestion de projets pour une agence marketing (2023)', 'En 2023, jai participé à la création dune plateforme de gestion de projets pour une agence marketing, visant à améliorer la collaboration et le suivi des campagnes publicitaires de léquipe.

Quest-ce quun développeur de pages web responsives ?
Un développeur de pages web responsives est un professionnel qui crée des sites internet qui s’adaptent parfaitement à toutes les tailles d’écrans. Il s’assure que le contenu d’un site reste fonctionnel, esthétique et facile à utiliser sur tout appareil, sans que l’utilisateur ait besoin de zoomer ou de faire défiler horizontalement.

Compétences techniques nécessaires
Les développeurs de pages web responsives utilisent un ensemble de technologies et doutils pour rendre leurs sites web accessibles et performants :

HTML5 : Le langage de balisage qui structure le contenu des pages web. Il est essentiel dutiliser les bonnes balises sémantiques pour garantir une hiérarchisation correcte de linformation, ce qui favorise laccessibilité et le référencement.

CSS3 : Le langage de mise en forme qui contrôle lapparence visuelle du site. Les développeurs utilisent des media queries pour adapter la présentation du site en fonction de la taille de lécran. Ils emploient aussi des flexbox et des grilles CSS pour créer des mises en page flexibles et responsives.

JavaScript et jQuery : JavaScript permet d’ajouter de linteractivité, comme des animations, des menus déroulants, et de charger des données dynamiquement. jQuery simplifie le développement JavaScript, en rendant certaines actions comme les animations et les requêtes AJAX plus rapides et plus simples.

Outils de gestion de version : Le développement moderne implique lutilisation doutils comme Git pour suivre les modifications du code, collaborer avec dautres développeurs et gérer les versions du site.

Outils de conception : Les développeurs peuvent utiliser des outils comme Figma, Sketch ou Adobe XD pour collaborer avec les designers afin de transformer les maquettes en pages web fonctionnelles.

Les étapes clés du développement d’un site web responsive
Analyse des besoins : Avant de commencer à coder, un développeur doit comprendre les besoins du client, les objectifs du site web et la cible utilisateur. Cela implique souvent de discuter des exigences de conception et des fonctionnalités nécessaires.

Design adaptatif (Responsive Design) : Lun des aspects les plus cruciaux du développement web moderne est de sassurer que le site est responsive, cest-à-dire qu’il fonctionne bien sur tous types dappareils, quel que soit leur écran. Pour cela, le développeur utilise des techniques comme les media queries en CSS pour appliquer des styles différents selon les dimensions de l’écran.

Création de la structure HTML : La première étape du développement consiste à coder la structure HTML5 du site. Cela inclut lutilisation de balises sémantiques comme <header>, <footer>, <article>, <section>, et autres pour organiser le contenu de manière logique et hiérarchique, ce qui est crucial pour l’accessibilité et le référencement.

Stylisation avec CSS3 : Une fois la structure mise en place, le développeur applique des styles avec CSS3. Cela comprend la définition de la mise en page (grilles, flexbox), des couleurs, des polices et des espacements. Il adapte aussi l’apparence du site à différents appareils avec des règles de media queries.

Ajout dinteractivité avec JavaScript et jQuery : Le développeur ajoute des fonctionnalités dynamiques telles que des menus déroulants, des formulaires interactifs, des carrousels dimages, et du contenu chargé de manière asynchrone pour améliorer lexpérience utilisateur.

Tests et optimisations : Tester un site web responsive est essentiel pour sassurer quil saffiche correctement sur toutes les tailles décran et navigateurs. Le développeur utilise des outils comme Chrome DevTools pour simuler des appareils et repérer les problèmes de mise en page. Loptimisation des performances (réduction de la taille des fichiers, compression des images) est également primordiale pour garantir un temps de chargement rapide.

Maintenance continue : Le rôle du développeur ne sarrête pas à la mise en ligne du site. La maintenance continue est nécessaire pour garantir que le site reste à jour, sécurisé, et performant. Le développeur résout les bugs signalés par les utilisateurs, met à jour le contenu et les technologies, et apporte des améliorations au besoin.

Compétences en collaboration et gestion de projets
En plus des compétences techniques, un développeur de pages web responsives doit posséder des compétences en gestion de projets et en collaboration :

Communication : Un développeur de sites web travaille souvent avec une équipe de designers, de chefs de projet, de développeurs backend et dautres parties prenantes. Il est essentiel de bien communiquer pour comprendre les besoins et les contraintes de chaque membre de léquipe.

Gestion de projet : Le développeur doit être capable de suivre les délais et de travailler dans des méthodologies comme Agile ou Scrum, en sassurant que le projet avance conformément au planning et aux attentes des clients.

Perspectives de carrière
Le métier de développeur de pages web responsives offre de nombreuses opportunités de carrière. À mesure que les entreprises se rendent compte de limportance davoir un site web qui fonctionne sur tous les appareils, la demande pour ces compétences augmente. Un développeur peut évoluer vers des rôles plus spécialisés, comme :

Développeur Full Stack : Compétences en développement frontend et backend.

Architecte web : Conception et gestion de larchitecture technique des sites.

Responsable de l’expérience utilisateur (UX) : Prise en charge de la stratégie et du design de lexpérience utilisateur.

Bassem BRAIKI
Développeur Full Stack', 'JavaScript, Tout afficher', 'dfs.php'),


('Projet4', 'Plateforme de gestion de projets collaboratifs (Projet de gestion déquipe et de tâches)
Janvier 2013 – Décembre 2014', "En tant que développeur de pages web responsives, mon rôle était de créer des sites web qui offrent une expérience fluide et agréable, quel que soit le dispositif utilisé. Lobjectif principal était de garantir une navigation optimale et un design adaptatif pour répondre aux besoins de chaque utilisateur, que ce soit sur un smartphone, une tablette ou un ordinateur de bureau.
Voici un aperçu des missions que jaccomplissais dans ce domaine :

HTML5 : Le langage de balisage utilisé pour structurer le contenu des pages web. Il est essentiel de sassurer que le site de gestion de projet soit construit avec des balises sémantiques appropriées, telles que <header>, <footer>, <section>, pour permettre une bonne hiérarchisation de l'information. Cela améliore l'accessibilité, le référencement et facilite l'intégration de fonctionnalités dynamiques.

CSS3 : Le langage de mise en forme utilisé pour styliser le site de gestion de projet. L'application de **media queries** permet de garantir que le design reste réactif, peu importe lappareil utilisé, que ce soit un ordinateur de bureau, une tablette ou un smartphone. L'utilisation des **flexbox** et des **grilles CSS** garantit une disposition fluide et adaptable des éléments en fonction de la taille de l'écran.

JavaScript et jQuery : JavaScript est essentiel pour ajouter de l'interactivité à l'interface utilisateur, par exemple, en permettant la gestion dynamique des tâches, lactualisation des projets en temps réel, ou encore la gestion des notifications. **jQuery** simplifie les interactions, comme l'affichage de données de manière dynamique via AJAX, et permet de gérer plus facilement les animations et les transitions.

Outils de gestion de version : Un développeur de site web collaboratif utilise des outils comme **Git** pour suivre les modifications du code, gérer les versions du site, et faciliter la collaboration avec d'autres membres de l'équipe de développement, garantissant ainsi un développement fluide et une gestion cohérente des différentes versions du projet.

Outils de conception : Les outils comme **Figma**, **Sketch** ou **Adobe XD** sont utilisés pour la création des maquettes du projet. Le développeur travaille souvent avec l’équipe de conception pour transformer ces maquettes en pages web interactives et fonctionnelles. Ces outils permettent également de collaborer efficacement entre designers et développeurs tout au long du processus.

Les étapes clés du développement d'une plateforme de gestion de projets collaboratifs
Analyse des besoins : Avant de commencer à coder, il est primordial de comprendre les objectifs du projet et les attentes des utilisateurs finaux. Cette phase inclut la discussion des fonctionnalités nécessaires comme la gestion des projets, la gestion des tâches, l'attribution de rôles, et les intégrations avec d'autres outils comme les calendriers ou les messageries internes.

Design adaptatif (Responsive Design) : Assurer que la plateforme de gestion de projets s’adapte parfaitement à tous les types d’appareils est essentiel. Les **media queries CSS** sont utilisées pour définir différentes règles de style en fonction de la taille des écrans, garantissant ainsi une interface fluide sur tous les appareils, de la version mobile à la version bureau.

Création de la structure HTML : La structure HTML5 du site de gestion de projet est définie en utilisant des balises sémantiques comme <header>, <footer>, <article>, <section> et autres pour organiser les informations de manière logique. Cela permet d’améliorer l’accessibilité et le référencement naturel, tout en offrant une base solide pour l’intégration de contenus dynamiques.

Stylisation avec CSS3 : Une fois la structure HTML mise en place, le développeur applique des règles CSS3 pour styliser les différentes sections de la plateforme de gestion de projet. Cela inclut la mise en page, les couleurs, les typographies, ainsi que l’adaptation du design à différentes tailles d’écran via les **media queries**. Une attention particulière est portée à l’interface utilisateur pour que la navigation entre les projets, tâches et discussions soit fluide et intuitive.

Ajout d'interactivité avec JavaScript et jQuery : Les fonctionnalités dynamiques telles que la gestion en temps réel des tâches, les interactions avec le tableau de bord, la modification instantanée des dates d’échéance ou des statuts des tâches, et l'affichage des notifications sont ajoutées avec **JavaScript**. Des bibliothèques comme **jQuery** facilitent l'intégration de ces fonctionnalités de manière fluide et rapide, en gérant les requêtes AJAX pour la mise à jour asynchrone des données sans rechargement de la page.

Tests et optimisations : Tester une plateforme de gestion de projets collaboratifs est crucial pour s'assurer de sa robustesse et de son bon fonctionnement sur tous les appareils. Le développeur utilise des outils comme **Chrome DevTools** pour tester le rendu sur différents écrans et résoudre les problèmes de mise en page ou de performance. L'optimisation des performances est également primordiale : cela inclut la compression des images, la minification des fichiers CSS et JS, et l'amélioration des temps de réponse des pages.

Maintenance continue : Une fois le site mis en ligne, la maintenance continue devient essentielle pour s’assurer que la plateforme de gestion de projets reste fonctionnelle, à jour et sécurisée. Cela comprend la gestion des bugs, les mises à jour de sécurité, ainsi que l’ajout de nouvelles fonctionnalités pour répondre aux besoins changeants des utilisateurs.

Compétences en collaboration et gestion de projets
En plus des compétences techniques, un développeur travaillant sur une plateforme de gestion de projets collaboratifs doit posséder des compétences en gestion de projets et en collaboration inter-équipes :

Communication : Un développeur doit être en mesure de travailler efficacement avec des designers, des chefs de projet, des développeurs backend et des utilisateurs finaux pour comprendre les besoins, résoudre les problèmes et faire avancer le projet selon les attentes.

Gestion de projet : Le développeur doit être capable de suivre les délais de développement, de travailler sous des méthodologies comme **Agile** ou **Scrum**, et de collaborer avec les parties prenantes pour garantir que le projet avance conformément au planning et aux exigences des utilisateurs.

Perspectives de carrière
Le métier de développeur pour des plateformes de gestion de projets collaboratifs offre une évolution vers des rôles plus spécialisés dans le domaine du développement logiciel. Les développeurs expérimentés peuvent évoluer vers des rôles tels que :

Développeur Full Stack : Compétences en développement frontend et backend, permettant de gérer l’ensemble de la pile technologique du projet.

Architecte logiciel : Conception de l'architecture technique des systèmes complexes pour des plateformes de gestion de projets à grande échelle.

Responsable de la gestion de produits (Product Manager) : Gestion des stratégies de développement et des fonctionnalités produits d'une plateforme de gestion de projets.

Bassem BRAIKI
Développeur Full Stack", 'Gestions de Projets, Tout afficher', 'fg.php'),


('Projet5', 'Application de gestion de la santé et du bien-être (Suivi de la forme physique et des habitudes)', "Objectif : Créer une application pour suivre la santé physique et mentale, incluant le suivi des exercices, de l'alimentation, et des habitudes de vie.

Description : Développer une application qui permet à l'utilisateur de suivre ses activités physiques, son alimentation, ses habitudes de sommeil, son niveau de stress et d'autres aspects de son bien-être. Les utilisateurs peuvent enregistrer leurs entrées quotidiennes et suivre leurs progrès dans un tableau de bord. L'application pourrait proposer des rappels ou des conseils personnalisés en fonction des données collectées.
Mon travail commençait par la compréhension des besoins du client ou du projet. Je devais m'assurer de bien comprendre les objectifs du site : s'il s'agissait d'une vitrine, d'un e-commerce, ou d'une plateforme plus complexe. Après cette phase d'analyse, je concevais la structure du site en définissant l'architecture des pages et la navigation.

Fonctionnalités :
Suivi des exercices : Enregistrer les types d'exercices, les durées, les calories brûlées, etc.
Suivi des repas : Permettre aux utilisateurs d'entrer ce qu'ils mangent avec une base de données d'aliments pour calculer les calories et les nutriments.
Suivi du sommeil : Saisir la durée du sommeil et la qualité du sommeil.
Tableau de bord : Visualiser les progrès via des graphiques et des statistiques pour chaque domaine (exercice, alimentation, sommeil).
Rappels et notifications : Rappels pour s'exercer, boire de l'eau, manger des repas équilibrés.
Conseils personnalisés : Conseils basés sur les progrès et les données saisies (ex. ajustement des objectifs d'exercice, suggestions d’aliments).

Technologies suggérées :


Frontend : React Native ou Flutter pour une application mobile multiplateforme (iOS et Android).
Backend : Node.js avec Express.
Base de données : Firebase ou MongoDB.
Authentification : Auth0 ou Firebase Authentication.
Déploiement :Firebase, AWS, ou DigitalOcean pour l’hébergement des APIs.

Bassem BRAIKI
Développeur Full Stack", 'Développement', 'fh.php');