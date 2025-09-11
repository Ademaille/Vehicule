<?php

class Camion extends Quatre_roues {
    // Attributs
    private $longueur;

    // Accesseurs
    public function getLongueur() {
        return $this->longueur;
    }
    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }
    
    // Méthodes
    public function longueur_camion($longueur) {
        $this->longueur = $longueur;
    }
    public function ajouter_remorque($longueur_remorque) {
        $this->longueur2 = $longueur_remorque;
    }
}