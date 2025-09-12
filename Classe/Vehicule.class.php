<?php

    abstract class Vehicule {
    
    // Attributs
    private $couleur;
    private $poids;

    public function __construct($couleur, $poids) {

        $this->couleur = $couleur;
        $this->poids = $poids;
    }

    // Accesseurs
    public function getCouleur() {
        return $this->couleur;
    }
    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function getPoids() {
        return $this->poids;
    }
    public function setPoids($poids) {
        $this->poids = $poids;
    }
    
    // Methodes
    public function rouler(){

    }

    abstract public function ajouter_personne($poids_personne);

    public static function afficher_attribut($Vehicule){
        if(method_exists($Vehicule, "getPoids")) {
            echo "<br><br>Le véhicule pèse " . $Vehicule->getPoids() . " " . "kg";
        }

        if(method_exists($Vehicule, "getCouleur")) {
            echo "<br>Le véhicule est de couleur " . $Vehicule->getCouleur();
        }

        if(method_exists($Vehicule, "getCylindree")) {
            echo "<br>Le véhicule à une cylindrée de " . $Vehicule->getCylindree();
        }

        if(method_exists($Vehicule, "getNombre_porte")) {
            echo "<br>Le véhicule à " . $Vehicule->getNombre_porte() . " " . "portes";
        }
    }
}
    
