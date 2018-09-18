<?php
session_start ();

require_once(__DIR__ . '/../vendor/autoload.php');

$app = new Manager\Application;
$app -> run();

//index.php/ produit  /  afficheall
//index.php/ produit  /  affiche  / 12
//index.php/ produit  /  categorie  /  pull

//www.monsite.com/produit/afficheall

// $tab = explode('/', $_SERVER['REQUEST_URI']);

// echo '<pre>';
//     print_r ($tab);
// echo '</pre>';


//Test 1 : Entity
// $produit = new Entity\Produit;
// $produit -> setTitre ('Mon super Produit');
// echo $produit -> getTitre();

// $membre = new Entity\Membre;
// $membre -> setPseudo ('Setti');
// echo '<br>' . $membre -> getPseudo();


//Test 2 : PDOManager; (pour moi : acceder à la connexion)
// $pdo = Manager\PDOManager::getInstance () -> getpdo();
// $resultat = $pdo -> query("SELECT * FROM produit");
// $produits = $resultat -> fetchAll();
// echo '<pre>';
//     print_r($produits);
// echo '</pre>';


// Test 3 : EntityRepository
//ATTENTION : Pour tester ce fichier il faut simuler que l'on soit dans une entité particulière en précisant 'return Produit' (example) dans la fonction getTableName(), . Pour la suite on remettre la fonction dans son état initial.

// $er = new Repository\EntityRepository;
// $produits = $er -> findAll();
// $pdt = $er ->find(6);

// $newPdt = array(
//     'id_produit' => 12,
//     'reference' => '456',
//     'categorie' => 'pull',
//     'titre' => 'pull',
//     'description' => 'Super produit',
//     'couleur' => 'blanc',
//     'taille' => 'S',
//     'public' => 'm',
//     'photo' => '',
//     'prix' => 6000,
//     'stock' => 200
// );
// $er -> register ($newPdt);

// $newPdt2 = array(
//     'id_produit' => 11,
//     'reference' => '456',
//     'categorie' => 'pull',
//     'titre' => 'pull',
//     'description' => 'Super produit',
//     'couleur' => 'blanc',
//     'taille' => 'S',
//     'public' => 'm',
//     'photo' => '',
//     'prix' => 6000,
//     'stock' => 200
// );

// $er -> register ($newPdt2);
// //$er -> delete(10);
// //$produits = $er -> findAll();



// echo '<pre>';
//    print_r($produits);
//    print_r($pdt);
// echo '</pre>';


//Test 4 : ProduitRepository
// $pr = new Repository\ProduitRepository;

// $produits = $pr -> getAllProduit();
// $pdt = $pr -> getProduitById(12);

// $categories = $pr -> getAllCategorie();
// $produit_cat = $pr -> getAllProduitByCategorie('pull');

// echo '<pre>';
// print_r($produits);
// print_r($pdt);
// print_r($categories);
// print_r($produit_cat);
// echo '<pre>';


//Test 5 : ProduitController

// $pc = new Controller\ProduitController;
// //$pc -> afficheall();
// $pc -> affiche(12);

