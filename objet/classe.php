<?php
    class Vehicule //nom toujours en Pascalcase
    {
        /*---------------------------------------
                        ATTRIBUTS
        ---------------------------------------*/
        public $nomVehicule;
        public $nbrRoue;
        public $vitesse;
        /*---------------------------------------
                        CONSTRUCTEUR
        ---------------------------------------*/
        public function __construct($name, $nbr, $vit)//constructeur attention au double underscore
        {//mieux vaut mettre un constructeur avec parametre null pour avoir un parametre vide plutot que de ne rien mettre question sécurité
            $this->nomVehicule = $name;
            $this->nbrRoue = $nbr;
            $this->vitesse = $vit;
        }
        /*---------------------------------------
                        METHODES
        ---------------------------------------*/
        public function demarrage()
        {
            echo ''.$this->nomVehicule.' a démarré';
        }
    }
?>

