<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>import de fichier</title>
<?php
    //connection Bdd
    include 'connectBdd.php';
    //importation des focntions
    include 'functions.php';
?>
</head>
<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <h2>importer une image</h2>
        <input type="file" name="file">
        <p><button type="submit">importer</button></p>
    </form>
<?php
//fonction qui récupère le format du fichier (extension)
function get_file_extension($file) {
return substr(strrchr($file,'.'),1);
};
//création de la variable compteur
$cpt = count_bd($bdd);
//test de la présence de l'image :
if (isset($_FILES['file']))
{//recuperation des infos
        $tmpName = $_FILES['file']['tmp_name'];
        $name = $_FILES['file']['name'];
        //récupération de l'extension
        $ext = get_file_extension($name);
        //variable qui contient le nouveau nom de l'image
        $name = "image$cpt.$ext";
        //variable qui contient le chemin de l'image
        $url = "./images/$name";
        //déplacer l'image dans le dossier image (rename)
        move_uploaded_file($tmpName, $url);
        //function qui ajoute l'image en  BDD
        addImg($bdd,$name,$url);
        //incrémenter le compteur
        $cpt++;
        //mettre à jour le compteur en BDD
        update_cpt($bdd,$cpt);
        echo 'L\'image '.$name.' à été ajoutée en BDD';
    }
    else{
        echo "Veuillez àjouter une image";
}
?>
</html>