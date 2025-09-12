<?php


include("./Classe/Vehicule.class.php");
include("./Classe/Voiture.class.php");
include("./Classe/Deux_roues.class.php");
include("./Classe/Camion.class.php");

// Instance
// $vehicule1 = new Vehicule("noir", 1500);
// $vehicule1->rouler();
// $vehicule1->ajouter_personne(70);
// echo "<br>Le nouveau poids du véhicule est : " . $vehicule1->getPoids();

// $vehicule2 = new Vehicule("verte", 1400);
// $vehicule2->ajouter_personne(130);
// echo "<br><br>La couleur du véhicule est " . $vehicule2->getCouleur() . " " . "et pèse " .  $vehicule2->getPoids();

// $voiture = new Voiture("rouge", "", "");
// $voiture->ajouter_pneu_neige(2);
// echo "<br>La voiture est " . $voiture->getCouleur() . " " . "et elle a " . $voiture->getNombre_pneu_neige() . " " . "pneus neige";

// $moto = new Deux_roues("noir", 120);
// $moto->ajouter_personne(80);
// $moto->mettre_essence(20);
// echo "<br>Le deux roues est de couleur " . $moto->getCouleur() . " " . "pèse" . " " . $moto->getPoids() . " ". "kg";

$camion = new Camion("bleu", 10000, "");
$camion->longueur_camion(10); 
$camion->ajout_porte(2);
$camion->ajouter_remorque(5);
$camion->ajouter_personne(80);
echo 
"<br>Le camion est de couleur " . $camion->getCouleur() . " " . "pèse" . " " . $camion->getPoids() . " " . "kg, <br>avec une longueur de" . " " . 
$camion->getLongueur() . " " . "metres, avec" . " " . $camion->getNombre_porte() . " " . "portes";

$moto2 = new Deux_roues("rouge", 150);
$moto2->ajouter_personne(70);
$moto2->setCouleur("verte");
$moto2->setCylindree(1000);
Vehicule::afficher_attribut($moto2);

$camion2 = new Camion("blanc", 6000, "");
$camion2->ajouter_personne(84);
$camion2->setCouleur("bleu");
$camion2->ajout_porte(2);
Vehicule::afficher_attribut($camion2);

// $QuatreRoue = new Quatre_roues("bleu", 2000, 3);
// if ($poids >= 1500 && $nombre_pneu_neige <= 2) {
//         return "<br>Attention, veuillez mettre 4 pneus neige.";
// }