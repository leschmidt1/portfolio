-- Database Creation
CREATE DATABASE IF NOT EXISTS `projet_filtre`;
USE `projet_filtre`;

-- Table Creation
CREATE TABLE IF NOT EXISTS 'projet' (
    projetid INT PRIMARY KEY,  
    titre VARCHAR(20) NOT NULL,
    description VARCHAR(30),
    category VARCHAR(25),
    link VARCHAR(25)  
);

INSERT INTO projet (`id`, `titre`, `description`, `categorie`, `lien`) 
VALUES 
(1, 'Développement de pages web responsives', 'Mon travail en tant que développeur de pages web responsives consistait à concevoir et à créer des sites web qui sont esthétiques,fonctionnels et accessibles sur tous types d’appareils.', 'Développement', 'generic.php');
(2, 'Collaboration avec l’équipe backend pour intégrer des API', 'En tant que développeur de pages webresponsives, mon rôle était de créer des sites web qui offrent une expérience fluide et agréable', 'Gestions de Projets', 'bl.php');
(3, 'Plateforme de gestion de projets pour une agence marketing', 'En 2023, jai participé à la création dune plateforme de gestion de projets pour une agence marketing', 'JavaScript', 'dfs.php');
(4, 'Plateforme de gestion de projets collaboratifs', 'En tant que développeur de pages web responsives, mon rôle était de créer des sites web qui offrent une expérience fluide et agréable', 'Gestions de Projets', 'fg.php');
(5, 'Application de gestion de la santé et du bien-être', 'Objectif : Créer une application pour suivre la santé physique et mentale', 'Développement', 'fh.php');
