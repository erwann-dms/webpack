<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    header("Location: index.php"); // Rediriger vers la page de connexion si non connecté
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a1a;
            color: #fff;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #1e90ff;
        }
        a {
            color: #1e90ff;
            text-decoration: none;
            font-size: 18px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['user']); ?> !</h1>
    <p>Vous êtes maintenant connecté.</p>
    <p><a href="logout.php">Se déconnecter</a></p>

</body>
</html>
