<?php

class Deux_roues extends Vehicule {
    private $cylindree;


    public function getCylindree() {
        return $this->cylindree;
    }
    public function setCylindree($cylindree) {
        $this->cylindree = $cylindree;
    }

    public function mettre_essence($nombre_litre) {
        $this->ajout_litre = $this->$nombre_litre;
    }
}