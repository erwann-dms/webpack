<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="Style/style.css">
  <script type="text/javascript" src="JS/dynamic.js" defer></script>
  <title>Webdev groupe 5</title>
  <link rel="shortcut icon" href="photos/logo1.png">
</head>

<body>
  <nav>
    <?php
      $lightmode = isset($_COOKIE['lightmode']) ? $_COOKIE['lightmode'] : 'false';
    ?>
    <div class="nav">
      <img src="/photos/logo2.png" alt="logo" style="width: 70px; height: 70px; margin-bottom: 20px;">
      <a class="nav-link" href="#team"><button class="button-nav" role="button" style="text-decoration: none; color: inherit;">Team</button></a>
      <a class="nav-link" href="#python"><button class="button-nav" role="button" style="text-decoration: none; color: inherit;">Python</button></a>
      <a class="nav-link" href="#java"><button class="button-nav" role="button" style="text-decoration: none; color: inherit;">Java</button></a>
      <a class="nav-link" href="#js"><button class="button-nav" role="button" style="text-decoration: none; color: inherit;">JS</button></a>
      <a class="nav-link" href="#php"><button class="button-nav" role="button" style="text-decoration: none; color: inherit;">PHP</button></a>
      <div class="nightmode-toggle">
          <label class="switch-label">
            <input type="checkbox" class="checkbox" id="lightmode" onchange="checklightmode()" <?php echo ($lightmode == 'true') ? 'checked' : ''; ?>>
            <span class="slider"></span>
          </label>
      </div>
      <a class="nav-link" href="/login/index.php"><button class="button-nav" role="button" style="text-decoration: none; color: inherit;">Login</button></a>
    </div>
  </nav>

  <div class="bigdiv">
    <div class="f-container">
      <a href="/team" style="color: inherit;text-decoration: none;">
        <div class="container-Team">
          <h2 class="container" id="team">Team</h2>
          <p>Présentation de la Team: La team se compose de 4 personnes Merwan.C ,Quentin.A ,Paul.B ,Erwann.D . Nous sommes une équipe de développeurs fullstack très polyvalente. Nous avons des connaissances dans de multiples langages de programmation ainsi que des connaissances en DevSecOps ,Pentest ,SIR ,OSINT .Nous proposons nos services autant aux entreprises qu’aux particuliers.</p>
        </div>
      </a>
    </div>

    <div class="f-container2">
      <div class="container-Team">
        <h2 class="container" id="team">Nos compétences</h2>
        <br>
        <p>Voici les différents langages de programmations que nous maitrisons</p>
      </div>
    </div>

    <div class="grosse-flex">
  <a href="/languages/python" class="flex-container">
    <div class="container-Python">
      <h2 class="container" id="python">Python</h2>
      <img src="<?php echo $lightmode == 'true' ? '../photos/gif/python clair.gif' : '../photos/gif/python sombre.gif'; ?>" alt="Python GIF" class="python-gif">      
      <p>Python est un langage de programmation polyvalent...</p>
      <br>
      <p>Nous avons pu faire l’expérience de pratiquer un projet avec Python en DevSecOps.</p>
    </div>
  </a>

  <a href="./languages/java" class="flex-container">
    <div class="container-Java">
      <h2 class="container" id="java">Java</h2>
      <img src="<?php echo $lightmode == 'true' ? '../photos/gif/Java clair.gif' : '../photos/gif/Java sombre.gif'; ?>" alt="Java GIF" class="java-gif">
      <p>Java est un langage de programmation orienté objet...</p> 
      <br>
      <p>Nous avons pu pratiquer du Java en codant des jeux...</p>
    </div>
  </a>

  <a href="./languages/javascript" class="flex-container">
    <div class="container-JS">
      <h2 class="container" id="js">JS</h2>
      <img src="<?php echo $lightmode == 'true' ? '../photos/gif/js clair.gif' : '../photos/gif/js sombre.gif'; ?>" alt="JS GIF" class="js-gif">
      <p>JavaScript est un langage de programmation léger...</p>
      <br>
      <p>Nous avons pu l’utiliser lors de création de sites...</p>
    </div>
  </a>

  <a href="./languages/PHP" class="flex-container">
    <div class="container-PHP">
      <h2 class="container" id="php">PHP</h2>
      <img src="<?php echo $lightmode == 'true' ? '../photos/gif/php clair.gif' : '../photos/gif/php sombre.gif'; ?>" alt="PHP GIF" class="php-gif">
      <p>PHP (Hypertext Preprocessor) est un langage...</p>
      <br>
      <p>Nous avons pu mettre en pratique des connaissances de PHP...</p>
    </div>
  </a>
</div>
</body>
</html>
