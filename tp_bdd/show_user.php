<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afficher la liste des utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- menu: -->
<div>
    <ul id="menu">
        <li><a href="add_user.php" title="aller à la section 1">Ajouter un utilisateur</a></li>
        <li><a href="show_user.php" title="aller à la section 2">Gérer les utilisateurs</a></li>
    </ul>
</div>
    <h3>Liste des utilisateurs :</h3>
    <form action="" method="post">
    <?php
        //fichier de connexion à la BDD
        include 'path_bdd.php';
        //function requête SQL
        include 'tp_function.php';
        show_all_user($bdd);
    ?>
        <input type="submit" value="Supprimer">
    </form>
    <?php
        if(isset($_GET['error'])){
            echo "<p>Veuillez sélectionner un produit</p>";
        }
        //vérification de la super globale $_POST['id_prod']
        if(isset($_POST['id_util'])){
            //boucle pour parcourir chaque case cochés ($value équivaut à value en HTML)
            foreach($_POST['id_util'] as $value){
                delete_user($bdd, $value);
                echo "<p>Suppression de l'utilisateur $value</p>";
            }
            //Script JS pour redirection vers show_user.php dans 1500 ms 
            echo '<script>
            setTimeout(()=>{
                document.location.href="show_user.php"; 
            }, 1500);</script>';
            header('Location : show_user.php');
        }
        else{
            echo "<p>Veuillez cocher le(s) utilisateur(s) à supprimer</p>";
        }
    ?>
</body>
</html>