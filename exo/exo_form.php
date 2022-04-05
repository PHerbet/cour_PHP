<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <p>saisir un nombre:</p>
        <input type="text" name="nbr1">
        <p>saisir un autre nombre :</p>
        <input type="text" name="nbr2">
        <br>
        <br>
        <input type="submit" value="Envoyer">
    </form>
    <?php
// Exercice 1 :
// -Créer une page de formulaire dans laquelle on aura 2 champs de formulaire de type nombre.
// -Afficher dans cette même page la somme des 2 champs avec un affichage du style :
// La somme est égale à : valeur.

//on test les champs
if(isset($_GET['nbr1']) && isset($_GET['nbr2']) && $_GET['nbr1'] !='' && $_GET['nbr2'] != '')
    {
        $nbr1 = $_GET['nbr1'];
        $nbr2 = $_GET['nbr2'];
        $total = $nbr1 + $nbr2;
        echo 'la sommes des chiffres est '.($nbr2+$nbr1).' <br>';
    }
    else
    {
        echo "remplir les champs svp!!";
    }
echo $total;
    ?>
</body>
</html>
