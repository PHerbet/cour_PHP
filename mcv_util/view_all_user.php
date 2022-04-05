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
    
    /*---------------------------------------------
                    LOGIQUE
    ---------------------------------------------*/
    
    show_all_user($bdd);
    // //deuxième version de lecture de la BDD possible 
    // //avec ce code dans le controleur 
    // //stocker dans le variable le tableau des utilisateurs
    // $list = showAllUserV2($bdd);
    // //parcourir
    // foreach($list as $value){
    // //affiche pour chaque ligne du tableau le nom de l'utilisateur
    // echo '<p>nom est égal à : '.$value['nom_util'].'</p>';
    // };
?>