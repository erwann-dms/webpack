<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    function isPasswordValid($password) {
        $errors = [];

        if (strlen($password) < 8) {
            $errors[] = "Le mot de passe doit contenir au moins 8 caractères.";
        }
        if (!preg_match('/[A-Z]/', $password)) {
            $errors[] = "Le mot de passe doit contenir au moins une lettre majuscule.";
        }
        if (!preg_match('/[a-z]/', $password)) {
            $errors[] = "Le mot de passe doit contenir au moins une lettre minuscule.";
        }
        if (!preg_match('/\d/', $password)) {
            $errors[] = "Le mot de passe doit contenir au moins un chiffre.";
        }
        if (!preg_match('/[\W_]/', $password)) {
            $errors[] = "Le mot de passe doit contenir au moins un caractère spécial.";
        }

        return $errors;
    }

    function isPasswordCompromised($password) {
        $sha1Password = strtoupper(sha1($password)); 
        $prefix = substr($sha1Password, 0, 5);
        $suffix = substr($sha1Password, 5); 

        $url = "https://api.pwnedpasswords.com/range/$prefix";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return strpos($response, $suffix) !== false;
    }

    $validationErrors = isPasswordValid($password);

    if (!empty($validationErrors)) {
        $error = implode('<br>', $validationErrors);
    } elseif (isPasswordCompromised($password)) {
        $error = "Ce mot de passe a été compromis. Veuillez en choisir un autre.";
    } else {
        $dsn = "mysql:host=mysql;port=3306;dbname=Website;charset=utf8mb4";
        $dbPassword = getenv('MYSQL_ROOT_PASSWORD'); 
        $dbUser = 'root';

        try {
            $pdo = new PDO($dsn, $dbUser, $dbPassword, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);

            $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE login = :username");
            $stmt->execute(['username' => $username]);
            $userExists = $stmt->fetchColumn() > 0;

            if ($userExists) {
                $error = "Ce nom d'utilisateur est déjà utilisé. Veuillez en choisir un autre.";
            } else {
                $passwordHash = hash('sha256',$password);

                $stmt = $pdo->prepare("INSERT INTO users (login, password_hash) VALUES (:username, :password_hash)");
                $stmt->execute([
                    'username' => $username,
                    'password_hash' => $passwordHash,
                ]);

                header("Location: ../login/index.php"); 
                exit;
            }
        } catch (PDOException $e) {
            $error = "Erreur de connexion ou d'insertion : " . htmlspecialchars($e->getMessage());
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="/Style/style.css">
    <link rel="shortcut icon" href="/photos/logo1.png" type="image/x-icon">
    <script type="text/javascript" src="/JS/dynamic.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
</head>
<body class="body-background">

    <div class="login-container">
        <h2 class="title">S'inscrire</h2>

        <form action="#" method="post" class="form">
            <input type="text" name="username" placeholder="Nom d'utilisateur" class="input" required><br>
            <input type="password" name="password" placeholder="Mot de passe" class="input" required><br>
            <input type="submit" value="Inscription" class="submit-button"><br>

            <?php if (isset($error)) : ?>
                <p class="error"><?= $error ?></p>
            <?php endif; ?>

            <div class="small-text">
                <p>Déjà inscrit ? <a href="../login" class="link">J'ai déjà un compte</a></p>
            </div>
        </form>

        <button class="back-button" onclick="window.history.back()">Retour</button>
    </div>

</body>
</html>
