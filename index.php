<?php

// include functions et appels de celles ci
include 'functions.php';
// include 'tableau.php';     on utilise le tableau une fois pour générer les podcasts

$pdo = getPDO('mysql:host=localhost;dbname=podcast', 'root', '');

$podcasts = getPodcasts($pdo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcasts</title>
    <script src="./index.js" defer></script>
    <link rel="stylesheet" href="./index.css">   
</head>
<body>
    <!-- titre principal -->
    <h1 id="titre"> WELCOME TO CYBER PUNKCASTS 2077</h1>
    <!-- blocs podcasts, 1 bloc = 1 podcast -->
    <?php foreach ($podcasts as $podcast): ?>
    <div class="pod">
        <!-- balises php intercalées dans le html pour remplir le contenu en dynamique via le tableau -->
        <p class="date"><?php echo $podcast['updated_at']; ?></p>
        <a href="podcast.php?id=<?=$podcast['id']?>"><h3 class="titre"><?php echo $podcast['name']; ?></h3></a>
        <p><?php echo $podcast['descri']; ?></p>
            <div class="ecouter">
                <audio controls src=<?php echo $podcast['link'] ?> /audio>
            </div>
    </div> 
    <?php endforeach; ?> 
    <!-- ANCIENNE VERSION PODCAST MANUELS -->
        
</body>
</html>