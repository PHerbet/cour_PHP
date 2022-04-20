<?php
//Session
session_start();
    /*---------------------------------------------
                    IMPORT
    ---------------------------------------------*/
    //importer la connexion à la bdd
    include './Utils/connect_BDD.php';
    //importer le model
    include './Model/model_user.php';
    //importer la vue
    include './View/view_connection.php';
    //importer le menu
    include './View/view_menu_visiteur.php';
    /*---------------------------------------------
                    TEST
    ---------------------------------------------*/
    // //test si le bouton submit a été utilisé
    if(isset($_POST['submit']))
    {
    //test de remplissage des champs 
        if (isset($_POST['login_user']) && isset($_POST['mdp_user']) && $_POST['login_user'] !='' && $_POST['mdp_user'] !='')
        {//Stockage des variables POST
            $login = $_POST['login_user'];
            $mdp = $_POST['mdp_user'];
            echo ''.$login.' '.$mdp.'';
            //on récupèrer les info utilisateur sous forme de tableau
            $info = connection($bdd, $login, $mdp);
            //on teste la correspondance des valeurs bdd et formulaire
            if($login == $info[0]['login_user'] AND $mdp == $info[0]['mdp_user'])
            {//on créer les supers globale de SESSION
                $_SESSION['id'] = $info[0]['id_user'];
                $_SESSION['name'] = $info[0]['name_user'];
                $_SESSION['first_name'] = $info[0]['first_name_user'];
                $_SESSION['login'] = $info[0]['login_user'];
                $_SESSION['connected'] = true;
                //on redirige vers l'acceuil utilisateur 
                header('Location: ./index_user.php');
            }
            //si info de connexion incorrecte redirection sur la même page avec code erreur
            else
            {
            header('Location: ./connection.php?invalid');
            }
        }
        //si champs vide on redirige sur la même page avec code erreur 
        else
        {
            header('Location: ./connection.php?empty');
        }
    }

?>