<?php
    //import
    include './utils/connectBdd.php';
    include './model/model_article.php';
    include './view/view_update.php';

    if(isset($_GET['id']) AND $_GET['id'] !=''){
        //stocke $_GET['id'] dans une variable $value
        $id = $_GET['id'];
    }
        var_dump($id);
        var_dump($list);
        //Test si les champs sont rempli
        if (isset($_POST['nom_article']) && isset($_POST['prix_article']) 
        && $_POST['nom_article'] != '' && $_POST['prix_article'] != '' )
            {//Instance d'un nouvel objet Article avec le constructeur
                $article = new Article($_POST['nom_article'], $_POST['prix_article']);
                $article->setIdArticle($_GET['id']);
                var_dump($id);
                var_dump($article);
        //appel à la méthode addArticleV2 de la classe Article
        $article->update_article($bdd);
        //utiliser le getter pour afficher le nom
        echo 'l\'article '.$article->getNomArticle().' à été modifié';
            }//si champs vides
            else
            {
                echo "Veuillez compléter les champs du formulaire";
            }
?>