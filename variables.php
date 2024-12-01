<?php
// Vérifiez que $mysqlClient est bien initialisé dans databaseconnect.php
$projetStatement = $mysqlClient->prepare('SELECT * FROM projet');
$projetStatement->execute();
$projet = $projetStatement->fetchAll(PDO::FETCH_ASSOC); // Utilisez FETCH_ASSOC pour un tableau associatif
?>