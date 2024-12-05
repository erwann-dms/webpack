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
            
              <div class="photo-container" style="border: none; overflow: visible;"><img src="../photos/logo1.png"></div>
              <div class="name">CodeTricks</div>
              <img src="<?php echo $lightmode == 'true' ? '../photos/gif/team_clair.gif' : '../photos/gif/team_sombre.gif'; ?>" alt="Python GIF" class="team-gif" style="height:auto;width:auto">
              <div class="bio">
              <p>Voici notre equipe CodeTricks ! 
              </p>
              </div>
              </div>
          </div>
          <div class="carousel-item" alt="Slide 2">
            <div class="bd-mrwn">
            
              <div class="photo-container"><img src="../photos/Ambqpic.jpg" alt=""></div>
                <div class="name">Quentin AMBROZIC</div>
                  <div class="bio">
                    <p>
                    Je m'appelle Quentin, j'ai 18 ans et je suis passionné par l'informatique et la cybersécurité. Après avoir assemblé mon propre PC et appris Python en autodidacte, j'ai découvert la cybersécurité lors d’une porte ouverte en 2022. J'ai ensuite intégré la Guardia Cybersecurity School, où j'ai approfondi mes compétences en DevSecOps, Pentesting, SIR et OSINT. Je cherche aujourd'hui à mettre mes compétences en sécurité informatique au service d'une entreprise tout en continuant à me perfectionner.

                    </p>
                  </div>
                  <div class="buttons">
                    <a href="https://www.instagram.com//qntn.amb" class="button" target="_blank">
                      <i class="fab fa-instagram"></i> Instagram
                    </a>
                    <a href="https://www.linkedin.com/in/quentin-ambrozic-728301301/" class="button" target="_blank">
                      <i class="fab fa-linkedin"></i> linkedin
                    </a>
                    <a href="https://github.com/AmbrozicQuentin" class="button" target="_blank">
                      <i class="fab fa-github"></i> GitHub
                    </a>
                  </div>
                  <br>
                </div>
              </div>
          <div class="carousel-item" alt="Slide 3">
            <div class="bd-mrwn">

              <div class="snowflakes">
                  <div class="snowflake" style="left: 10%; animation-duration: 10s; animation-delay: 0s;">❄️</div>
                  <div class="snowflake" style="left: 20%; animation-duration: 12s; animation-delay: -2s;">❄️</div>
                  <div class="snowflake" style="left: 30%; animation-duration: 14s; animation-delay: -4s;">❄️</div>
                  <div class="snowflake" style="left: 40%; animation-duration: 9s; animation-delay: -1s;">❄️</div>
                  <div class="snowflake" style="left: 50%; animation-duration: 15s; animation-delay: -3s;">❄️</div>
                  <div class="snowflake" style="left: 60%; animation-duration: 13s; animation-delay: -5s;">❄️</div>
                  <div class="snowflake" style="left: 70%; animation-duration: 11s; animation-delay: -6s;">❄️</div>
                  <div class="snowflake" style="left: 80%; animation-duration: 16s; animation-delay: -7s;">❄️</div>
                  <div class="snowflake" style="left: 90%; animation-duration: 17s; animation-delay: -8s;">❄️</div>
              </div>
          
              <div class="photo-container">
                  <img src="../photos/merwan.jpg" alt="ma photo">
              </div>
          
              <div class="name">
                  Merwan CHEHBI
              </div>
          
              <div class="bio">
                  <p>Je m’appelle Merwan, j’ai 18 ans et je suis originaire de Vienne, dans l'agglomération lyonnaise.
                      Passionné par l’informatique depuis de nombreuses années, je me suis intéressé il y a maintenant 2 ans à la cybersécurité.
                      Parmis mes compétences premières dans le domaine de la cybersécurité : </br>
                      -Niveau Intermédiaire en Cryptanalyse, stéganographie et en Pentest </br>
                      -Niveau Débutant en Web, Programmation , Forensic et SOC
                      </p>
              </div>
          
              <div class="buttons">
                  <a href="https://www.linkedin.com/in/mchehbi/" class="button" target="_blank">
                      <i class="fab fa-linkedin"></i> LinkedIn
                  </a>
                  <a href="https://github.com/mrwn111" class="button" target="_blank">
                      <i class="fab fa-github"></i> GitHub
                  </a>
                  <a href="/photos/cv.pdf" class="button" target="_blank" download>
                      <i class="fas fa-file-alt"></i> Mon CV
                  </a>
              </div>
          
              <br>
                  

            </div>
          </div>
          <div class="carousel-item" alt="Slide 4">
            <div class="bd-mrwn">
              <div class="photo-container">
              <img src="../photos/Paul.jpg" alt="ma photo">
              </div>
              <div class="name">Paul BURGNIARD</div>
              <div class="bio">
              <p>
                your bio
              </p>
              </div>
              <div class="buttons">
              <a href="https://www.instagram.com//qntn.amb" class="button" target="_blank">
                <i class="fab fa-instagram"></i> Instagram
              </a>
              <a href="https://www.linkedin.com/in/quentin-ambrozic-728301301/" class="button" target="_blank">
                <i class="fab fa-linkedin"></i> linkedin
              </a>
              <a href="https://github.com/AmbrozicQuentin" class="button" target="_blank">
                <i class="fab fa-github"></i> GitHub
              </a>
              </div>

              <br>
                  

              </div>
          </div>
          <div class="carousel-item" alt="Slide 5">
            <div class="bd-mrwn">
            
              <div class="numbers">
                <div class="line">
                  <div class="number" style="left: 10%;">1</div>
                  <div class="number" style="left: 20%;">0</div>
                  <div class="number" style="left: 30%;">1</div>
                  <div class="number" style="left: 40%;">0</div>
                  <div class="number" style="left: 50%;">1</div>
                  <div class="number" style="left: 60%;">0</div>
                  <div class="number" style="left: 70%;">1</div>
                  <div class="number" style="left: 80%;">0</div>
                  <div class="number" style="left: 90%;">1</div>
                </div>
                <div class="line">
                  <div class="number" style="left: 15%;">0</div>
                  <div class="number" style="left: 25%;">1</div>
                  <div class="number" style="left: 35%;">0</div>
                  <div class="number" style="left: 45%;">1</div>
                  <div class="number" style="left: 55%;">1</div>
                  <div class="number" style="left: 65%;">0</div>
                  <div class="number" style="left: 75%;">1</div>
                  <div class="number" style="left: 85%;">0</div>
                  <div class="number" style="left: 95%;">1</div>
                </div>
                <div class="line">
                  <div class="number" style="left: 10%;">1</div>
                  <div class="number" style="left: 20%;">0</div>
                  <div class="number" style="left: 30%;">1</div>
                  <div class="number" style="left: 40%;">0</div>
                  <div class="number" style="left: 50%;">1</div>
                  <div class="number" style="left: 60%;">0</div>
                  <div class="number" style="left: 70%;">1</div>
                  <div class="number" style="left: 80%;">0</div>
                  <div class="number" style="left: 90%;">1</div>
                </div>
                <div class="line">
                  <div class="number" style="left: 15%;">0</div>
                  <div class="number" style="left: 25%;">1</div>
                  <div class="number" style="left: 35%;">0</div>
                  <div class="number" style="left: 45%;">1</div>
                  <div class="number" style="left: 55%;">1</div>
                  <div class="number" style="left: 65%;">0</div>
                  <div class="number" style="left: 75%;">1</div>
                  <div class="number" style="left: 85%;">0</div>
                  <div class="number" style="left: 95%;">1</div>
                </div>
              </div>
                       
              
              <div class="photo-container"><img src="../photos/erw 1.png" alt="ma photo"></div>
              <div class="name">Erwann DUMAS</div>
              <div class="nickname">Shrekye</div>
              <div class="bio">
                <p>

Je m’appelle Erwann, j’ai 18 ans. Je suis passionné par l’informatique.
Je me suis intéressé à la cybersécurité il y a 2 ans. J'ai pratiqué sur Root Me, TryHackMe et Hack The Box.
Et réalisé divers projets durant ma première année de Bachelor en cybersécurité à Guardia.
Mon objectif est de faire carrière dans ce domaine et de contribuer à un monde plus sûr.
J'ai suivi divers MOOC et formations, notamment sur OWASP. Voici mes compétences : 
                  <br>
                  -Niveau Intermédiaire en Cryptanalyse, Stéganographie et Pentest, Programmation, Web
                  <br>
                  -Niveau Débutant en Forensic et SOC
                </p>
              </div>
              <div class="buttons">
                <a href="www.linkedin.com/in/erwann-dumas-96643132b" class="button" target="_blank">
                  <i class="fab fa-linkedin"></i> LinkedIn
              </a>
              <a href="https://github.com/erwann-dms" class="button" target="_blank">
                  <i class="fab fa-github"></i> GitHub
              </a>
              </div>

              <br>
                  

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
