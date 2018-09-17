<?php
//src/Controller/ProduitContrller.php

namespace Controller;

class ProduitController extends Controller
{

    public function afficheall() {

        //1 : Je récupère les infos dont j'ai besoin
        $produits = $this -> getRepository() -> getAllProduit();
        $categories = $this -> getRepository() -> getAllCategorie();

        //2 : J'envoie la vue correspondante
        require __DIR__ . '/../View/Produit/boutique.php';

    }


    public function affiche($id) {
        
    }

    public function categorie($cat) {
        
    }


}
