<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        /* Définition des variables CSS pour personnaliser le design */
        :root {
            --background-button: #222;
            --background-main: #111;
            --nav-link-color: white;
            --text-color: rgba(255, 255, 255, 0.658);
            --highlight-gradient: linear-gradient(4deg, #00ffd5, #002bff, #00ffd5);
            --header2-gradient: linear-gradient(to right, #00eeff, #0026ff);
            --background-pic: url('../photos/background.png');
            --background-gradient: linear-gradient(128deg, #000000 0%, #020041 50%, #002B34 100%);
            --bio-background: #3f4041;
            --text-color-bio: white;
        }

        /* Corps de la page avec un fond de dégradé défini par la variable */
        body {
            font-family: Arial, sans-serif;
            background-color: var(--background-main);
            color: var(--text-color);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: var(--background-gradient);
            overflow: hidden; /* Pour ne pas afficher de scrollbar avec la neige */
        }

        /* Conteneur principal du formulaire de login avec un arrière-plan semi-transparent */
        .login-container {
            background-color: var(--bio-background);
            border-radius: 8px;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            opacity: 0;
            animation: fadeIn 1s forwards;
        }

        /* Animation de fondu en entrée */
        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        h2 {
            color: var(--header2-gradient); /* Gradient pour le titre */
            margin-bottom: 20px;
            font-size: 24px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* Conteneur du formulaire avec flexbox pour les champs */
        form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center; /* Centrer les éléments à l'intérieur du formulaire */
        }

        /* Champs de saisie avec animation au focus */
        input[type="text"], input[type="password"] {
            width: 100%;
            max-width: 250px; /* Réduire la largeur des champs */
            padding: 12px;
            margin: 10px 0;
            background-color: var(--background-button);
            border: 1px solid var(--background-button);
            border-radius: 5px;
            color: var(--text-color);
            font-size: 16px;
            transition: border-color 0.3s ease, transform 0.3s ease;
        }

        /* Animation au focus sur les champs de saisie */
        input[type="text"]:focus, input[type="password"]:focus {
            border-color: var(--highlight-gradient);
            transform: scale(1.05);
        }

        /* Bouton de soumission avec effet au survol */
        input[type="submit"] {
            width: 100%;
            max-width: 250px; /* Ajuster la largeur du bouton pour qu'il corresponde aux champs */
            padding: 14px;
            background-color: var(--background-button);
            border: none;
            border-radius: 5px;
            color: var(--text-color);
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin-top: 10px; /* Ajouter un peu d'espace au-dessus du bouton */
        }

        /* Effet de survol pour le bouton */
        input[type="submit"]:hover {
            background-color: var(--highlight-gradient);
            transform: translateY(-3px);
        }

        /* Message d'erreur en couleur rouge si les identifiants sont incorrects */
        .error {
            color: var(--text-color-bio);
            margin-top: 10px;
            font-size: 14px;
        }

        /* Petit texte sous le formulaire pour les utilisateurs déjà inscrits */
        .small-text {
            margin-top: 15px;
            font-size: 14px;
        }

        .small-text a {
            color: var(--nav-link-color);
            text-decoration: none;
        }

        .small-text a:hover {
            text-decoration: underline;
        }

        /* Bouton "Retour" pour revenir à la page précédente */
        .back-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: var(--background-button);
            border: none;
            border-radius: 5px;
            color: var(--text-color);
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        /* Effet de survol pour le bouton "Retour" */
        .back-button:hover {
            background-color: var(--highlight-gradient);
            transform: translateY(-3px);
        }

        /* Neige en arrière-plan */
        .snowflake {
            position: absolute;
            top: -10px;
            z-index: 9999;
            color: white;
            font-size: 1.5em;
            animation: snow 10s linear infinite;
        }

        @keyframes snow {
            0% {
                transform: translateX(0) translateY(0);
            }
            100% {
                transform: translateX(-100px) translateY(100vh);
            }
        }
    </style>
</head>
<body>

    <!-- Neige en fond -->
    <div class="snowflakes" aria-hidden="true">
        <span class="snowflake">❄</span>
        <span class="snowflake">❄</span>
        <span class="snowflake">❄</span>
        <span class="snowflake">❄</span>
        <span class="snowflake">❄</span>
        <span class="snowflake">❄</span>
        <span class="snowflake">❄</span>
        <span class="snowflake">❄</span>
    </div>

    <div class="login-container">
        <h2>Se Connecter</h2>

        <!-- Formulaire de login -->
        <form action="#" method="post">
            <!-- Champs de saisie pour le nom d'utilisateur -->
            <input type="text" name="username" placeholder="Nom d'utilisateur" required><br>
            
            <!-- Champs de saisie pour le mot de passe -->
            <input type="password" name="password" placeholder="Mot de passe" required><br>
            
            <!-- Bouton de soumission -->
            <input type="submit" value="Connexion"><br>

            <!-- Message d'erreur (si nécessaire) -->
            <p class="error">Nom d'utilisateur ou mot de passe incorrect.</p>

            <!-- Texte pour inscription ou lien pour mot de passe oublié -->
            <div class="small-text">
                <p>Pas encore inscrit ? <a href="#">Créer un compte</a></p>
                <p><a href="#">Mot de passe oublié ?</a></p>
            </div>
        </form>

        <!-- Bouton "Retour" -->
        <button class="back-button" onclick="window.history.back()">Retour</button>
    </div>

    <script>
        // Générer des flocons de neige animés à intervalle régulier
        const snowflakes = document.querySelector('.snowflakes');

        for (let i = 0; i < 30; i++) {
            const snowflake = document.createElement('span');
            snowflake.classList.add('snowflake');
            snowflake.style.left = Math.random() * 100 + 'vw';  // Position aléatoire en X
            snowflake.style.animationDuration = (Math.random() * 5 + 5) + 's';  // Durée aléatoire de la chute
            snowflakes.appendChild(snowflake);
        }
    </script>

</body>
</html>
