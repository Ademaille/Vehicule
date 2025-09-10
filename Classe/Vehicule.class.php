<?php

class Vehicule {
    
    // Attributs
    private $couleur;
    private $poids;

    public function __construct($couleur, $poids) {

        $this->couleur = $couleur;
        $this->poids = $poids;
    }
// Accesseurs
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

    public function rouler() {
        echo "Le véhicule roule<br>";
    }

    public function ajouter_personne($poids_personne) {
        $this->poids = $this->poids + $poids_personne;
    }
}
