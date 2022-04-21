<?php
    class Vehicule //nom toujours en Pascalcase
    {
        /*---------------------------------------
                        ATTRIBUTS
        ---------------------------------------*/
        private $nomVehicule;
        private $nbrRoue;
        private $vitesse;
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
                    GETTER AND SETTER
        ---------------------------------------*/
        //Getter nomVehicule récupère le nom du véhicule
        public function getNomVehicule()
        {
        return $this->nomVehicule;
        }
        //setter nomVehicule remplace le nom du véhicule
        public function setNomVehicule($new_nom_vehicule)
        {
        $this->nomVehicule = $new_nom_vehicule;
        }
        //Getter nbrRoue récupère le nombre de roue  
        public function getNbrRoue()
        {
        return $this->nbrRoue;
        }
        //setter NbrRoue remplace le nombre de roue du vehicule
        public function setNbrRoue($new_nbrRoue)
        {
        $this->nbrRoue = $new_nbrRoue;
        }
        //Getter vitesse récupère la vitesse du vehicule
        public function getVitesse()
        {
        return $this->vitesse;
        }
        //setter vitesse remplace la vitesse du vehicule
        public function setVitesse($new_vitesse)
        {
        $this->vitesse = $new_vitesse;
        }
        /*---------------------------------------
                        METHODES
        ---------------------------------------*/
        //fonction démarrage 
        public function demarrage()
        {
            echo ''.$this->getNomVehicule.' a démarré';
        }
        //fonction qui donne le type de véhicule entre moto et voiture
        public function detect()
        {
            if ($this->getNbrRoue() == 2)
            {
                echo ''.$this->getNomVehicule().' est une moto. <br>';
            }
            else
            {
                echo ''.$this->getNomVehicule().' est une auto. <br>';
            }
        }
        //fonctionqui ajoute 50 km/h 
        public function boost()
        {
            $this->setVitesse($this->getVitesse() + 50);
        }
        //fonction qui donne le véhicule le plus rapide 
        public function faster($x)
        {
            if ($x->getVitesse() >= $this->getVitesse())
            {
                echo ''.$x->getNomVehicule().' plus rapide que '.$this->getNomVehicule().' <br>';
            }
            else if ($x->getVitesse() == $this->getVitesse())
            {
                echo 'les véhicules ont la même vitesse!!<br>';
            }
            else
            {
                echo ''.$this->getNomVehicule().' plus rapide que '.$x->getNomVehicule().' <br>';
            }
        }
    }


?>