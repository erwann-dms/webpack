<!DOCTYPE html>
<html lang="fr" class="html">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/Style/style.css">
  <script type="text/javascript" src="/JS/dynamic.js" defer></script>   
  <title>Notre Team</title>
  <link rel="shortcut icon" href="/photos/logo1.png">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="body">
<?php include $_SERVER['DOCUMENT_ROOT'] . "./common/verifytoken.php";?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "./common/navbar.php";?>

  <div class="mega-div">
  <div class="big-div">
    <div class="carousel">
      <button class="carousel-button left" id="prevBtn">◀</button>
      <div class="carousel-track" id="carouselTrack">
          <div class="carousel-item" alt="Slide 1">
            <div class="bd-mrwn">
            
              <div class="photo-container"><img src="../photos/Jean.jpg"></div>
              <div class="name">Marie Palois</div>
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
                    <p>Amazon</p>
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
                  <p>Entrepreneur dans la vente d'équipement hardware
                      </p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-button right" id="nextBtn">▶</button>
      </div>
    </div>
  </div>
  </div>
</div>
</body>
</html>