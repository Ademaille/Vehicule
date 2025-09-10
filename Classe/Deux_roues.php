<?php

include("Vehicule.php");

class Deux_roues extends Vehicule {
    private $cylindree = 25;

    public function mettre_essence($nombre_litre) {
        $this->ajout_litre = $this->$nombre_litre;
    }
}