-- Database Creation
CREATE DATABASE IF NOT EXISTS `projet_filtre`;
USE `projet_filtre`;
-- Table Creation
CREATE TABLE IF NOT EXISTS `projet` (
    `projetid` INT AUTO_INCREMENT,
    `titre` VARCHAR(100) NOT NULL,
    `description` TEXT NOT NULL,
    `category` VARCHAR(55),
    `link` VARCHAR(255),
    PRIMARY KEY (`projetid`)
);
-- Remove Old Data
TRUNCATE TABLE `projet`;
-- Insert Data
INSERT INTO projet (`titre`, `description`, `category`, `link`) 
VALUES 
    ('Développement de pages web responsives', 'Mon travail en tant que développeur de pages web responsives consistait à concevoir et à créer des sites web qui sont esthétiques, fonctionnels et accessibles sur tous types d’appareils.', 'Développement', 'generic.php'),
    ('Collaboration avec l’équipe backend pour intégrer des API', 'En tant que développeur de pages web responsives, mon rôle était de créer des sites web qui offrent une expérience fluide et agréable.', 'Gestions de Projets', 'bl.php'),
    ('Plateforme de gestion de projets pour une agence marketing', 'En 2023, j’ai participé à la création d’une plateforme de gestion de projets pour une agence marketing.', 'JavaScript', 'dfs.php'),
    ('Plateforme de gestion de projets collaboratifs', 'En tant que développeur de pages web responsives, mon rôle était de créer des sites web qui offrent une expérience fluide et agréable.', 'Gestions de Projets', 'fg.php'),
    ('Application de gestion de la santé et du bien-être', 'Objectif : Créer une application pour suivre la santé physique et mentale.', 'Développement', 'fh.php');