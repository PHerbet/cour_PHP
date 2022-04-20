<?php
    //fonction qui ajoute un utilisateur :
    function add_user($bdd, $name, $first_name, $login, $mdp):void
    {
        try
        {//création de la requête de check mail(login)
            $check_login = $bdd ->prepare('SELECT count(id_user) FROM user WHERE login_user = :login_user');
            $check_login->execute(array('login_user' => $login));
                if ($check_login->fetchColumn()>0)
                {//si on a un ou plusieur résultat, le login est déjà existant
                    echo "Utilisateur déjà existant!";
                }//sinon on peut l'enregistrer
                else
        {
            $req = $bdd -> prepare('INSERT INTO user(name_user, first_name_user, login_user, mdp_user)
            VALUES (:name_user, :first_name_user, :login_user, :mdp_user)');
            $req -> execute(array(
                'name_user' => $name,
                'first_name_user' => $first_name,
                'login_user' => $login,
                'mdp_user' => $mdp,
                ));
            echo "Utilisateur enregistré";
        }
        }
        catch (Exception $e)
        {
            //affichage d'une exception en cas d'erreur
            die('Erreur : '.$e ->getMessage());
        }
    }

    //fonction pour vérifier la connexion:
    function connection($bdd, $login, $mdp):array
    {
        try
        {
            $req = $bdd -> prepare ('SELECT * FROM user WHERE login_user = :login_user AND mdp_user = :mdp_user ');
            $req -> execute(array(
                'login_user' => $login,
                'mdp_user' => $mdp
            ));
            $data = $req->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
?>