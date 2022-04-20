<?php
    //requête ajouter un produit :
    function insertProduit($bdd, $nom, $content)
    {
        try {//preparation de la requete SQL en la stockant dans une variable
            $req = $bdd->prepare('INSERT INTO produit(nom_produit, description_produit) VALUES(:nom_produit, :description_produit)');
            //execution de la requete
            $req->execute (array(
                'nom_produit'=> $nom,
                'description_produit'=> $content
            ));
        }
        catch(Exception $e)
        {
        //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
    //requête qui affiche tous les produits en BDD (table --> produit)
    function showAllProduits($bdd)
    {
        try 
        {//preparation de la requete SQL en la stockant dans une variable
            $req = $bdd->prepare('SELECT * FROM produit');
            //execution de la requete
            $req->execute ();
            //boucle qui parcourt la bdd et renvoie les id/values
            while($data = $req -> fetch())
            {//mise en place de checkbox pour faciliter la suppression
                echo '<p><input type ="checkbox" name="id_prod"
                value="'.$data['id_produit'].'"><a href="update_product.php?id='.$data['id_produit'].'">'.$data['nom_produit'].'</a></p>';
            }
        }
        catch(Exception $e)
        {
        //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
  //requête qui supprime un produit (table->produit)
    function deleteProduit($bdd, $value)
    {
        try
        {
            $req = $bdd->prepare('DELETE FROM produit WHERE id_produit = :id_produit');
            $req->execute(array(
                'id_produit' => $value
                ));
        }
        catch(Exception $e)
        {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
        }
    }
    //requête qui met à jour un produit (table->produit)
    function update_product($bdd, $nom, $content, $value){
        try{
            $req = $bdd->prepare('UPDATE produit SET nom_produit = :nom_produit,
            description_produit = :description_produit WHERE id_produit = :id_produit');
            $req->execute(array(
                'id_produit' => $value,
                'nom_produit' => $nom,
                'description_produit' => $content
                ));
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
?>