<?php

// Exercice 1 :
// Créer un script qui affiche les nombres de 1 -> 5 (méthode echo).

for ($i = 0; $i <= 5; $i++)
{
    echo"$i <br>";
}

// Exercice 2
// Ecrire une fonction qui prend un nombre en paramètre (variable $nbr), et qui ensuite affiche les dix nombres suivants. 
// Par exemple, si la valeur de nbr équivaut à : 17, la fonction affichera les nombres de 18 à 27 (méthode echo).

function plus_dix($nbr) 
{
    for ($i = 1; $i <= 10; $i++ )
    {
        echo ''.$nbr + $i.' <br>';
    }
}
plus_dix(12);

//Bonus
// Exercice créer un tableau de 10 colonnes (en utilisant un boucle) -> chaque colonne la valeur de l'index +1,

$tab_dix = array(); 
    for ($i = 0; $i < 10; $i++ )
    {
        $tab_dix[$i] = $i +1;
    }

var_dump($tab_dix);
echo '<br>';


//Bonus 2
// créer un tableau de 10 colonnes avec un nombre aléatoire comprit entre (10, 30)
$tab_rdm = array();
    for ($i = 0; $i < 10; $i++ )
    {
        $tab_rdm[$i] = random_int(10,30);
    }
var_dump($tab_rdm);
echo'<br>';

?>
