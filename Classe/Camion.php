<?php

include("Quatre_roues.php");

class Camion extends Quatre_roues {
    private $longueur = 6;

    public function ajouter_remorque($longueur_remorque) {
        $this->longueur = $this->$longueur_remorque;
    }
}