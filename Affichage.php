<?php

class Affichage {

    private $Véhicule = "noir";
    private $Véhicule_poids = 1500;

    public function getVéhicule() {
        return $this->Véhicule;
    }
    public function setVéhicule($Véhicule) {
        $this->Véhicule = $Véhicule;
    }

    public function getVéhicule_poids() {
        return $this->Véhicule_poids;
    }
    public function setVéhicule_poids($Véhicule_poids) {
        $this->Véhicule_poids = $Véhicule_poids;
    }

    public function rouler() {
        echo "Le véhicule roule";
    }

    public function ajouter_personne($Véhicule_poids) {
        $this->poids = $this->$Véhicule_poids + 70;
    }
}

    