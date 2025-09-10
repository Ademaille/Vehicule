<?php

include("./Classe/Vehicule.class.php");

$vehicule1 = new Vehicule("noir", 1500);
$vehicule1->rouler();
$vehicule1->ajouter_personne(70);
echo "Le nouveau poids du véhicule est : " . $vehicule1->getPoids();

    