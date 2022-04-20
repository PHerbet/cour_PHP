<?php
    session_start();
        $_SESSION['nom']= 'Choubidou';
        if(isset($_SESSION['destination1']))
        {
            echo '<p>tu as visité la page destination1</p><br>';
        }
        if(isset($_SESSION['destination2']))
        {
            echo '<p>tu as visité la page destination2</p><br>';
        }
        //gestion des erreurs 
        if(isset($_GET['deco']))
        {
            echo '<p> Vous étes déconnecté</p>';
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./destination1.php">destination1</a>
    <a href="./destination2.php">destination2</a>
    <a href="./deconnexion.php">deconnexion</a>
</body>
</html>