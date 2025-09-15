<?php

    class Quatre_roues extends Vehicule {
    // Les Attributs
    private $nombre_porte;

    public function __construct($couleur, $poids, $nombre_porte) {
        $this->setCouleur($couleur);
        $this->setPoids($poids);
        $this->nombre_porte = $nombre_porte;
    }

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
        $this->ajout_peint = $couleur;
    }

    public function ajouter_personne($poids_personne) {
        $this->setPoids($this->getPoids() + $poids_personne);
    }
}