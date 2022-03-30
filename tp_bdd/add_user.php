<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add user</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // fichier de connection BDD 
    include 'path_bdd.php';
    //  function requete SQL 
    include 'tp_function.php';
    ?>
    <!-- menu: -->
    <div>
    <ul id="menu">
        <li><a href="add_user.php" title="aller à la section 1">Ajouter un utilisateur</a></li>
        <li><a href="show_user.php" title="aller à la section 2">Gérer les utilisateurs</a></li>
    </ul>
</div>
    <!-- formulaire pour création de compte -->
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Nom :</label>
            <input type="text" name="name" id="name">
        <label for="firstname">Prénom :</label>
            <input type="text" name="firstname" id="firstname">
        <label for="mail">E-mail :</label>
            <input type="mail" name="mail" id="mail">
        <label for="pass">Mot de passe :</label>
            <input type="password" name="pass" id="pass">
        <label for="img">Image :</label>
            <input type="file" name="img" id="img">
        <input type="submit" value="enregistrer">
    </form>
    <?php
//test des champs
    if (isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['mail']) && isset($_POST['pass'])  
        && $_POST['name'] != '' && $_POST['firstname'] != '' && $_POST['mail'] != '' && $_POST['pass'] != '' )
        {//test image présente
            if( isset($_FILES['img']) && $_FILES['img']['name'] != ''){
                //info des imgs
                $nom_temp = $_FILES['img']['tmp_name'];
                $name_file = $_FILES['img']['name'];
                $size = $_FILES['img']['size'];
                $error = $_FILES['img']['error'];
                $path = "./img_util/$name_file";
                $fichier = move_uploaded_file($nom_temp,$path );
            }//sinon, img par défaut 
            else
            {
                $path = "./img_util/avatar.png";
            }//récupération des infos
            $name = $_POST['name'];
            $firstname = $_POST['firstname'];
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            //methode de hash du pass (pas tres safe, ne pas trop utiliser)
            $pass = md5($_POST['pass']);
            
            add_user($bdd, $name, $firstname, $mail, $pass,$path);
            echo $error;
            echo "Utilisateur enregistré";
        }
        else
            {
                echo 'veuillez remplir les champs';
            }
    ?>
</body>
</html>