<?php
    //import
    include './utils/connectBdd.php';
    include './model/model_article.php';
    include './view/view_show_article.php';

    //instancier un nouvel objet
    $article = new Article(null, null);
    $obj = $article->show_article($bdd);
    foreach($obj as $data){
        echo '<p><input type="checkbox" name="id_article[]" value="'.$data->id_util.'"> 
        l\'article <a href="/evalmvc/update?id='.$data->id_article.'">'.$data->nom_article.'</a> 
        est au prix de '.$data->prix_article.'</p>';
    }
    echo "<input type='submit' value='delete' name='delete'>";
    echo "</form>";
    //vérification de la super globale $_POST['id_prod']
    if(isset($_POST['id_article'])){
        //boucle pour parcourir chaque case cochés ($value équivaut à value en HTML)
        foreach($_POST['id_article'] as $data){
            $article = new Article($_POST['nom_article'], $_POST['prix_article']);
            $article->setIdArticle($_GET['id']);
            var_dump($article);
            $article->delete_article($bdd, $data);
            echo "<p>Suppression de l'(les) article(s) $value</p>";
        }
        //Script JS pour redirection vers show_user.php dans 1500 ms 
        echo '<script>
        setTimeout(()=>{
            document.location.href="/evalmvc/show"; 
        }, 1500);</script>';
        //bien coller les : avec Location pour ne pas avoir d'erreur de reroutage
        header('Location: ./view_all_user.php');
    }
    else{
        echo "<p>Veuillez cocher l'(les) article(s) à supprimer</p>";
    }
?>