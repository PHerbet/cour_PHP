<?php 

    $prenom = 'Priscillien';
    echo 'mon prénom : ' .$prenom. '<br>';
    echo "mon prénom : $prenom <br>";
    echo "mon prénom : {$prenom}<br>";

?>
<!-- -Créer 2 variables $a et $b qui ont pour valeur 12 et 10,
-Stocker le résultat de l’addition de $a et $b dans une variable $total,
-Afficher le résultat (utilisez la fonction echo) -->

<?php

    $a = 12;
    $b = 10;
    $total = $a + $b;
    echo $total;

?>