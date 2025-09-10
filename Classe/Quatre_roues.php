<?php

include("Vehicule.php");

class Quatre_roues extends Vehicule {
    private $nombre_porte = 3;

    public function repeindre($couleur) {
        $this->ajout_peint = $this->$couleur;
    }
}