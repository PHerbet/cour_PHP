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
    echo '<p><input type="checkbox" name="id_util[]" value="'.$id.'">
        <a href="update_user.php?id='.$value['id_util'].'">'.$value['nom_util'].'</a> '.$value['prenom_util'].' 
        '.$value['mail_util'].' '.$value['mdp_util'].'<img src="'.$value['img_util'].'"></p>';
    };
?>