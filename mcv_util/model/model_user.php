<?php
    //fonction qui ajoute un utilisateur :
    function add_user($bdd, $nom, $prenom, $mail, $mdp)
    {
        try
        {
            $req = $bdd -> prepare('INSERT INTO utilisateur(nom_util, prenom_util, mail_util, mdp_util)
            VALUES (:nom_util, :prenom_util, :mail_util, :mdp_util)');
            $req -> execute(array(
                'nom_util' => $nom,
                'prenom_util' => $prenom,
                'mail_util' => $mail,
                'mdp_util' => $mdp,
            ));
        }
        catch (Exception $e)
        {
            //affuchage d'une exception en cas d'erreur
            die('Erreur : '.$e ->getMessage());
        }
    }

    //function voir les utilisateurs
    function show_all_user($bdd)
    {
        try
        {//preparation de la requete de recuperation des infos de la BDD
            $req = $bdd -> prepare ('SELECT * FROM utilisateur');
            $req -> execute ();
                //boucle qui parcourt la bdd et renvoie les info:
                while ($data = $req -> fetch()) 
                {
                    $id= $data['id_util'];
                    $nom = $data['nom_util'];
                    $prenom = $data['prenom_util'];
                    $mail = $data['mail_util'];
                    $mdp = $data['mdp_util'];
                    $img = $data['img_util'];
                    echo '<p><input type="checkbox" name="id_util[]" value="'.$id.'">
                    <a href="update_user.php?id='.$id.'">'.$nom.'</a> '.$prenom.' '.$mail.' '.$mdp.'<img src="'.$img.'"></p>';
                }
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
    // //autre fonction montrer la bdd possible a utiliser avec la deuxième option dans le controleur
    // //affiche tous les utilisateurs (version alternative) (renvoi un tableau d'utilisateur
    // function showAllUserV2($bdd) 
    // {
    //     try
    //     {
    //         $req = $bdd->prepare("SELECT * FROM utilisateur");
    //         $req->execute();
    //         $data = $req->fetchAll(PDO::FETCH_ASSOC);
    //         return $data;
    //     }
    //     catch(Exception $e)
    //     {
    //         //affichage d'une exception en cas d’erreur
    //         die('Erreur : '.$e->getMessage());
    //     }
    // }
?>