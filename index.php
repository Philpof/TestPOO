<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>Test POO</title>

  </head>

  <body>

<p>Exercice n° 1</p>
<?php
require('model/Film1.class.php');
require('model/Film2.class.php');
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
<form action='index.php' method='post'>
    <label for='chiffreA'>Chiffre A : </label>
    <input type='text' name='chiffreA' id='chiffreA'><br>
    <label for='chiffreB'>Chiffre B :</label>
    <input type='text' name='chiffreB' id='chiffreB'><br>
    <input type='submit' value='Envoyer'>
</form>
<?php
    require('model/Calculatrice.class.php');
    $calcul = Calculatrice::addition($_POST['chiffreA'], $_POST['chiffreB']);
    echo "Chiffre A = " . $_POST['chiffreA'] . " & Chiffre B = " . $_POST['chiffreB'] . "<br>";
    echo "Addition : " . $calcul . "<br>";
    echo "Soustraction : " . $calcul->soustraction(). "<br>";
    echo "Multiplication : " . $calcul->multiplication(). "<br>";
    echo "Division : " . $calcul->division(). "<br>";
    echo "Modulo : " . $calcul->modulo(). "<br>";
?>


  </body>
</html>
