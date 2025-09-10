<?php

include("Quatre_roues.php");

class Camion extends Quatre_roues {
    private $longueur;

    public function getLongueur() {
        return $this->longueur;
    }
    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }


    public function ajouter_remorque($longueur_remorque) {
        $this->longueur = $this->$longueur_remorque;
    }
}