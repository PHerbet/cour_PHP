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
        <p>saisir le prix HT:</p>
        <input type="text" name="prix_HT">
        <p>saisir le nombre d'articles :</p>
        <input type="text" name="nbr">
        <p>saisir la TVA :</p>
        <input type="text" name="TVA">
        <br>
        <br>
        <input type="submit" value="Envoyer">
    </form>
    <?php
    // Exercice 2 :
    // -Créer une page de formulaire dans laquelle on aura 3 champs de formulaire de type nombre :
    // 1 champ de formulaire qui demande un prix HT d’un article,
    // 1 champ de formulaire qui demande le nombre d’article,
    // 1 champ de formulaire qui demande le taux de TVA,
    // -Afficher dans cette même page le prix TTC (prix HTtaux TVAquantité) avec un affichage du style :
    // Le prix TTC est égal à : valeur €. (utilisez le mode post).

    if(isset($_POST['prix_HT']) && isset($_POST['nbr']) && isset($_POST['TVA']) && $_POST['prix_HT'] !='' && $_POST['nbr'] != '' && $_POST['TVA'] != '')
    {
        $prix_article = $_POST['prix_HT'];
        $nb_article = $_POST['nbr'];
        $tva = $_POST['TVA'];
        $total = ($prix_article*$nb_article)*(1+$tva/100);
        echo "On a {$nb_article}  article(s) qui coute(nt) {$prix_article} €/unité, et une TVA de {$tva}%, ce qui nous donne un prix TTC de {$total} €<br>";
    }
    else
    {
        echo "remplir les champs svp!!";
    }

    ?>
</body>
</html>