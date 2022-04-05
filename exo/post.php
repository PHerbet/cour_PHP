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
        <p>saisir son nom :</p>
        <input type="text" name="Nom">
        <p>saisir son prénom :</p>
        <input type="text" name="Prenom">
        <br>
        <br>
        <input type="submit" value="Envoyer">
    </form>
    <?php
        //test si les champs sont remplis
        if(isset($_GET['Nom']) AND isset($_GET['Prenom']) 
        AND $_GET['Nom'] != "" AND $_GET['Prenom'] != ""){
            $nom = $_GET['Nom'];
            $prenom = $_GET['Prenom'];
            echo "Mon nom est égal a : $nom<br>";
            echo "Mon prénom est égal a : $prenom<br>";
        }
        //sinon
        else{
            echo "Veuillez remplir les champs de formulaire";
        }
    ?>
</body>
</html>