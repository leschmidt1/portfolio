<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Se connecter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Se connecter</h1>
        <p>Bienvenue sur le portfolio de Bassem BRAIKI</p>
    </header>

    <!-- Formulaire de Connexion -->
    <main>
        <div id="login-section">
            <h2>Connexion</h2>

            <!-- Affichage des erreurs -->
            <?php if (!empty($errorMessage)): ?>
                <div class="error-message"><?php echo $errorMessage; ?></div>
            <?php endif; ?>

            <form action="index.php" method="post">
                <div class="input-group">
                    <label for="login-username">Nom d'utilisateur</label>
                    <input type="text" id="login-username" name="login_username" required />
                </div>
                <div class="input-group">
                    <label for="login-password">Mot de passe</label>
                    <input type="password" id="login-password" name="login_password" required />
                </div>
                <button class="btn">Se connecter</button>
            </form>

            <div class="forgot-password">
                <a href="index.php">Mot de passe oublié ?</a>
            </div>

            <!-- Nouveau bouton pour créer un utilisateur -->
            <div class="create-account">
                <p>Vous n'avez pas de compte ? <a href="create.php" id="create-account-link">Créez-en un ici</a></p>
            </div>
        </div>
    </main>

</body>
</html>

<?php
session_start(); // Démarrer la session

// Connexion à la base de données
$host = 'localhost';
$dbname = 'user_login';
$username = 'root';
$password = 'root';

$errorMessage = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loginUsername = htmlspecialchars(trim($_POST['login_username'])); // Changer 'username' par 'login_username'
    $loginPassword = htmlspecialchars($_POST['login_password']); // Changer 'password' par 'login_password'

    // Validation basique
    if (empty($loginUsername) || empty($loginPassword)) {
        $errorMessage = "Nom d'utilisateur ou mot de passe manquant.";
    } else {
        try {
            // Vérifier si l'utilisateur existe
            $sql = "SELECT * FROM users WHERE username = :username";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':username', $loginUsername);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Si l'utilisateur existe et que le mot de passe est correct
            if ($user && password_verify($loginPassword, $user['password'])) {
                // Démarrer la session et stocker les informations
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];

                // Redirection vers la page d'accueil
                header("Location: accueil.php?user_id=" . $_SESSION['user_id']);
                exit;
            } else {
                $errorMessage = "Nom d'utilisateur ou mot de passe incorrect.";
            }
        } catch (PDOException $e) {
            $errorMessage = "Erreur lors de la connexion.";
        }
    }
}


