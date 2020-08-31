<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>Test POO</title>

    <?php
    require('model/Film1.class.php');
    require('model/Film2.class.php');
    ?>

  </head>

  <body>

<p>Exercice n° 1</p>
<?php
    // 1ère méthode:
    $jurassicPark = new Film1("1", "Jurassic Park", "Steven SPIELBER", "1993");
    echo $jurassicPark->getNom1() . " a été réalisé par " . $jurassicPark->getRealisateur1() . " en " . $jurassicPark->getAnnee1() . ". </br>";

    $terminator2 = new Film1("2", "Terminator 2 : Le Jugement dernier", "James CAMERON", "1991");
    echo $terminator2->getNom1() . " a été réalisé par " . $terminator2->getRealisateur1() . " en " . $terminator2->getAnnee1() . ". </br>";

    // 2ème méthode:
    $avatar = new Film2();
    $avatar->setID2('3');
    $avatar->setNom2('Avatar');
    $avatar->setRealisateur2('James CAMERON');
    $avatar->setAnnee2('2009');
    echo $avatar->getNom2() . " a été réalisé par " . $avatar->getRealisateur2() . " en " . $avatar->getAnnee2() . ". </br>";
?>

<p>Exercice n° 2</p>
<?php


?>


  </body>
</html>
