    <?php
    // Vérifiez que $mysqlClient est bien initialisé dans databaseconnect.php
    $projetStatement = $mysqlClient->prepare('SELECT * FROM projet');
    $projetStatement->execute();
    $projet = $projetStatement->fetchAll(PDO::FETCH_ASSOC); 
    ?>

    <?php
    // Vérifiez que $mysqlClient est bien initialisé dans databaseconnect.php
    $usersStatement = $mysqlClient->prepare('SELECT * FROM projet');
    $usersStatement->execute();
    $users = $usersStatement->fetchAll(PDO::FETCH_ASSOC);
    ?>