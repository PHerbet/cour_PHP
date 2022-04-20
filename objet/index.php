<?php
    require './classe.php';
    $voiture = new Vehicule('Renault Clio', 4, 160);
    var_dump($voiture);
    // echo '<br>';
    // $voiture->nomVehicule = 'Renault Clio';
    // $voiture->nbrRoue = 4;
    // $voiture->vitesse = 160;
    // var_dump($voiture);
    echo '<br>';
    echo $voiture->nomVehicule;
    echo '<br>';
    echo $voiture->nbrRoue;
    echo '<br>';
    echo $voiture->vitesse;
    echo '<br>';
    $voiture->demarrage();
    echo "<br>";

    // $moto = new Vehicule();
    // var_dump($moto);
    // echo '<br>';

    // $camion = $voiture;
    // var_dump($camion);
    // echo '<br>';
    // $camion = new Vehicule();
    // var_dump($camion);
    // echo '<br>';

?>