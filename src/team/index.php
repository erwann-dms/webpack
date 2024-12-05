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
                  <div class="like-wrapper">
  <input class="check" type="checkbox" id="like-toggle" />
  <label class="container" for="like-toggle">
    <svg
      viewBox="0 0 512 512"
      xmlns="http://www.w3.org/2000/svg"
      class="icon inactive"
    >
      <path
        d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"
      ></path>
    </svg>
    <svg
      viewBox="0 0 512 512"
      xmlns="http://www.w3.org/2000/svg"
      class="icon active"
    >
      <path
        d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"
      ></path>
    </svg>
    <div class="checkmark"></div>
    <span class="like-text">Like</span>
  </label>
</div>
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
                  <div class="like-wrapper">
  <input class="check" type="checkbox" id="like-toggle" />
  <label class="container" for="like-toggle">
    <svg
      viewBox="0 0 512 512"
      xmlns="http://www.w3.org/2000/svg"
      class="icon inactive"
    >
      <path
        d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"
      ></path>
    </svg>
    <svg
      viewBox="0 0 512 512"
      xmlns="http://www.w3.org/2000/svg"
      class="icon active"
    >
      <path
        d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"
      ></path>
    </svg>
    <div class="checkmark"></div>
    <span class="like-text">Like</span>
  </label>
</div>

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
                  <div class="like-wrapper">
  <input class="check" type="checkbox" id="like-toggle" />
  <label class="container" for="like-toggle">
    <svg
      viewBox="0 0 512 512"
      xmlns="http://www.w3.org/2000/svg"
      class="icon inactive"
    >
      <path
        d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"
      ></path>
    </svg>
    <svg
      viewBox="0 0 512 512"
      xmlns="http://www.w3.org/2000/svg"
      class="icon active"
    >
      <path
        d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"
      ></path>
    </svg>
    <div class="checkmark"></div>
    <span class="like-text">Like</span>
  </label>
</div>

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
                       
              
              <div class="photo-container"><p style="color: blue;">🪶></p></div>
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
                  <div class="like-wrapper">
  <input class="check" type="checkbox" id="like-toggle" />
  <label class="container" for="like-toggle">
    <svg
      viewBox="0 0 512 512"
      xmlns="http://www.w3.org/2000/svg"
      class="icon inactive"
    >
      <path
        d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"
      ></path>
    </svg>
    <svg
      viewBox="0 0 512 512"
      xmlns="http://www.w3.org/2000/svg"
      class="icon active"
    >
      <path
        d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"
      ></path>
    </svg>
    <div class="checkmark"></div>
    <span class="like-text">Like</span>
  </label>
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
