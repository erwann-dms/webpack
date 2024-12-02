<?php
session_start();

// Vérification si l'utilisateur est connecté (ici simulation via session)
if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = 1; // Simule un utilisateur connecté (id = 1)
    $_SESSION['username'] = 'Utilisateur'; // Simule le nom d'utilisateur
    $_SESSION['liked_items'] = ['Item 1', 'Item 2', 'Item 3']; // Simule les éléments likés
}

// Récupérer le nom d'utilisateur actuel
$current_username = $_SESSION['username'];
$liked_items = $_SESSION['liked_items'];

// Mise à jour du nom d'utilisateur
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new_username'])) {
    $new_username = trim($_POST['new_username']);
    
    // Vérification que le nom d'utilisateur n'est pas vide
    if (!empty($new_username)) {
        $_SESSION['username'] = $new_username;
        header('Location: account.php'); // Rediriger pour éviter la soumission multiple du formulaire
        exit();
    } else {
        $error = "Le nom d'utilisateur ne peut pas être vide.";
    }
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
</head>
<body class="body-background">

    <div class="account-container">

        <!-- Menu de navigation avec les boutons à gauche -->
        <div class="menu-buttons">
            <button class="menu-button" onclick="showSection('change_username')">Changer le nom</button>
            <button class="menu-button" onclick="showSection('liked_items')">Mes éléments likés</button>
        </div>

        <!-- Contenu principal -->
        <div class="content">
            <h2 class="title">Mon Compte</h2>

            <!-- Section pour changer le nom d'utilisateur -->
            <div id="change_username" class="section">
                <h3>Changer le nom d'utilisateur</h3>
                <form action="account.php" method="POST" class="form">
                    <label for="new_username">Nouveau nom d'utilisateur :</label>
                    <input type="text" name="new_username" value="<?= htmlspecialchars($current_username); ?>" class="input" required><br>
                    <input type="submit" value="Mettre à jour" class="submit-button"><br>

                    <?php if (isset($error)) : ?>
                        <p class="error"><?= htmlspecialchars($error) ?></p>
                    <?php endif; ?>
                </form>
            </div>

            <!-- Section pour afficher les éléments likés -->
            <div id="liked_items" class="section" style="display:none;">
                <h3>Éléments que vous avez likés</h3>
                <?php if (count($liked_items) > 0): ?>
                    <ul class="likes-list">
                        <?php foreach ($liked_items as $item): ?>
                            <li><?= htmlspecialchars($item); ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>Vous n'avez encore liké aucun élément.</p>
                <?php endif; ?>
            </div>

            <button class="back-button" onclick="window.history.back()">Retour</button>
        </div>
    </div>

    <script>
        // Fonction pour afficher une section spécifique
        function showSection(sectionId) {
            // Masquer toutes les sections
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => {
                section.style.display = 'none';
            });

            // Afficher la section sélectionnée
            const sectionToShow = document.getElementById(sectionId);
            if (sectionToShow) {
                sectionToShow.style.display = 'block';
            }
        }

        // Afficher la section de changement de nom par défaut à l'arrivée
        window.onload = function() {
            showSection('change_username');
        };
    </script>

</body>
</html>
