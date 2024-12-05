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
    
    // Requête modifiée pour chercher uniquement dans les colonnes existantes
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
    <div class="center">
  <h2>Rechercher un article</h2>
  <form method="GET" class="search-bar">
      <input type="text" name="search" placeholder="Rechercher un article..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
      <button class="back-button" type="submit">Rechercher</button>
  </form>

  <h2>Articles trouvés</h2>
</div>
  <br>
  <?php if (count($services) > 0): ?>
    <div class="flex">
        <?php foreach ($services as $service): ?>
            <div class="f-container">
                <h2 class="container" id="team"><?php echo htmlspecialchars($service['titre']); ?></h2>
                <p><?php echo nl2br(htmlspecialchars($service['sujet'])); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
        </div>
<?php else: ?>
    <div class="flex">
    <div class="f-container">
        <div class="container-Team">
            <h2 class="container" id="team">Aucun article trouvé</h2>
            <p>Aucun article trouvé pour la recherche "<?php echo htmlspecialchars($search); ?>"</p>
        </div>
    </div>
</div>
<?php endif; ?>
    </div>
</body>
</html>