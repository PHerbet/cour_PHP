<?php
    /*---------------------------------------------
                    IMPORT
    ---------------------------------------------*/
    //importer la connexion à la bdd
    include './utils/connect_bdd.php';
    //importer le model
    include './model/model_user.php';
    //importer la vue
    include './view/view_show_all_user.php';
    //importer le menu
    include './view/view_header.php';
    
    /*---------------------------------------------
                    LOGIQUE
    ---------------------------------------------*/
    
    // show_all_user($bdd);
    //deuxième version de lecture de la BDD possible 
    //avec ce code dans le controleur 
    //stocker dans le variable le tableau des utilisateurs
    $list = show_all_userV2($bdd);
    //parcourir
    foreach($list as $value){
    //affiche pour chaque ligne du tableau le nom de l'utilisateur
    echo '<p><input type="checkbox" name="id_util[]" value="'.$value['id_util'].'">
        <a href="update_user.php?id='.$value['id_util'].'">'.$value['nom_util'].'</a> '.$value['prenom_util'].' 
        '.$value['mail_util'].' '.$value['mdp_util'].'<img src="'.$value['img_util'].'"></p>';
    };
    if(isset($_GET['error'])){
        echo "<p>Veuillez sélectionner un utilisateur</p>";
    }
    echo "<input type='submit' value='delete' name='delete'>";
    echo "</form>";
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
            document.location.href="./view_all_user.php"; 
        }, 1500);</script>';
        //bien coller les : avec Location pour ne pas avoir d'erreur de reroutage
        header('Location: ./view_all_user.php');
    }
    else{
        echo "<p>Veuillez cocher le(s) utilisateur(s) à supprimer</p>";
    }
?>