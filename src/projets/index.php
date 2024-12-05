<?php
$dsn = "mysql:host=mysql;port=3306;dbname=Website;charset=utf8mb4";
$dbPassword = getenv('MYSQL_ROOT_PASSWORD'); 
$dbUser = 'root';

$search = isset($_GET['search']) ? $_GET['search'] : '';

$services = [];
try {
    $pdo = new PDO($dsn, $dbUser, $dbPassword, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
    
    $query = "SELECT * FROM services WHERE titre LIKE :search OR sujet LIKE :search";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['search' => "%" . $search . "%"]);
    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . htmlspecialchars($e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../Style/style.css">
  <script type="text/javascript" src="../JS/dynamic.js" defer></script>
  <title>Webdev groupe 5</title>
  <link rel="shortcut icon" href="../photos/logo1.png">
</head>

<body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "./common/navbar.php";?>

  <div class="bigdiv">

  <h2>Rechercher un article</h2>
<form method="GET" class="search-bar">
    <input type="text" name="search" placeholder="Rechercher un article..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
    <button type="submit">Rechercher</button>
</form>

<h2>Articles trouvés</h2>
<?php

$search = isset($_GET['search']) ? trim($_GET['search']) : '';

$services = [];
if (!empty($search)) {
    $query = "SELECT titre, sujet FROM articles WHERE titre LIKE :search";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['search' => '%' . $search . '%']);
    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<?php if (count($services) > 0): ?>
    <ul class="service-list">
        <?php foreach ($services as $service): ?>
            <li class="service-item">
                <strong><?php echo htmlspecialchars($service['titre']); ?></strong><br>
                <?php echo nl2br(htmlspecialchars($service['sujet'])); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucun article trouvé pour la recherche "<?php echo htmlspecialchars($search); ?>"</p>
<?php endif; ?>

    </div>


  <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Analyse et manipulation de données</h2>
          <p>En utilisant des bibliothèques puissantes comme Pandas, NumPy et Matplotlib, nous créons des pipelines de données performants pour nettoyer, transformer et analyser des ensembles de données volumineux. Nous fournissons des visualisations claires et exploitables pour aider à la prise de décision et au reporting.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Développement logiciel</h2>
          <p>Nous concevons des scripts Python afin d'automatiser des tâches répétitives ou complexes, comme la gestion de fichiers, l'envoi d'emails ou l'intégration de systèmes. L'objectif est de rendre les processus plus rapides et moins sujets à des erreurs humaines. Ces outils sont facilement configurables et adaptables aux besoins spécifiques des utilisateurs.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Apprentissage automatique et IA</h2>
          <p>Nous modélisons des systèmes d'apprentissage automatique en utilisant des frameworks tels que TensorFlow, PyTorch, et Scikit-learn. Que ce soit pour des tâches de classification, régression ou analyse de séries temporelles, nous développons des modèles prédictifs avec des performances optimisées, en exploitant les dernières avancées en intelligence artificielle.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Gestion de bases de données </h2>
          <p>Nous utilisons SQLAlchemy pour faciliter l’interaction avec des bases de données relationnelles, en simplifiant la gestion des schémas et des requêtes SQL. Nous construisons des systèmes qui permettent une gestion fluide et performante des données tout en assurant leur intégrité et leur accessibilité.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Développement Web</h2>
          <p>Nous développons des applications Web robustes et performantes en utilisant des frameworks Python tels que Flask et Django. Cela inclut la création de sites Web dynamiques, ainsi que des API RESTful pour des interactions efficaces avec des bases de données ou des systèmes externes. Notre objectif est de livrer des applications rapides, scalables et sécurisées.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Programmation orientée objet (POO)</h2>
          <p>Nous appliquons les principes de la POO pour concevoir des solutions modulaires et réutilisables. L’utilisation des concepts de classes, héritage, polymorphisme et encapsulation nous permet de créer des architectures logicielles robustes et évolutives, adaptées à des projets de grande envergure.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Scripts pour la cybersécurité</h2>
          <p>Nous développons des scripts pour analyser des fichiers ou pour effectuer des simulations d'attaques dans le cadre de tests de sécurité. Ces outils sont utilisés pour automatiser des tâches de surveillance, de détection d'anomalies ou d'audit de systèmes, contribuant ainsi à renforcer la sécurité des infrastructures.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Applications scientifiques</h2>
          <p>Nous mettons en œuvre des solutions Python dans des domaines scientifiques, en utilisant des bibliothèques comme SciPy, SymPy, ou Matplotlib. Cela inclut des applications pour la modélisation numérique, la simulation de phénomènes physiques, et le traitement des données expérimentales, afin d'aider à la recherche et à l'innovation.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Développement d’applications complexes : logiciels d’entreprise et systèmes distribués (JEE, Spring)</h2>
          <p>Notre expertise repose sur la conception et le développement d’applications d’entreprise complexes en utilisant des technologies modernes telles que Java EE et Spring. Nous avons une solide expérience dans la création de systèmes distribués, permettant à des applications de fonctionner de manière transparente à travers des réseaux d’entreprises. Grâce à des pratiques de développement orientées services, nous assurons l’intégration et la scalabilité des solutions.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Programmation orientée objet avancée : gestion des interfaces, héritage, polymorphisme et encapsulation</h2>
          <p>Nous mettons en œuvre les principes fondamentaux de la programmation orientée objet (POO) avec un focus particulier sur les concepts avancés. La gestion des interfaces, l’héritage, le polymorphisme et l’encapsulation sont des éléments clés de nos développements, permettant d’écrire du code modulaire, flexible et facile à maintenir. Cette approche garantit une architecture évolutive et réutilisable.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Développement mobile Android : Création d’applications avec Android SDK</h2>
          <p>En tant que développeurs Android expérimentés, nous créons des applications mobiles de haute qualité en utilisant le SDK Android. Nous exploitons toutes les capacités de la plateforme pour concevoir des expériences utilisateurs fluides et intuitives, tout en optimisant les performances pour garantir une expérience optimale sur tous les appareils Android.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Développement de services Web : API RESTful avec des frameworks comme Spring Boot</h2>
          <p>Nous développons des services Web performants en utilisant Spring Boot pour concevoir des API RESTful efficaces. Grâce à une architecture légère et évolutive, nos services Web sont capables de gérer des volumes de requêtes importants tout en maintenant une grande simplicité d’intégration et d’utilisation pour les clients.</p>
        </div>
    </div>
<br>   
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Gestion de mémoire et optimisation : Utilisation efficace du garbage collector et des threads</h2>
          <p>La gestion de la mémoire est essentielle dans le développement de logiciels Java. Nous optimisons l’utilisation du garbage collector et gérons les threads de manière efficace pour éviter les fuites de mémoire et garantir des performances maximales, même pour des applications à fort trafic.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Utilisation de bases de données : connexion et manipulation via JDBC ou Hibernate</h2>
          <p>Nous intégrons des bases de données relationnelles dans nos applications Java en utilisant des technologies telles que JDBC et Hibernate. Grâce à ces outils, nous assurons une gestion optimale des données et une interaction fluide avec les systèmes de gestion de bases de données, en garantissant la cohérence et la performance des transactions.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Sécurisation des applications : gestion des sessions, des authentifications et des autorisations</h2>
          <p>La sécurité est une priorité dans tous nos projets. Nous mettons en place des mécanismes de gestion des sessions, d’authentification et d’autorisation robustes pour protéger les données des utilisateurs et garantir l'intégrité des applications. Cela inclut des techniques comme le chiffrement des données sensibles et l’utilisation d’outils comme Spring Security pour protéger les applications contre les attaques.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Applications multiplateformes : portabilité grâce au principe « Write Once, Run Anywhere »</h2>
          <p>Nous nous engageons à créer des applications multiplateformes en suivant le principe « Write Once, Run Anywhere ». Grâce à Java, qui permet une exécution homogène sur différentes plateformes, nous assurons la portabilité des solutions que nous développons, permettant à nos applications de fonctionner de manière transparente sur des environnements variés.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Développement front-end : création d’interfaces utilisateur dynamiques avec React, Angular ou Vue.js</h2>
          <p>Nous sommes experts dans le développement d’interfaces utilisateur modernes et interactives grâce à des frameworks populaires tels que React, Angular et Vue.js. Ces technologies nous permettent de construire des interfaces fluides et réactives, en assurant une expérience utilisateur optimale sur tous les types d'appareils.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Programmation asynchrone : gestion des promesses, Async/Await, et manipulation d’API REST</h2>
          <p>La gestion de la programmation asynchrone est essentielle pour offrir des applications réactives et performantes. Nous utilisons des techniques telles que les promesses, Async/Await, et la manipulation d’API REST pour garantir des interactions fluides avec les serveurs, tout en optimisant les performances de nos applications.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Développement Backend : création de serveurs et d’API avec Node.js et Express.js</h2>
          <p>Notre équipe crée des serveurs et des API puissants et scalables avec Node.js et Express.js. Grâce à la nature non bloquante de Node.js, nous construisons des applications backend performantes capables de gérer des milliers de requêtes simultanées tout en offrant une grande flexibilité.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Manipulation du DOM : dynamisation et personnalisation de pages HTML/CSS</h2>
          <p>Nous mettons à profit nos compétences en manipulation du DOM pour dynamiser des pages HTML et CSS, rendant ainsi les pages web interactives et personnalisées. Cette approche permet d'améliorer l'engagement utilisateur et de créer des expériences web plus intuitives et interactives.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Frameworks modernes : maîtrise de bibliothèques populaires comme jQuery ou Svelte</h2>
          <p>En plus des frameworks populaires comme React, Vue et Angular, nous maîtrisons également des bibliothèques comme jQuery pour une manipulation efficace du DOM et Svelte pour créer des applications ultra-rapides et légères. Ces outils nous permettent d’écrire du code concis et performant pour des interfaces réactives.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Applications temps réel : Utilisation de WebSockets et de Frameworks comme Socket.IO</h2>
          <p>Nous développons des applications en temps réel en utilisant des technologies comme WebSockets et des frameworks comme Socket.IO. Ces solutions permettent à nos applications de recevoir des données en temps réel, telles que des mises à jour de chat, des notifications ou des flux de données, garantissant une expérience utilisateur fluide et instantanée.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Tests unitaires et E2E : Utilisation d’outils comme Jest, Mocha ou Cypress</h2>
          <p>La qualité et la stabilité du code sont au cœur de nos préoccupations. Nous utilisons des outils de tests comme Jest, Mocha et Cypress pour effectuer des tests unitaires et de bout en bout (E2E). Cela nous permet de valider le bon fonctionnement de nos applications et de nous assurer qu’elles répondent aux attentes des utilisateurs sans régression.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Applications multiplateformes : développement mobile avec React Native et Electron pour des apps desktop</h2>
          <p>Nous nous spécialisons dans le développement d’applications multiplateformes, en utilisant des technologies comme React Native pour créer des applications mobiles et Electron pour des applications desktop. Grâce à ces outils, nous permettons à nos clients de cibler à la fois les plateformes mobiles et de bureau avec une base de code partagée.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Développement web dynamique : création de sites et applications interactifs avec HTML, CSS et PHP</h2>
          <p>Nous créons des sites et applications web dynamiques en combinant HTML, CSS et PHP. Cette approche nous permet de concevoir des expériences interactives et personnalisées pour les utilisateurs tout en garantissant une intégration fluide des fonctionnalités côté serveur pour répondre aux besoins spécifiques de nos clients.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Gestion de bases de données : Interaction avec MySQL, PostgreSQL ou SQLite via PDO ou MySQLi</h2>
          <p>Nous avons une solide expérience dans l’interaction avec des bases de données relationnelles telles que MySQL, PostgreSQL et SQLite. Grâce à des outils comme PDO et MySQLi, nous nous assurons que les données sont manipulées de manière efficace et sécurisée, garantissant l'intégrité des informations tout en optimisant les performances.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Utilisation de frameworks : création de projets professionnels avec Laravel, Symfony ou CodeIgniter</h2>
          <p>Nous utilisons des frameworks PHP tels que Laravel, Symfony et CodeIgniter pour créer des applications web professionnelles et évolutives. Ces frameworks nous permettent d’appliquer des bonnes pratiques de développement et de gagner en productivité, tout en garantissant une architecture bien structurée et maintenable.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Création de CMS : personnalisation ou développement sur des plateformes comme WordPress, Joomla ou Drupal</h2>
          <p>Notre équipe est spécialisée dans la personnalisation et le développement de systèmes de gestion de contenu (CMS) comme WordPress, Joomla et Drupal. Nous créons des sites web sur mesure, que ce soit pour des blogs, des sites d’e-commerce ou des portails d'entreprise, en tirant parti des puissantes fonctionnalités de ces plateformes pour répondre précisément aux besoins des clients.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Gestion des sessions et des cookies : mise en œuvre de systèmes d’authentification et de suivi des utilisateurs</h2>
          <p>La gestion des sessions et des cookies est essentielle pour assurer une expérience utilisateur fluide et sécurisée. Nous mettons en œuvre des systèmes d’authentification robustes, y compris l’utilisation de tokens et la gestion des autorisations, tout en garantissant un suivi sécurisé des utilisateurs grâce à des pratiques modernes de gestion de sessions.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Sécurité Web : prévention des injections SQL, protection contre les attaques XSS et CSRF</h2>
          <p>La sécurité est une priorité pour nous. Nous appliquons des techniques avancées pour prévenir les attaques courantes telles que les injections SQL, les attaques XSS (Cross-Site Scripting) et CSRF (Cross-Site Request Forgery). Nous utilisons des mécanismes de validation et de filtrage des données d'entrée, ainsi que des stratégies de sécurisation des formulaires et des cookies pour protéger les utilisateurs et leurs données.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Développement backend : Création d’API REST et d’applications côté serveur</h2>
          <p>Nous concevons et développons des API REST robustes avec PHP, permettant une communication fluide entre le front-end et le back-end. Nos applications côté serveur sont scalables, performantes et bien sécurisées, offrant ainsi des solutions backend efficaces pour des projets complexes.</p>
        </div>
    </div>
<br>
    <div class="f-container">
        <div class="container-Team">
          <h2 class="container" id="team">Optimisation des performances : utilisation de caches (APCu, Memcached) et configuration serveur</h2>
          <p>L’optimisation des performances est cruciale pour nous. Nous utilisons des solutions de mise en cache telles qu’APCu et Memcached pour réduire la charge sur les serveurs et améliorer la vitesse de traitement des données. De plus, nous nous assurons que la configuration du serveur est optimale, afin d’offrir des performances maximales et une expérience utilisateur fluide.</p>
        </div>
    </div>
<br>
</div>
</body>
</html>