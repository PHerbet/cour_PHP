<?php
    /*---------------------------------------------
                    IMPORT
    ---------------------------------------------*/
    //importer la connexion à la bdd
    include './utils/connect_bdd.php';
    //importer le model
    include './model/model_user.php';
    //importer la vue
    include './view/view_add_user.php';
    
    /*---------------------------------------------
                    TEST
    ---------------------------------------------*/
    
    // test pour vérifier si les champs du formulaire sont remplis 
        if (isset($_POST['nom_util']) && isset($_POST['prenom_util']) && isset($_POST['mail_util']) && isset($_POST['mdp_util'])
        && $_POST['nom_util'] != '' && $_POST['prenom_util'] != '' && $_POST['mail_util'] != '' && $_POST['mdp_util'] != '')
            {//Stocker les super globales POST dans des variables
                $nom = $_POST['nom_util'];
                $prenom = $_POST['prenom_util'];
                $mail = $_POST['mail_util'];
                $mdp = $_POST['mdp_util'];
                //appel de la fonction ajouter un user en BDD
                add_user($bdd, $nom, $prenom, $mail, $mdp);
                //message 
                echo "$name a été ajouté à la BDD";
            }//si champs vides
            else
            {
                echo "Veuillez compléter les champs du formulaire";
            }

?>