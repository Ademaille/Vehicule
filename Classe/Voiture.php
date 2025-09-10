<?php

include("Quatre_roues.php");

class Voiture extends Quatre_roues {
    private $nombre_pneu_neige = 4;

    public function ajouter_pneu_neige($nombre) {
        $this->ajout_neige = $this->$nombre;
    }

    public function enlever_pneu_neige($nombre) {
        $this->enlever_neige = $this->$nombre;
    }
}