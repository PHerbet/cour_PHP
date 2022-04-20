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
?>