<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $dsn = "mysql:host=mysql;port=3306;dbname=Website;charset=utf8mb4";
    $dbPassword = getenv('MYSQL_ROOT_PASSWORD'); 
    $dbUser = 'root';

    try {
        $pdo = new PDO($dsn, $dbUser, $dbPassword, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);

        $stmt = $pdo->prepare("SELECT password_hash FROM users WHERE login = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user) {
            $passwordHash = hash('sha256', $password);
            $token = bin2hex(random_bytes(32));
            $expiration = date('Y-m-d H:i:s', time() + (86400 * 30)); // Expire dans 30 jours

            $stmt = $pdo->prepare("
                    INSERT INTO sessions (token, user_login, expiration)
                    VALUES (:token, :username, :expiration)
                    ON DUPLICATE KEY UPDATE token = :token, expiration = :expiration
                ");
            $stmt->execute([
                'token' => $token,
                'username' => $username,
                'expiration' => $expiration,
            ]);

            if ($passwordHash === $user['password_hash']) {
                session_start();
                $_SESSION['username'] = $username;

                setcookie("auth_token", $token, [
                    'expires' => time() + (86400 * 30),
                    'path' => '/',
                    'secure' => true,
                    'httponly' => true,
                    'samesite' => 'Strict',
                ]);

                header("Location: /account");
                exit;
            } else {
                $error = "Nom d'utilisateur ou mot de passe incorrect.";
            }
        } else {
            $error = "Nom d'utilisateur ou mot de passe incorrect.";
        }
    } catch (PDOException $e) {
        $error = "Erreur de connexion à la base de données : " . htmlspecialchars($e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="/Style/style.css">
    <link rel="shortcut icon" href="/photos/logo1.png" type="image/x-icon">
    <script type="text/javascript" src="/JS/dynamic.js" defer></script>
</head>

<body class="body-background">

    <div class="login-container">
        <h2 class="title">Se Connecter</h2>


        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="form">

            <input type="text" name="username" placeholder="Nom d'utilisateur" class="input"><br>


            <input type="password" name="password" placeholder="Mot de passe" class="input">

            <input type="submit" value="Connexion" class="submit-button"><br>

            <?php if (isset($error)): ?>
                <p class="error"><?= $error ?></p>
            <?php endif; ?>

            <div class="small-text">
                <p>Pas encore inscrit ? <a href="/signup" class="link">Créer un compte</a></p>
                <p><a href="#" class="link">Mot de passe oublié ?</a></p>
            </div>
        </form>

        <a href="/"><button class="back-button">Retour</button></a>
    </div>
</body>

</html>