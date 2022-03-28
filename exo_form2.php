<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Saisir son nom :</p>
        <input type="text" name="nom">
        <p>Saisir son genre :</p>
        <select name="genre" >
            <option value="1">
                Femme
            </option>
            <option value="2">
                Homme
            </option>
            <option value="3">
                Autre
            </option>   
        </select>
        <p><input type="submit" value="Afficher"></p>
<?php
// Exercice3
// Afficher le nom, et le genre sélectionné dans la page. (méthode post)

if(isset($_POST['nom']) && isset($_POST['genre']) && $_POST['nom'] != '' )
{
    $nom = $_POST['nom'];
    echo 'Tu t\'appels '.$nom.'<br>';
};

switch ($_POST['genre'])
{case 1 :
        echo 'tu es une femme <br>';
        break;
case 2 :
        echo 'tu es un homme <br>';
        break;
case  3: 
        echo 'tu es du genre autre <br>';
        break;
}
?>
    </form>
</body>
</html>