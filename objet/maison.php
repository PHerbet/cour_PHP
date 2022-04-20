<?php
    class Maison
    {
        /*---------------------------------------
                        ATTRIBUTS
        ---------------------------------------*/
        public $nom;
        public $longueur;
        public $largeur;
        public $nbr_etage;
        /*---------------------------------------
                        CONSTRUCTEUR
        ---------------------------------------*/
        public function __construct($name, $l, $L)
        {
            $this->nom = $name;
            $this->longueur = $l;
            $this->largeur = $L;
        }
        /*---------------------------------------
                        METHODES
        ---------------------------------------*/
        public function surface()
        {
            if ($this->nbr_etage == null || $this->nbr_etage == 0) 
            {
                echo '<p>La surface de '.$this->nom.' est de '.($this->longueur*$this->largeur).' m2 <p>';
            }
            else
            {
            echo '<p>La surface de '.$this->nom.' est de '.($this->longueur*$this->largeur*$this->nbr_etage).' m2 <p>';
            }
        }
    }
?>