<?php
// Configuration de la base de données
$servername = "localhost"; // Adresse de l'hôte (localhost si local)
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL (par défaut vide)
$dbname = "user_login"; // Nom de votre base de données

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
?>