<?php

    class Deux_roues extends Vehicule {
    // Attributs
    private $cylindree;

    // Accesseurs
    public function getCylindree() {
        return $this->cylindree;
    }
    public function setCylindree($cylindree) {
        $this->cylindree = $cylindree;
    }

    // Méthodes
    public function mettre_essence($nombre_litre) {
        $this->ajout_litre = $nombre_litre;
    }

    public function ajouter_personne($poids_personne) {
        $poidsTotal = $this->getPoids() + $poids_personne + 2;
        $this->setPoids($poidsTotal);
    }
}