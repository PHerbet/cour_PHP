<?php
//fonction qui recupère l'extension:
function get_file_extension($file) {
    return substr(strrchr($file,'.'),1);
}
//function compteur 
    function count_bdd($bdd) : int //: int force à retourner un int 
    {
        try
    {
        $req = $bdd-> prepare( 'SELECT cpt_nbr from nbr where id_nbr = 1');
        $req -> execute();
        //boucle pour parcourir et afficher le contenu de chaque ligne 
        while ($data = $req->fetch())
        {
            $value = $data['cpt_nbr'];
    }
    return $value;
    }

    catch(Exception $e)
    {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
    }

//function qui va ajouter un enregistrement en BDD(table image)
function addImg($bdd,$name,$url){
    try{
        $req = $bdd->prepare('INSERT INTO image(nom_img, url_img) 
        VALUES(:nom_img, :url_img)');
        $req->execute(array(
            'nom_img' => $name,
            'url_img' =>$url
            ));
    }
    catch(Exception $e)
    {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}
//function qui met à jour le compteur
function updateCpt($bdd,$cpt){
    try{
        $req = $bdd->prepare('UPDATE nbr SET cpt_nbr = :cpt_nbr WHERE id_nbr = 1');
        $req->execute(array(
            'cpt_nbr' =>$cpt
            ));
    }
    catch(Exception $e)
    {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}
?>

