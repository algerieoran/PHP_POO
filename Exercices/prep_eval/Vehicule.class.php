<?php

class Vehicule {
    private $Marque;
    private $Modele;
    private $annee;
    private $couleur;
    private $km;

    // Getter et setter de Marque :
    public function setMarque($arg) {
        if(is_string($arg)) {
            if(strlen($Marque) >= 3 && strlen($arg) <= 30) {
                $this -> Marque = $Marque;
            }
        }
    }

    public function getMarque() {
        return $this -> Marque;
    }

    // Getter et setter de Modele :
    public function setModele($Modele) {
        if(is_string($Modele)) {
            if(strlen($Modele) > 3 && strlen($Modele) < 30) {
                $this -> Modele = $Modele;
            }
        }
    }

    public function getMarque() {
        return $this -> Marque;
    }

    // Getter et setter de annee :
    public function setannee($annee) {
        if(is_int($annee)) {
            if(strlen($annee) == 4) {
                $this -> Marque = $Marque;
            }
        }
    }

    public function getMarque() {
        return $this -> Marque;
    }


    // Getter et setter de couleur :
    public function setcouleur($couleur) {
        if(is_string($couleur)) {
            if(strlen($couleur) > 3 && strlen($couleur) < 30) {
                $this -> couleur = $couleur;
            }
        }
    }

    public function getcouleur() {
        return $this -> couleur;
    }






}