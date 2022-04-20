<?php
// exercice 1
$a = 12;
$b = 10;
$total = $a + $b;
echo "le total est : {$total}<br>";

// exercice 2 
    $a = 5;
    $b = 3;
    $c = $a + $b;
    echo " les valeurs a,b,c sont : {$a}, {$b} et {$c}. <br>";
    $a = 2;
    echo "la valeur a est : {$a} <br>";

//exercice 3
    $a = 15;
    $b = 23;
    echo " la valeur de a est : {$a} et la valeur de b est : {$b} <br>";
    [$a,$b] = [$b,$a];
    echo " maintenant on a a =  {$a} et b = {$b} <br>";

//exercice 4 

function ttc($prix_article,$nb_article,$tva)
{
    $total = ($prix_article*$nb_article)*(1+$tva/100);
    echo "On a {$nb_article} qui coute {$prix_article} €/unité, et une TVA de {$tva}, ce qui nous donne un prix TTC de {$total} €<br>";
}
ttc(10,5,4.5);
?>
