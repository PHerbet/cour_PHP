<?php
/*---------------------------------------------
                    IMPORT
    ---------------------------------------------*/
    //importer la connexion à la bdd
    include './Utils/connect_BDD.php';
    //importer le model
    include './Model/model_user.php';
    //importer la vue
    include './View/view_add_user.php';
    //importer le menu
    include './View/view_menu_visiteur.php';
    /*---------------------------------------------
                    TEST
    ---------------------------------------------*/
 // test pour vérifier si les champs du formulaire sont remplis 
        if (isset($_POST['name_user']) && isset($_POST['first_name_user']) && isset($_POST['login_user']) && isset($_POST['mdp_user'])
        && $_POST['name_user'] != '' && $_POST['first_name_user'] != '' && $_POST['login_user'] != '' && $_POST['mdp_user'] != '')
            {//Stocker les super globales POST dans des variables
                $name = $_POST['name_user'];
                $first_name = $_POST['first_name_user'];
                $login = $_POST['login_user'];
                $mdp = $_POST['mdp_user'];
                //appel de la fonction ajouter un user en BDD
                add_user($bdd, $name, $first_name, $login, $mdp);
            }//si champs vides
            else
            {
                echo "Veuillez compléter les champs du formulaire";
            }

?>