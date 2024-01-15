<?php 

$podcasts = [   // nom du grand tableau puis chaque sous tableau a 4 entrées

    [
        "titre" => 'Meta talk',
        "date" => '2023-12-15 07:07:07',
        "audio" => './Ressources/pod1.m4a',
        "texte" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quos omnis repudiandae eum quam mollitia quae inventore iste? Quo labore aliquam iste optio, quam at eum doloribus. Quae, neque facilis.',
    ],
    
    [
        "titre" => 'Kenshiro',
        "date" => '2023-12-16 07:07:07',
        "audio" => './Ressources/pod22.m4a',
        "texte" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quos omnis repudiandae eum quam mollitia quae inventore iste? Quo labore aliquam iste optio, quam at eum doloribus. Quae, neque facilis.',
    ],
    
    [
        "titre" => 'Max L in shape',
        "date" => '2023-12-17 07:07:07',
        "audio" => './Ressources/pod3.m4a',
        "texte" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quos omnis repudiandae eum quam mollitia quae inventore iste? Quo labore aliquam iste optio, quam at eum doloribus. Quae, neque facilis.',
    ],
    
    [
        "titre" => 'Harry Podbeur',
        "date" => '2023-12-18 07:07:07',
        "audio" => './Ressources/pod4.m4a',
        "texte" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quos omnis repudiandae eum quam mollitia quae inventore iste? Quo labore aliquam iste optio, quam at eum doloribus. Quae, neque facilis.',
    ],
    
    [
        "titre" => 'Bankai',
        "date" => '2023-12-19 07:07:07',
        "audio" => './Ressources/pod5.m4a',
        "texte" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quos omnis repudiandae eum quam mollitia quae inventore iste? Quo labore aliquam iste optio, quam at eum doloribus. Quae, neque facilis.',
    ],
    
    [
        "titre" => 'MATHIS !',
        "date" => '2023-12-20 07:07:07',
        "audio" => './Ressources/pod6.m4a',
        "texte" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quos omnis repudiandae eum quam mollitia quae inventore iste? Quo labore aliquam iste optio, quam at eum doloribus. Quae, neque facilis.',
    ],
    
    [
        "titre" => 'KIKI KIKI',
        "date" => '2023-12-21 07:07:07',
        "audio" => './Ressources/pod7.m4a',
        "texte" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quos omnis repudiandae eum quam mollitia quae inventore iste? Quo labore aliquam iste optio, quam at eum doloribus. Quae, neque facilis.',
    ],
    
    [
        "titre" => 'Bon dev',
        "date" => '2023-12-22 07:07:07',
        "audio" => './Ressources/pod8.m4a',
        "texte" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quos omnis repudiandae eum quam mollitia quae inventore iste? Quo labore aliquam iste optio, quam at eum doloribus. Quae, neque facilis.',
    ],
    
    [
        "titre" => 'Le Blanco',
        "date" => '2023-12-23 07:07:07',
        "audio" => './Ressources/pod9.m4a',
        "texte" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quos omnis repudiandae eum quam mollitia quae inventore iste? Quo labore aliquam iste optio, quam at eum doloribus. Quae, neque facilis.',
    ],
    
    [
        "titre" => 'Marius',
        "date" => '2023-12-24 07:07:07',
        "audio" => './Ressources/pod10.m4a',
        "texte" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quos omnis repudiandae eum quam mollitia quae inventore iste? Quo labore aliquam iste optio, quam at eum doloribus. Quae, neque facilis.',
    ],

];

/* $pdo = new PDO('mysql:host=localhost;dbname=podcast', 'root', '');

foreach ($podcasts as $i) {

    // Après le INSERT INTO, c'est la table de la BDD avec le nom des champs
    // Après le VALUES, c'est un nom qu'on leur donne, celui qu'on veut.
    // Le premier, c'est le nom qu'on lui a donné dans VALUES, le deuxième correspond à la variable qu'on va chercher. Si on fait un foreach, ça sera le $i.

    $query = $pdo->prepare('INSERT INTO podcasts (name,descri,excerpt,link,created_at) VALUES (:name, :descri, :excerpt, :link, :created_at)');
    $query->bindValue('name', $i['titre'], PDO::PARAM_STR);
    $query->bindValue('descri', $i['texte'], PDO::PARAM_STR);
    $query->bindValue('excerpt', substr($i['texte'], 0, 300), PDO::PARAM_STR);
    $query->bindValue('link', $i['audio'], PDO::PARAM_STR);
    $query->bindValue('created_at', $i['date'], PDO::PARAM_STR);
    $query->execute();

}  

// EN COMMENTAIRE CAR ON UPLOAD UNE SEULE FOIS SINON LES PODCASTS SE MULTIPLIENT

?> */