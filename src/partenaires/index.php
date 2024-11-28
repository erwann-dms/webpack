<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Style/style.css">
    <title>Nos Partenaires Développeurs</title>
</head>
<body class="body_partenaire">

    <div>
        <header class="header_partenaire">
            <h1 class="typing_partenaire">Nos Partenaires Développeurs</h1>
        </header>

        <div class="slider-container_partenaire">
            <div class="slider_partenaire">
            
                <div class="slide_partenaire">
                    <img src="/photos/Jean.jpg" alt="Partenaire 1">
                    <h2>Marie Palois</h2>
                    <p>Google.</p>
                </div>
               
                <div class="slide_partenaire">
                    <img src="/photos/Sophie.jpg" alt="Partenaire 2">
                    <h2>Sophie Carter</h2>
                    <p>Amazon.</p>
                </div>
             
                <div class="slide_partenaire">
                    <img src="/photos/Marc.jpg" alt="Partenaire 3">
                    <h2>Marc Gassy</h2>
                    <p>Entrepreneur s'etant developper dans la vente d'equipement hardware.</p>
                </div>
            </div>

            
            <div class="nav-buttons_partenaire">
                <button class="prev_partenaire" onclick="prevSlide()">&#10094;</button>
                <button class="next_partenaire" onclick="nextSlide()">&#10095;</button>
            </div>
        </div>

        <footer class="footer_partenaire">
            <p class="footer_p_partenaire">&copy; 2024 Tous droits réservés</p>
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
