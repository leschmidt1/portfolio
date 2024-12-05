<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');

// Connexion à la base de données
$host = 'localhost';
$dbname = 'user_login';
$username = 'root';
$password = 'root';

session_start(); // Démarrer la session

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données.");
}

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $signupUsername = htmlspecialchars(trim($_POST['signup_username']));
    $signupEmail = htmlspecialchars(trim($_POST['signup_email']));
    $signupPassword = htmlspecialchars($_POST['signup_password']);

    // Validation basique
    if (empty($signupUsername) || empty($signupEmail) || empty($signupPassword)) {
        $errorMessage = "Tous les champs sont obligatoires.";
    } else {
        // Hashage du mot de passe
        $hashedPassword = password_hash($signupPassword, PASSWORD_BCRYPT);

        try {
            // Vérifier si l'email ou le nom d'utilisateur existent déjà
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = :email OR username = :username");
            $stmt->bindParam(':email', $signupEmail);
            $stmt->bindParam(':username', $signupUsername);
            $stmt->execute();
            $count = $stmt->fetchColumn();

            if ($count > 0) {
                $errorMessage = "Nom d'utilisateur ou email déjà utilisé.";
            } else {
                // Insertion dans la base de données
                $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':username', $signupUsername);
                $stmt->bindParam(':email', $signupEmail);
                $stmt->bindParam(':password', $hashedPassword);
                $stmt->execute();

                // Connexion automatique : récupérer les informations de l'utilisateur
                $userId = $pdo->lastInsertId(); // Obtenir l'ID de l'utilisateur nouvellement créé

                // Stocker les informations de l'utilisateur dans la session
                $_SESSION['user_id'] = $userId;
                $_SESSION['username'] = $signupUsername;
                $_SESSION['email'] = $signupEmail;

                // Redirection vers la page d'accueil après l'inscription et la connexion automatique
                header("Location: index.php");
                exit;
            }
        } catch (PDOException $e) {
            $errorMessage = "Erreur lors de la création du compte.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Créer un compte</title>
    <link rel="stylesheet" href="style.css"> <!-- Lien vers votre CSS existant -->
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Créer un compte</h1>
        <p>Rejoignez le portfolio de Bassem BRAIKI en quelques étapes simples</p>
    </header>

    <!-- Contenu principal -->
    <main>
        <!-- Formulaire de création de compte -->
        <div id="signup-form">
            <h2>Créer un compte</h2>
            <?php if ($errorMessage): ?>
                <div class="error-message"><?php echo $errorMessage; ?></div>
            <?php endif; ?>
            <form action="create.php" method="POST">
                <div class="input-group">
                    <label for="signup-username">Nom d'utilisateur</label>
                    <input type="text" id="signup-username" name="signup_username" required>
                </div>
                <div class="input-group">
                    <label for="signup-email">Adresse mail</label>
                    <input type="email" id="signup-email" name="signup_email" required>
                </div>
                <div class="input-group">
                    <label for="signup-password">Mot de passe</label>
                    <input type="password" id="signup-password" name="signup_password" required>
                </div>
                <button type="submit" class="btn">Créer le compte</button>
            </form>
            <div class="back-to-login">
                <p>Vous avez déjà un compte ? <a href="index.php" class="back-button">Retour à la connexion</a></p>
            </div>
        </div>
    </main>

</body>
</html>