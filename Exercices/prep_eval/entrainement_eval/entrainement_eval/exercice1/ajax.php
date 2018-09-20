<?php

require 'connexion.php';

//echo json_encode($_POST); // Pour vérifier que tout est bien récupérer dans ce fichier PHP. 

extract($_POST);
//$prenom = 'Yakine';
//$nom = 'HAMIDA';
//etc...

$resultat = $pdo -> prepare("INSERT INTO employes (prenom, nom, sexe, service, salaire) VALUES (:prenom, :nom, :sexe, :service, :salaire)");
// Methode 1 : Avec Bind Param
$resultat -> bindParam(':prenom', $prenom, PDO::PARAM_STR);
$resultat -> bindParam(':nom', $nom, PDO::PARAM_STR);
$resultat -> bindParam(':sexe', $sexe, PDO::PARAM_STR);
$resultat -> bindParam(':service', $service, PDO::PARAM_INT);
$resultat -> bindParam(':salaire', $salaire, PDO::PARAM_STR);

if($resultat -> execute()){
	$data['validation'] = 'OK';
}
else{
	$data['validation'] = 'Erreur';
}

echo json_encode($data);


// méthode 2 : Sans BindParam, directement dans execute()
//$resultat -> execute($_POST);






