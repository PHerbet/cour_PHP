<?php
    require './maison.php';
    $maison = new Maison('la Résidence principale', 15, 7);
    $maison->nbr_etage = 2;
    var_dump($maison);
    $maison->surface();
    echo '<br>';
    $appartement = new Maison('l\'Appartement des vacances', 9, 7);
    var_dump($appartement);
    $appartement->surface();
    echo '<br>';
    $maison2 = new Maison('la maison des voisins', 12, 7);
    $maison2->nbr_etage = 0;
    var_dump($maison2);
    $maison2->surface();
    echo '<br>';
    echo '<br>';
    echo 'exercice sur les voitures <br>';
    require './vehicule.php';
    $voiture = new Vehicule("Mercedes CLK", 4, 250);
    var_dump($voiture);
    echo "<br>";
    $moto = new Vehicule("Honda CBR", 2, 280);
    var_dump($moto);
    echo "<br>";
    echo '<br>';
    $voiture->detect();
    $moto->detect();
    $voiture->boost();
    var_dump($voiture);
    echo '<br>';
    $voiture->faster($moto);

?>