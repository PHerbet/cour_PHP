<?php
    /*---------------------------------------------
                    IMPORT
    ---------------------------------------------*/
    //importer la connexion à la bdd
    include './utils/connect_bdd.php';
    //importer le model
    include './model/model_user.php';
    //importer la vue
    include './view/view_update_user.php';
    //importer le menu
    include './view/view_header.php';
    /*---------------------------------------------
                    TEST
    ---------------------------------------------*/
    
    // test pour vérifier si les champs du formulaire sont remplis 
    if(isset($_GET['id']) AND $_GET['id'] !=''){
        //stocke $_GET['id'] dans une variable $value
        $id = $_GET['id'];
        $list = get_user($bdd, $id);
        echo '<script>
        set_value_input("'.$list[0]['nom_util'].'", "'.$list[0]['prenom_util'].'", "'.$list[0]['mail_util'].'", 
        "'.$list[0]['mdp_util'].'");
        </script>';
        if (isset($_POST['nom_util']) && isset($_POST['prenom_util']) && isset($_POST['mail_util']) && isset($_POST['mdp_util'])
        && $_POST['nom_util'] != '' && $_POST['prenom_util'] != '' && $_POST['mail_util'] != '' && $_POST['mdp_util'] != '')
            {//Stocker les super globales POST dans des variables
                $nom = $_POST['nom_util'];
                $prenom = $_POST['prenom_util'];
                $mail = $_POST['mail_util'];
                $mdp = $_POST['mdp_util'];
                //appel de la fonction modifier un user en BDD
                update_user($bdd, $nom, $prenom, $mail, $mdp, $data);
                //message 
                echo "$name a été modifié";
            }//si champs vides
            else
            {
                echo "Veuillez compléter les champs du formulaire";
            }
        }
    
    //test si l'id n'existe pas 
    else{
        header('Location: ./view_all_user.php?error');
    }
?>