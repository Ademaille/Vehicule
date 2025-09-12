<?php

include("Quatre_roues.class.php");

// abstract class Quatre_roues {
//     abstract public function ajouter_personne($poids_personne);    
// }


class Voiture extends Quatre_roues {

    // Attribut
    private $nombre_pneu_neige = 0;


    // Accesseurs
    public function getNombre_pneu_neige() {
        return $this->nombre_pneu_neige;
    }
    public function setNombre_pneu_neige($nombre_pneu_neige) {
        $this->nombre_pneu_neige = $nombre_pneu_neige;
    }

    // Méthodes
    public function ajouter_pneu_neige($nombre) {
        $this->nombre_pneu_neige += $nombre;
    }

    public function enlever_pneu_neige($nombre) {
        $this->nombre_pneu_neige -= $nombre;
    }

    // public function ajouter_personne($poids_personne) {

    // }
}