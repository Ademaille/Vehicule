<?php

class Vehicule {
    private $couleur = "rouge";
    private $poids = 850;


    public function getCouleur() {
        return $this->couleur;
    }
    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function getPoids() {
        return $this->poids;
    }
    public function setPoids($poids) {
        $this->poids = $poids;
    }

    public function __construct($couleur, $poids) {
        echo "Appel du constructeur.<br>";
        $this->couleur = $couleur;

        $this->poids = $poids;
    }

    public function rouler() {
        echo "Le véhicule roule";
        
    }

    public function ajouter_personne($poids_personne) {
        $this->poids = $this->poids + $poids_personne;
    }
}