<?php
session_start ();

require_once(__DIR__ . '/../vendor/autoload.php');

// $app = new Manager\Application;
// $app -> run();


//Test 1 : Entity
// $produit = new Entity\Produit;
// $produit -> setTitre ('Mon super Produit');
// echo $produit -> getTitre();

// $membre = new Entity\Membre;
// $membre -> setPseudo ('Setti');
// echo '<br>' . $membre -> getPseudo();


//Test 2 : PDOManager;
$pdo = Manager\PDOManager::getInstance () -> getpdo();
$resultat = $pdo -> query("SELECT * FROM produit");
$produits = $resultat -> fetchAll();
echo '<pre>';
    print_r($produits);
echo '</pre>';

