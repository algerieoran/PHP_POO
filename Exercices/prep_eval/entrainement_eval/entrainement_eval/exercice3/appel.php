<?php

require 'Vehicule.class.php';

$clio = new Vehicule;
$clio -> setMarque('Renault');
$clio -> setModele('clio');
$clio -> setCouleur('gris');
$clio -> setAnnee(2015);
$clio -> setKm(145000);


$golf = new Vehicule;
$golf -> setMarque('Volkswagen');
$golf -> setModele('golf');
$golf -> setCouleur('blanc');
$golf -> setAnnee(2006);
$golf -> setKm(225000);

$cayenne = new Vehicule;
$cayenne -> setMarque('Porsche');
$cayenne -> setModele('cayenne');
$cayenne -> setCouleur('noir');
$cayenne -> setAnnee(2018);
$cayenne -> setKm(5000);

$ds3 = new Vehicule;
$ds3 -> setMarque('DS');
$ds3 -> setModele('DS3');
$ds3 -> setCouleur('rouge');
$ds3 -> setAnnee(2012);
$ds3 -> setKm(75000);

//exemple en utilisant une fonction construct()
//$ds3 = new Vehicule('Citroen', 'ds3', 'rouge', 2012, 75000);


//-----------------

echo '<h1> Dans mon garage, j\'ai :</h1>';

$infoClio = $clio -> getInfos();
echo '<h3>' . $infoClio['modele'] . '</h3>';
echo '<ul>';
foreach($infoClio as $indice => $valeur){
	echo '<li>' . $indice . ' : ' . $valeur . '</li>';
}
echo '</ul><hr/>';


$infoGolf = $golf -> getInfos();
echo '<h3>' . $infoGolf['modele'] . '</h3>';
echo '<ul>';
foreach($infoGolf as $indice => $valeur){
	echo '<li>' . $indice . ' : ' . $valeur . '</li>';
}
echo '</ul><hr/>';


$infoCayenne = $cayenne -> getInfos();
echo '<h3>' . $infoCayenne['modele'] . '</h3>';
echo '<ul>';
foreach($infoCayenne as $indice => $valeur){
	echo '<li>' . $indice . ' : ' . $valeur . '</li>';
}
echo '</ul><hr/>';


$infoDs3 = $ds3 -> getInfos();
echo '<h3>' . $infoDs3['modele'] . '</h3>';
echo '<ul>';
foreach($infoDs3 as $indice => $valeur){
	echo '<li>' . $indice . ' : ' . $valeur . '</li>';
}
echo '</ul><hr/>';
