<?php

include "functions.php";
$podcast = getPodcast();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYBER PUNKCAST 2077</title>
    <link rel="stylesheet" href="./podcast.css">
</head>
<body>
    <!-- la classica balise include -->
    <?php 
    // include 'tableau.php';
    // condition if qui chope la valeur de l'id dans l'url
    // if ($_GET['id'] <= 9) {  
    ?>
    <!-- si l'id est bonne on charge la page -->
<div id="titreP">
        <h1>CYBER PUNKCAST 2077</h1>
    </div>
    <div id="date">
        <!-- on rempli les div en dynamique avec les valeurs du tableau chopées par $_GET ID -->
        <?php
            echo $podcast['created_at'];
        ?>
    </div>
    <div id="titre">
        <?php
            echo $podcast['name'];
        ?>
    </div>
    <div id="audio">
        <audio controls>
            <source src="<?php echo $podcast['link'];?>" />
        </audio>
    </div>
    <div id="texte">
        <?php
            echo $podcast['descri'];
        ?>
    </div>
        <!-- sinon on envoie sur page 404 customisée avec header -->
    <?php
    //} else {
      //  header('location: http://php-basics.test/notfound.html');
    // }
    ?>
    
</body>
</html>
