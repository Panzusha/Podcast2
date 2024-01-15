<?php

function getPDO($dsn, $userName, $mdp) {

    $pdo = new PDO($dsn, $userName, $mdp);
    return $pdo;
}

// Appel des podcasts pour remplir la page index.php
function getPodcasts($pdo) { 

    $query = $pdo->query('SELECT * FROM podcasts', PDO::FETCH_ASSOC);
    $podcasts = $query -> fetchAll();
    return $podcasts;
}

// Appel d'un seul podcast pour remplir la page podcast.php
function getPodcast() {

    $pdo = getPDO('mysql:host=localhost;dbname=podcast', 'root', '');
    $query = $pdo->prepare('SELECT id, name, descri, link, created_at FROM podcasts WHERE id=?');

    $query->execute([
        $_GET['id'],
    ]);

    $podcast = $query->fetch(PDO::FETCH_ASSOC);
    return $podcast;
}

?>