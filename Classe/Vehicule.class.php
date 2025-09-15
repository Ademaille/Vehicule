<?php

    abstract class Vehicule {
    
    // Attributs
    private $couleur;
    private $poids;
    static protected $nombre_changement_couleur = 0;

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
        self::$nombre_changement_couleur = self::$nombre_changement_couleur + 1;
    }

    public function getPoids() {
        return $this->poids;
    }
    public function setPoids($poids) {
        if($poids > 2100) {
            $this->poids = 2100;
        } else {
            $this->poids = $poids;
        }
         
    }
    
    // Methodes
    public function rouler(){
    }

    const SAUT_DE_LIGNE = "<br>";

    abstract public function ajouter_personne($poids_personne);

    public static function afficher_attribut($objet){
        if(method_exists($objet, "getPoids")) {
            echo "<br><br>Le véhicule pèse " . $objet->getPoids() . " " . "kg";
        }

        if(method_exists($objet, "getCouleur")) {
            echo "<br>Le véhicule est de couleur " . $objet->getCouleur();
        }

        if(method_exists($objet, "getCylindree")) {
            echo "<br>Le véhicule à une cylindrée de " . $objet->getCylindree();
        }

        if(method_exists($objet, "getNombre_porte")) {
            echo "<br>Le véhicule à " . $objet->getNombre_porte() . " " . "portes";
        }
        
        echo "<br>La couleur a était changée " . self::$nombre_changement_couleur . " fois";
    }
}
    
