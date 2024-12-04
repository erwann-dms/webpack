<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Style/style.css">
    <script type="text/javascript" src="JS/dynamic.js" defer></script>
    <title>Nos Partenaires Développeurs</title>
    <link rel="shortcut icon" href="/photos/logo1.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="body">
<?php include $_SERVER['DOCUMENT_ROOT'] . "./common/navbar.php";?>
    <div>
        <header class="header_partenaire">
            <h1 class="typing_partenaire">Nos Partenaires Développeurs</h1>
        </header>


<div class="mega-div">
  <div class="big-div">
    <div class="carousel">
      <button class="carousel-button left" id="prevBtn">◀</button>
      <div class="carousel-track" id="carouselTrack">
          <div class="carousel-item" alt="Slide 1">
            <div class="bd-mrwn">
              <div class="name">Marie Palois</div>
              <div class="photo-container"><img src="../photos/Jean.jpg" alt=""></div>
              <div class="bio">
              <p>Google</p>
              </div>
              </div>
          </div>
          <div class="carousel-item" alt="Slide 2">
            <div class="bd-mrwn">
              <div class="photo-container"><img src="../photos/Sophie.jpg" alt=""></div>
                <div class="name">Sophie Carter</div>
                  <div class="bio">
                    <p>Amazon </p>
                  </div>
                </div>
              </div>
          <div class="carousel-item" alt="Slide 3">
            <div class="bd-mrwn">
              <div class="photo-container">
                  <img src="../photos/Marc.jpg" alt="ma photo">
              </div>
              <div class="name"> 
              Marc Gassy
              </div>
              <div class="bio">
                  <p>Entrepreneur s'etant developper dans la vente d'equipement hardware.</p>
              </div>
            </div>
            </div>
          </div>
        </div>
        <button class="carousel-button right" id="nextBtn">▶</button>
      </div>
    </div>
  </div>
</div>

        <footer class="footer_partenaire">
            <p class="footer_p_partenaire">&copy; 2024 Tous droits réservés</p>
        </footer>


        <script>
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");
        const carouselTrack = document.getElementById("carouselTrack");
        const carouselItems = document.querySelectorAll(".carousel-item");

        let currentIndex = 0;
        const totalItems = carouselItems.length;

        function updateCarousel() {
            const offset = -currentIndex * 100;
            carouselTrack.style.transform = `translateX(${offset}%)`;
        }

        prevBtn.addEventListener("click", () => {
            currentIndex = (currentIndex === 0) ? totalItems - 1 : currentIndex - 1;
            updateCarousel();
        });

        nextBtn.addEventListener("click", () => {
            currentIndex = (currentIndex === totalItems - 1) ? 0 : currentIndex + 1;
            updateCarousel();
        });
    </script>

</body>
</html>
