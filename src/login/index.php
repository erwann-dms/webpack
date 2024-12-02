<?php
$conn = new mysqli("mysql", "root",$_SERVER['MYSQL_ROOT_PASSWORD'],"Website");
if ($conn->connect_error) {
    die("connection failed :" . $conn->connect_error);
}

$name = $password = "";
$nameErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    if (empty($_POST["name"])) {
        $nameErr = "Nom requis";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Mot de passe requis";
    } else {
        $password = htmlspecialchars($_POST["password"]);
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
    <script src="/JS/dynamic.js"></script>
</head>

<body class="body-background">

    <!-- Neige en fond -->
    <div class="snowflakes" aria-hidden="true">
        <!-- Flocons générés dynamiquement par JavaScript -->
    </div>

    <div class="login-container">
        <h2 class="title">Se Connecter</h2>


        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form">

            <input type="text" name="username" placeholder="Nom d'utilisateur" class="input"><br>


            <input type="password" name="password" placeholder="Mot de passe" class="input">
            <span style="color:red"><?php echo $passwordErr; ?></span><br>

            <input type="submit" value="Connexion" class="submit-button"><br>

            <?php if (isset($_GET['error']) && $_GET['error'] === 'username_taken'): ?>
                <p class="error">Nom d'utilisateur ou mot de passe erroné.</p>
            <?php endif; ?>

            <div class="small-text">
                <p>Pas encore inscrit ? <a href="/signup" class="link">Créer un compte</a></p>
                <p><a href="#" class="link">Mot de passe oublié ?</a></p>
            </div>
        </form>

        <a href="http://localhost:8000"><button class="back-button">Retour</button></a>
    </div>
</body>
</html>