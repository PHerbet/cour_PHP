<?php
//méthode obligatoire pour utiliser session
    session_start();
    //
    if(isset($_SESSION['nom'])){
        echo 'bonjour '.$_SESSION['nom'].'';
    };
    $_SESSION['destination2'] = true;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>destination1</title>
</head>
<body>
    <a href="./start.php">start</a>
    <a href="./destination.php">destination</a>
    <a href="./deconnexion.php">deconnexion</a>
</body>
</html>