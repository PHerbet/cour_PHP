<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calulatrice :</title>
</head>
<body>
    <form action="" method="post">
        <p>Saisir un nombre :</p>
        <input type="text" name="nbr1">
        <p>Saisir un nombre :</p>
        <input type="text" name="nbr2">
        <p>Saisir un Opérateur (+,-,*,/) :</p>
        <input type="text" name="operateur">
        <p><input type="submit" value="Calculer"></p>
    </form>
<?php
// 1 récupérer le contenu des 3 champs de formulaire (test avec isset)
// 2 tester la valeur de l'opérateur (si +, -, /, *) (utiliser un switch case)
// effectuer l'opération dans chaque cas du switch case.
// Bonus : vérifier les erreurs (mauvais opérateur).
// Bonus : utiliser la méthode round($valeur, 2) pour afficher le résultat avec 2 chiffres après la virgule.
if( isset($_POST[nbr1]) && isset($_POST['nbr2']) && isset($_POST['operateur']) && $_POST['nbr1'] !='' && $_POST['nbr2']!='' && $_POST['operateur'] !='')
{
    $nbr1 = $_POST['nbr1'];
    $nbr2 = $_POST['nbr2'];
    $operateur = $_POST['operateur'];
}
switch($operateur)
{
    case "*":
        echo 'Le résultat est :'.($nbr1 * $nbr2).' <br>';
        break;
    case "/":
        echo 'Le résultat est :'.($nbr1 / $nbr2).' <br>';
        break;
    case "+":
        echo 'Le résultat est :'.($nbr1 + $nbr2).' <br>';
        break;
    case "-":
        echo 'Le résultat est :'.($nbr1 - $nbr2).' <br>';
        break;
    default :
        echo 'erreur de saisie';
}
?>
</body>
</html>