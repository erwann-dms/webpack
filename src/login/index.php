<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <!-- Lien vers le fichier CSS externe -->
    <link rel="stylesheet" href="styles.css">
</head>
<body class="body-background">

    <!-- Neige en fond -->
    <div class="snowflakes" aria-hidden="true">
        <!-- Flocons générés dynamiquement par JavaScript -->
    </div>

    <div class="login-container">
        <h2 class="title">Se Connecter</h2>

        <!-- Formulaire de login -->
        <form action="#" method="post" class="form">
            <!-- Champs de saisie pour le nom d'utilisateur -->
            <input type="text" name="username" placeholder="Nom d'utilisateur" class="input" required><br>
            
            <!-- Champs de saisie pour le mot de passe -->
            <input type="password" name="password" placeholder="Mot de passe" class="input" required><br>
            
            <!-- Bouton de soumission -->
            <input type="submit" value="Connexion" class="submit-button"><br>

            <!-- Message d'erreur (si nécessaire) -->
            <p class="error">Nom d'utilisateur ou mot de passe incorrect.</p>

            <!-- Texte pour inscription ou lien pour mot de passe oublié -->
            <div class="small-text">
                <p>Pas encore inscrit ? <a href="#" class="link">Créer un compte</a></p>
                <p><a href="#" class="link">Mot de passe oublié ?</a></p>
            </div>
        </form>

        <!-- Bouton "Retour" -->
        <button class="back-button" onclick="window.history.back()">Retour</button>
    </div>

    <script>
        // Générer des flocons de neige animés à intervalle régulier
        const snowflakesContainer = document.querySelector('.snowflakes');

        // Créer 50 flocons de neige
        for (let i = 0; i < 50; i++) {
            const snowflake = document.createElement('span');
            snowflake.classList.add('snowflake');
            
            // Générer une taille aléatoire entre petit (0.8em) et moyen (1.5em)
            const size = Math.random() * 0.7 + 0.8; // taille entre 0.8em et 1.5em
            snowflake.style.fontSize = `${size}em`;

            // Placer chaque flocon à une position aléatoire
            const leftPosition = Math.random() * 100; // Entre 0 et 100% de la largeur
            snowflake.style.left = `${leftPosition}vw`;

            // Ajouter le flocon au conteneur
            snowflakesContainer.appendChild(snowflake);
        }
    </script>
</body>
</html>
