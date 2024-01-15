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

// Ajout des commentaires
function createComments() {

    if (! empty($_POST)) {
        $errors = [];

        // Validation du formulaire

        if (! empty($_POST)) {
            $errors = [];

        $pdo = getPDO('mysql:host=localhost;dbname=podcast', 'root', '');

        // Après le INSERT INTO, c'est la table de la BDD avec le nom des champs
        // Après le VALUES, c'est un nom qu'on leur donne, celui qu'on veut.
        // Le premier, c'est le nom qu'on lui a donné dans VALUES, le deuxième correspond à la variable qu'on va chercher. Si on fait un foreach, ça sera le $i.
        $query = $pdo->prepare('INSERT INTO comments (content) VALUES (:content)');

        $query->bindValue('content', $_POST['content'], PDO::PARAM_STR);
        $query->execute();

        }
    }
}

function getComments() { 

    $pdo = getPDO('mysql:host=localhost;dbname=podcast', 'root', '');

    $query = $pdo->query('SELECT * FROM comments', PDO::FETCH_ASSOC);
    $podcasts = $query -> fetchAll();
    return $podcasts;
}


?>