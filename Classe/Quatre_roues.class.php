<?php

include("Vehicule.php");

class Quatre_roues extends Vehicule {
    private $nombre_porte = 3;


    public function getNombre_porte() {
        return $this->nombre_porte;
    }
    public function setNombre_porte($nombre_porte) {
        $this->nombre_porte = $nombre_porte;
    }


    public function repeindre($couleur) {
        $this->ajout_peint = $this->$couleur;
    }
}