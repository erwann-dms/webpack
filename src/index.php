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
    <div class="nav">
      <img src="photos/logo2.png" alt="logo" style="width: 70px; height: 70px; margin-bottom: 20px;">
      <a class="nav-link" href="#team"><button class="button-nav" role="button" style="text-decoration: none; color: inherit;">Team</button></a>
      <a class="nav-link" href="#python"><button class="button-nav" role="button" style="text-decoration: none; color: inherit;">Python</button></a>
      <a class="nav-link" href="#java"><button class="button-nav" role="button" style="text-decoration: none; color: inherit;">Java</button></a>
      <a class="nav-link" href="#js"><button class="button-nav" role="button" style="text-decoration: none; color: inherit;">JS</button></a>
      <a class="nav-link" href="#php"><button class="button-nav" role="button" style="text-decoration: none; color: inherit;">PHP</button></a>
      <div class="nightmode-toggle">
          <label class="switch-label">
            <input type="checkbox" class="checkbox" id="lightmode" onchange="checklightmode()">
            <span class="slider"></span>
          </label>
      </div>
    </div>
  </nav>

  <div class="bigdiv">
  <div class="f-container">
    <a href="team/index.html" style="color: inherit;text-decoration: none;">
      <div class="container-Team">
        <h2 class="container" id="team">Team</h2>
        <p>Présentation de la Team: La team se compose de 4 personnes Merwan.C ,Quentin.A ,Paul.B ,Erwann.D . Nous sommes une équipe de développeurs fullstack très polyvalente. Nous avons des connaissances dans de multiples langages de programmation ainsi que des connaissances en DevSecOps ,Pentest ,SIR ,OSINT .Nous proposons nos services autant aux entreprises qu’aux particuliers.</p>
      </div>
    </a>
  </div>

<div class="f-container2"> 
      <div class="container-Team">
        <h2 class="container" id="team">Nos compétences</h2>
      </div>
    </a>
  </div>

  <div class="grosse-flex">
    <a href="languages/python/index.html" class="flex-container">
      <div class="container-Python">
        <h2 class="container" id="python">Python</h2>
        <video loop autoplay muted class="video"><source src="photos/python.mp4" type="video/mp4"/></video>      
        <p> Python est un langage de programmation polyvalent, interprété et orienté objet, créé par Guido Van Rossum en 1991. Connu pour sa simplicité et sa lisibilité, il est particulièrement adapté aux débutants tout en offrant des fonctionnalités puissantes pour les développeurs expérimentés.</p>
        <br>
        <p>Nous avons pu faire l’expérience de pratiquer un projet avec Python en DevSecOps.</p>
      </div>
    </a>
  
    <a href="languages/java/index.html" class="flex-container">
      <div class="container-Java">
        <h2 class="container" id="java">Java</h2>
        <video loop autoplay muted class="video"><source src="photos/Java.mp4" type="video/mp4"/></video>
        <p>Java est un langage de programmation orienté objet, créé par Sun Microsystems en 1995 et désormais géré par Oracle. Il est reconnu pour sa portabilité, sa robustesse et sa capacité à créer des applications multiplateformes.</p> 
        <br>
        <p>avons pu pratiquer du Java en codant des jeux en tant que projets indépendants.</p>
      </div>
    </a>

    <a href="languages/javascript/index.html" class="flex-container">
      <div class="container-JS">
        <h2 class="container" id="js">JS</h2>
        <video loop autoplay muted class="video"><source src="photos/js.mp4" type="video/mp4"/></video>
        <p>JavaScript est un langage de programmation léger, interprété et orienté principalement vers le développement Web. Créé en 1995 par Brendan Eich, il est aujourd’hui un des piliers du Web moderne grâce à sa capacité à rendre les pages interactives. </p>
        <br>
        <p>Nous avons pu l’utiliser lors de création de sites. Nous l’avons majoritairement utilisé pour ajouter des objets réactifs comme des bannières apparaissantes et disparaissantes en montant/descendant sur la page ou en cliquant sur un autre lien afin de donner une illusion d’une meilleure fluidité.</p>
      </div>
    </a>

    

    <a href="languages/PHP/index.html" class="flex-container">
      <div class="container-PHP">
        <h2 class="container" id="php">PHP</h2>
        <video loop autoplay muted class="video"><source src="photos/php.mp4" type="video/mp4"/></video>
        <p>PHP (Hypertext Preprocessor) est un langage de programmation côté serveur, créé en 1994 par Rasmus Lerdorf. Conçu principalement pour le développement Web, il est utilisé pour générer des pages dynamiques et interactives. </p>
        <br>
        <p>Nous avons pu mettre en pratique des connaissances de PHP en travaillant sur des backdoors pour du Web et du logiciel.</p>
      </div>
    </a>
  </div>
</div>

</body>
</html>
