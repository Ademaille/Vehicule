<?php

include("./Classe/Vehicule.class.php");
include("./Classe/Voiture.class.php");
include("./Classe/Deux_roues.class.php");
include("./Classe/Camion.class.php");


$vehicule1 = new Vehicule("noir", 1500);
$vehicule1->rouler();
$vehicule1->ajouter_personne(70);
echo "Le nouveau poids du véhicule est : " . $vehicule1->getPoids();

$vehicule2 = new Vehicule("verte", 1400);
$vehicule2->ajouter_personne(130);
echo "<br>La couleur du véhicule est " . $vehicule2->getCouleur() . " " . "et pèse " .  $vehicule2->getPoids();

$vehicule3 = new Voiture("rouge", "");
$vehicule3->ajouter_pneu_neige(4);
echo "<br>La voiture est " . $vehicule3->getCouleur() . " " . "et elle a " . $vehicule3->getNombre_pneu_neige() . " " . "pneus neige";

$vehicule4 = new Deux_roues("noir", 120);
$vehicule4->ajouter_personne(80);
$vehicule4->mettre_essence(20);
echo "<br>Le deux roues est de couleur " . $vehicule4->getCouleur() . " " . "pèse" . " " . $vehicule4->getPoids() . " ". "kg";

$vehicule5 = new Camion("bleu", 10000);
$vehicule5->longueur_camion(10); 
$vehicule5->ajout_porte(2);
$vehicule5->ajouter_remorque(5);
$vehicule5->ajouter_personne(80);
echo 
"<br>Le camion est de couleur " . $vehicule5->getCouleur() . " " . "pèse" . " " . 

$vehicule5->getPoids() . " " . "kg, avec une longueur de" . " " . 

$vehicule5->getLongueur() . " " . "metres, avec" . " " . $vehicule5->getNombre_porte() . " " . "portes";