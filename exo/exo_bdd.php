
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Ajouter un produit :</h3>
    <form action="" method="post">
        <p>Saisir le nom du produit :</p>
        <input type="text" name="nom_produit" >
        <p>Saisir le contenu du produit: </p>
        <textarea name="description_produit" cols="30" rows="10"></textarea>
        <input type="submit" value="Ajouter">
    </form>
    <?php
    //fichier de connection bdd
    include 'connect_bdd.php';
    //function de requete SQL
        include 'function.php';
        if(isset($_POST['nom_produit']) && isset($_POST['description_produit']) && $_POST['description_produit'] !='' && $_POST['nom_produit'] !='')
        {
            $nom = $_POST['nom_produit'];
            $content =$_POST['description_produit'];
            insertProduit($bdd, $nom, $content);
            echo "$nom à été ajouté en BDD";
        }
        else
        {
            echo "Veuillez remplir les champs";
        }
    ?>
</body>
</html>