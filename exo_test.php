<?php
// Exercice 1 :
// Créer une fonction qui teste si un nombre est positif ou négatif (echo dans la page web).

function type_nbr($x) 
{
    if ($x > 0) 
    { 
        echo "le nombre est positif!<br>";
    }
    else if($x < 0) 
    {
        echo " le nombre est négatif!<br>";
    }
    else 
    {
        echo "le nombre vaut 0!<br>";
    }
} 
type_nbr(2);
type_nbr(0);
type_nbr(-25);
type_nbr(0.2);

//exercice 2 
// Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus grand (echo dans la page web)
function nbr_plus_grand($x,$y,$z)
{
    if ($x > $z && $x > $y)
    {
        echo " $x est le nombre le plus grand !<br>";
    }
    else if ($y > $z && $y > $x)
    {
        echo "$y est le nombre le plus grand! <br>";
    }
    else if ($y == $x || $y == $z || $x == $z)
    {
        echo "tu as une égalité ! <br>";
    }
    else 
    {
        echo "le nombre $z est le plus grand! <br>";
    }
}
nbr_plus_grand(2,5,3);
nbr_plus_grand(23,15,22);
nbr_plus_grand(25,3,69);
nbr_plus_grand(25,25,0);

//ou: 
function nbr_plus_grand2($x,$y,$z)
{
    if ($x > $z && $x > $y)
    {
        return $x;
    }
    else if ($y > $z && $y > $x)
    {
        return $y;
    }
    else if ($y == $x || $y == $z || $x == $z)
    {
        return  "tu as une égalité  <br>";
    }
    else 
    {
        return $z;
    }
}
echo 'le nombre le plus grand est: ' .nbr_plus_grand2(2,5,3).'<br>';
echo 'le nombre le plus grand est: ' .nbr_plus_grand2(23,15,22).'<br>';
echo 'le nombre le plus grand est: ' .nbr_plus_grand2(25,3,69).'<br>';
echo 'le nombre le plus grand est: ' .nbr_plus_grand2(25,25,0).'<br>';

//exercice 3
//Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus grand (echo dans la page web)
function nbr_plus_petit($x,$y,$z)
{
    if ($x < $z && $x < $y)
    {
        echo " $x est le nombre le plus petit !<br>";
    }
    else if ($y < $z && $y < $x)
    {
        echo "$y est le nombre le plus petit! <br>";
    }
    else if ($y == $x || $y == $z || $x == $z)
    {
        echo "tu as une égalité ! <br>";
    }
    else 
    {
        echo "le nombre $z est le plus petit! <br>";
    }
}
nbr_plus_petit(2,5,3);
nbr_plus_petit(23,15,22);
nbr_plus_petit(25,3,69);
nbr_plus_petit(25,25,0);

//exercice 4 
// Créer une fonction qui prend en entrée 1 valeur (l’âge d’un enfant). Ensuite, elle informe de sa catégorie (echo dans
// la page web) :
// x "Poussin" de 6 à 7 ans
// x "Pupille" de 8 à 9 ans
// x "Minime" de 10 à 11 ans
// x "Cadet" après 12 ans
// Bonus : Refaire l’exercice en utilisant le switch case.
function categorie($age)
{
    if ( $age >= 6 && $age <= 7)
    {
        return "Poussin";
    }
    else if ( $age >= 8 && $age <= 9)
    {
        return "Pupille";
    }
    else if ( $age >= 10 && $age <= 11 )
    {
        return "Minime";
    }
    else 
    {
        return "Cadet";
    }
}

echo 'Tu fais partie de la catégorie ' .categorie(8). '<br>';
echo 'Tu fais partie de la catégorie ' .categorie(6). '<br>';
echo 'Tu fais partie de la catégorie ' .categorie(10). '<br>';
echo 'Tu fais partie de la catégorie ' .categorie(17). '<br>';

//ou 

function categorie2($age) 
{
    switch ($age) 
    {
        case $age >= 6 && $age<=7:
            echo "Tu es en Poussin<br>";
        break;
        case $age >= 8 && $age<=9:
            echo "Tu es en Pupille<br>";
        break;
        case $age >= 10 && $age<=11:
            echo "Tu es en Minime<br>";
        break;
        case $age>= 12:
            echo "Tu es en Cadet<br>";
        break;
        default:
            echo "Tu es trop jeune pour faire du sport <br>";
        break;
    }
}

categorie2(15);
categorie2(8);
categorie2(2);
categorie2(11);
categorie2(6);
?>


