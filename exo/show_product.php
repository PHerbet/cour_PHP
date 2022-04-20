<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afficher la liste des produits</title>
</head>
<body>
    <h3>Liste des produits :</h3>
    <?php
        //fichier de connexion à la BDD
        include 'connect_bdd.php';
        //function requête SQL
        include 'function.php';
        showAllProduits($bdd);
    ?>
    <input type="submit" value="Supprimer">
    </form>
    <?php
        if(isset($_GET['error'])){
            echo "<p>Veuillez sélectionner un produit</p>";
        }
        //vérification de la super globale $_POST['id_prod']
        if(isset($_POST['id_prod'])){
            //boucle pour parcourir chaque case cochés ($value équivaut à value en HTML)
            foreach($_POST['id_prod'] as $value){
                deleteProduit($bdd, $value);
                echo "<p>Suppression de l'article $value</p>";
            }
            //Script JS pour redirection vers showProduit.php dans 1500 ms 
            echo '<script>
            setTimeout(()=>{
                document.location.href="showProduit.php"; 
            }, 1500);</script>';
            header('Location : showProduit.php');
        }
        else{
            echo "<p>Veuillez cocher un ou plusieurs produit à supprimer</p>";
        }
    ?>
</body>
</html>
</body>
</html>