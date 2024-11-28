<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Partenaires Développeurs</title>
    <style>
        /* Reset des marges et padding par défaut */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Style global */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #2C2F3A; /* Fond sombre inspiré de Discord */
            color: #FFF;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Hauteur complète de la fenêtre */
            width: 100vw; /* Largeur complète de la fenêtre */
            overflow: hidden;
            position: relative;
        }

        /* En-tête de la page */
        header {
            text-align: center;
            position: absolute;
            top: 10%;
            width: 100%;
        }

        /* Animation d'écriture du texte */
        .typing {
            font-size: 3.5rem;
            color: #7289da; /* Bleu Discord */
            font-weight: 600;
            border-right: 4px solid #FFF; /* Curseur style "typewriter" */
            display: inline-block;
            white-space: nowrap;
            overflow: hidden;
            animation: typing 4s steps(30) 1s forwards, blink 0.75s step-end infinite, hideCursor 0.5s 4s forwards;
        }

        /* Animation de l'écriture (simule l'écriture avec le curseur) */
        @keyframes typing {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }

        /* Animation du curseur clignotant */
        @keyframes blink {
            50% {
                border-color: transparent;
            }
        }

        /* Animation pour cacher la barre de curseur après la fin de l'écriture */
        @keyframes hideCursor {
            to {
                border-color: transparent;
            }
        }

        /* Conteneur du slider */
        .slider-container {
            position: relative;
            width: 100%;
            height: 70%; /* Le slider prend 70% de la hauteur de la page */
            border-radius: 20px;
            background-color: #36393F; /* Fond sombre du slider */
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Contenu du slider (les différentes "slides") */
        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 100%;
            height: 100%;
        }

        .slide {
            flex: 0 0 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }

        /* Image des partenaires (cercle avec bordure) */
        .slide img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 3px solid #7289da; /* Bordure bleue Discord */
        }

        /* Titre du partenaire */
        .slide h2 {
            font-size: 2.5rem;
            color: #FFF;
            margin-bottom: 10px;
        }

        /* Description du partenaire */
        .slide p {
            color: #B9BBBE; /* Gris clair de Discord */
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Boutons de navigation */
        .nav-buttons {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .prev, .next {
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            font-size: 2.5rem;
            padding: 15px;
            cursor: pointer;
            border-radius: 50%;
            transition: background-color 0.3s ease;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }

        footer {
            background-color: #36393F;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        footer p {
            color: #B9BBBE;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <div>
        <header>
            <h1 class="typing">Nos Partenaires Développeurs</h1>
        </header>

        <div class="slider-container">
            <div class="slider">
                <!-- Slide 1 -->
                <div class="slide">
                    <img src="/photos/Jean.jpg" alt="Partenaire 1">
                    <h2>Marie Palois</h2>
                    <p>Google.</p>
                </div>
                <!-- Slide 2 -->
                <div class="slide">
                    <img src="/photos/Sophie.jpg" alt="Partenaire 2">
                    <h2>Sophie Carter</h2>
                    <p>Amazon.</p>
                </div>
                <!-- Slide 3 -->
                <div class="slide">
                    <img src="/photos/Marc.jpg" alt="Partenaire 3">
                    <h2>Marc Gassy</h2>
                    <p>Entrepreneur s'etant developper dans la vente d'equipement hardware.</p>
                </div>
            </div>

            <!-- Boutons de navigation -->
            <div class="nav-buttons">
                <button class="prev" onclick="prevSlide()">&#10094;</button>
                <button class="next" onclick="nextSlide()">&#10095;</button>
            </div>
        </div>

        <footer>
            <p>&copy; 2024 Tous droits réservés</p>
        </footer>
    </div>

    <script>
        let currentSlide = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.slide');
            const totalSlides = slides.length;
            if (index >= totalSlides) {
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = totalSlides - 1;
            } else {
                currentSlide = index;
            }

            const slider = document.querySelector('.slider');
            slider.style.transform = `translateX(-${currentSlide * 100}%)`;
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }
    </script>
</body>
</html>
