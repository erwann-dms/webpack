<?php
session_start();

$userLoggedIn = false;
$username = null;

if (isset($_COOKIE['auth_token'])) {
    $authToken = $_COOKIE['auth_token'];

    $dsn = "mysql:host=mysql;port=3306;dbname=Website;charset=utf8mb4";
    $dbPassword = getenv('MYSQL_ROOT_PASSWORD');
    $dbUser = 'root';

    try {
        $pdo = new PDO($dsn, $dbUser, $dbPassword, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);

        $stmt = $pdo->prepare("SELECT user_login FROM sessions WHERE token = :token AND expiration > NOW()");
        $stmt->execute(['token' => $authToken]);
        $session = $stmt->fetch();

        if ($session) {
            $userLoggedIn = true;
            $username = $session['user_login'];
        }
    } catch (PDOException $e) {
        error_log("Erreur de connexion à la base de données : " . $e->getMessage());
    }
}

if (!$userLoggedIn) {
    header("Location: /login");
    exit;
}

try {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE login = :username");
    $stmt->execute(['username' => $username]);
    $userInfo = $stmt->fetch();
} catch (PDOException $e) {
    error_log("Erreur de récupération des informations utilisateur : " . $e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte</title>
    <link rel="stylesheet" href="/Style/style.css">
    <link rel="shortcut icon" href="/photos/logo1.png" type="image/x-icon">
    <script type="text/javascript" src="/JS/dynamic.js" defer></script>
</head>

<body class="body-background">

    <div class="login-container">
        <h2 class="title">Bienvenue, <?= htmlspecialchars($username) ?></h2>

        <div class="user-info">
            <p><strong>Nom d'utilisateur:</strong> <?= htmlspecialchars($userInfo['login']) ?></p>
        </div>

        <a href="/logout"><button class="back-button">Se déconnecter</button></a>

        <a href="/"><button class="back-button">Retour à l'accueil</button></a>
    </div>

</body>

</html>
