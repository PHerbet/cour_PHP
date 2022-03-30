<?php


//fonction ajouter un user:
function add_user($bdd, $name, $firstname, $mail, $pass)
{//requete pour check le mail

// $req = $req->prepare("SELECT id FROM utilisateur WHERE mail_util='$mail");
// $req->execute([$mail]); 
// 
//
    try
    {//création de la requete
        $declarationRequete = $bdd->prepare(
            'SELECT count(id_util) FROM utilisateur WHERE mail_util = :mail_util'
        );
        $declarationRequete->execute(array('mail_util' => $mail));
        
        if ($declarationRequete->fetchColumn() > 0) {
            echo "email déjà existant";
            // On a un ou plusieurs résultats, la valeur ne peut être enregistrée
        } else {
            // On n'a aucun résultat, on va pouvoir faire INSERT
        
        $req = $bdd->prepare('INSERT INTO utilisateur(nom_util, prenom_util, mail_util, mdp_util)
        VALUES(:nom_util, :prenom_util, :mail_util, :mdp_util)');
        // execution de la requete
        $req->execute (array(
            'nom_util' => $name,
            'prenom_util' => $firstname,
            'mail_util' => $mail,
            'mdp_util' => $pass
        ));
    }
}
    catch(Exception $e)
    {
        //affichage des exception en cas d'erreur
        die ('Erreur : '.$e->getMessage());
    }
}
// fonction lecture de la bdd
function show_all_user($bdd){
    try{//preraparation de la requete
        $req = $bdd->prepare('SELECT * FROM utilisateur');
        $req->execute();//execution de la requete 
        while ($data = $req->fetch()){
            $id= $data['id_util'];
            $name_user = $data['nom_util'];
            $firstname_user = $data['prenom_util'];
            $mail_user = $data['mail_util'];
            $pass_user = $data['mdp_util'];
            echo '<p><input type="checkbox" name="id_util[]" value="'.$id.'">
            <a href="update_user.php?id='.$id.'">'.$name_user.'</a> '.$firstname_user.' '.$mail_user.' '.$pass_user.'</p>';
        }
    }
    catch(Exception $e)
    {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}
//fonction pour modifier les utilisateurs
function update_user($bdd, $name, $firstname, $mail, $pass, $value){
    try{
        $req = $bdd->prepare('UPDATE utilisateur SET nom_util = :nom_util, prenom_util = :prenom_util, 
        mail_util = :mail_util, mdp_util = :mdp_util WHERE id_util = :id_util');
        $req->execute(array(
            'id_util' => $value,
            'nom_util' => $name,
            'prenom_util' => $firstname,
            'mail_util' => $mail,
            'mdp_util' => $pass
            ));
    }
    catch(Exception $e)
    {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}
//function suppression de l'user
function delete_user($bdd, $value){
    try{
        $req = $bdd->prepare('DELETE FROM utilisateur WHERE id_util = :id_util');
        $req->execute(array(
            'id_util' => $value
            ));
    }
    catch(Exception $e)
    {
    //affichage d'une exception en cas d’erreur
    die('Erreur : '.$e->getMessage());
    }
}
?>