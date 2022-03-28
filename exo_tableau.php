<?php
// Exercice 1 :
// -Créer une fonction qui affiche la valeur la plus grande du tableau.

$tab = array(10, 25,6,33, 58,1,49,110);

function plus_grand($tab)
{
    $valeur_maxi = $tab[0];
    for ($i = 0; $i <= count($tab); $i++)
    { 
        if ($valeur_maxi < $tab[$i])
        {
            $valeur_maxi = $tab[$i];
        };
    }
    return $valeur_maxi;
};
echo plus_grand($tab);

function plus_petit($tab)
{
    $valeur_maxi = $tab[0];
    for ($i = 0; $i <= count($tab); $i++)
    { 
        if ($valeur_maxi > $tab[$i])
        {
            $valeur_maxi = $tab[$i];
        };
    }
    return $valeur_maxi;
};
echo plus_petit($tab);
?>