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
        //fonciton démarrage 
        public function demarrage()
        {
            echo ''.$this->nomVehicule.' a démarré';
        }
        //fonction qui donne le type de véhicule entre moto et voiture
        public function detect()
        {
            if ($this->nbrRoue == 2)
            {
                echo ''.$this->nomVehicule.' est une moto. <br>';
            }
            else
            {
                echo ''.$this->nomVehicule.' est une auto. <br>';
            }
        }
        //fonctionqui ajoute 50 km/h 
        public function boost()
        {
            $this->vitesse += 50;
        }
        //fonction qui donne le véhicule le plus rapide 
        public function faster($x)
        {
            if ($x->vitesse >= $this->vitesse)
            {
                echo ''.$x->nomVehicule.' plus rapide que '.$this->nomVehicule.' <br>';
            }
            else if ($x->vitesse == $this->vitesse)
            {
                echo 'les véhicules ont la même vitesse!!<br>';
            }
            else
            {
                echo ''.$this->nomVehicule.' plus rapide que '.$x->nomVehicule.' <br>';
            }
        }
    }


?>