<?php
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

        $stmt = $pdo->prepare("
            SELECT user_login 
            FROM sessions 
            WHERE token = :token AND expiration > NOW()
        ");
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

if ($userLoggedIn) {
    echo "Bonjour, $username ! Bienvenue sur la page protégée.";
} else {
    echo "Vous n'êtes pas connecté. Veuillez vous reconnecter.";
}
?>
