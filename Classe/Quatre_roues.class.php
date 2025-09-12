<?php

    class Quatre_roues extends Vehicule {
    // Les Attributs
    private $nombre_porte;
    private $couleur;
    private $poids;

    // public function __construct($couleur, $poids, $nombre_porte) {
    //     $this->couleur = $couleur;
    //     $this->poids = $poids;
    //     $this->nombre_porte = $nombre_porte;
    // }

    // Accesseurs
    public function getNombre_porte() {
        return $this->nombre_porte;
    }
    public function setNombre_porte($nombre_porte) {
        $this->nombre_porte = $nombre_porte;
    }
    
    // Méthodes
    public function ajout_porte($nombre_porte) {
        $this->nombre_porte = $nombre_porte;
    }

    public function repeindre($couleur) {
        $this->ajout_peint = $this->$couleur;
    }

    public function ajouter_personne($poids_personne) {
        $this->poids = $this->poids + $poids_personne;
    }
}