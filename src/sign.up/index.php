<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="/Style/style.css">
    <link rel="shortcut icon" href="/photos/logo1.png" type="image/x-icon">
    <script type="text/javascript" src="/JS/dynamic.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
</head>
<body class="body-background">

    <div class="login-container">
        <h2 class="title">S'inscrire</h2>

        <form id="signupForm" action="#" method="post" class="form">
            <input type="text" name="username" placeholder="Nom d'utilisateur" class="input" required><br>
            <input type="password" id="password" name="password" placeholder="Mot de passe" class="input" required><br>
            <input type="submit" value="Inscription" class="submit-button"><br>

            <?php if (isset($_GET['error']) && $_GET['error'] === 'username_taken') : ?>
                <p class="error">Nom d'utilisateur déjà utilisé.</p>
            <?php endif; ?>

            <div class="small-text">
                <p>Déjà inscrit ? <a href="../login" class="link">J'ai déjà un compte</a></p>
                <p><a href="#" class="link">Mot de passe oublié ?</a></p>
            </div>
        </form>

        <button class="back-button" onclick="window.history.back()">Retour</button>
    </div>

    <script>
        async function checkPassword(password) {
            const sha1 = CryptoJS.SHA1(password).toString(CryptoJS.enc.Hex).toUpperCase();
            const prefix = sha1.substring(0, 5);
            const suffix = sha1.substring(5);

            const response = await fetch(`https://api.pwnedpasswords.com/range/${prefix}`);
            const data = await response.text();

            return data.includes(suffix);
        }

        document.getElementById("signupForm").addEventListener("submit", async (e) => {
            const password = document.getElementById("password").value;
            const isCompromised = await checkPassword(password);

            if (isCompromised) {
                e.preventDefault(); 
                alert("Ce mot de passe a été compromis ! Veuillez en choisir un autre.");
            }
        });
    </script>
</body>
</html>
