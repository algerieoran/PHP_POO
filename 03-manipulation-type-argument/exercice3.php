<?php

/*

CONSIGNES :

0- Créer les getters et setters 
1- Création d'un véhicule
2- Attribuer un nombre de litre d'essence au véhicule (5L)
3- Afficher le nombre de litre d'essence dans le véhicule
4- La capacité max du réservoir du véhicule est de 50L (50)
5- creation d'une pompe
6- Attribuer un nombre de litre d'essence à la pompe (800L)
7- Afficher le nombre de litre d'essence dans la pompe
8- La pompe donne de l'essence au véhicule et fait le plein
9- Afficher le nombre de litre d'essence dans le véhicule après ravitaillement
*- Afficher le nombre de litre d'essence dans la pompe après ravitaillement!! Le véhicule ne peut pas recevoir plus que la capacité max de son réservoir !!
*/

class Vehicule {

    private $litre;
    private $reservoir;

    public function setLitre($litre) {
        $this -> litre = $litre;
    }
    public function getLitre() {
        return $this -> litre;
    }

    public function setReservoir($res) {
        $this -> reservoir = $res;
    }
    public function getReservoir() {
        return $this -> reservoir;
    }
}

class Pompe {

    private $litre;

    public function setLitre($litre) {
        $this -> litre = $litre;
    }
    public function getLitre() {
        return $this -> litre;
    }

    public function donneEssence(Vehicule $vehicule) {
        // modifier l'objet pompe ($this)
        // Le volume de litre dans pompe est maintenant égale à l'ancien volume moins (le reservoir de vehicule moins le nombre de litre dans vehicule)
        $this ->setLitre($this->getLitre()-($vehicule->getReservoir()-$vehicule->getLitre()));
        // 745 = 800 - (50 - 5)

        // modifier l'objet vehicule ($vehicule)
        // Le volume de $vehicule doit être = à la capacité max du reservoir de $vehicule
        $vehicule ->setLitre($vehicule->getReservoir());
        // 50 = 5 + (50 - 5)
        // 50 = 50
    }
}

//---------
$vehicule = new Vehicule;

$vehicule -> setLitre(5);

echo 'Le nombre de litre d\'essence dans le véhicule est : ' . $vehicule -> getLitre() . ' L !<br>';

$pompe = new Pompe;

$vehicule -> setReservoir(50);

echo 'La capacité max du reservoir du véhicule est : ' . $vehicule -> getReservoir() . ' L !<br>';

$pompe -> setLitre(800);

echo 'Le nombre de litre d\'essence dans la pompe est : ' . $pompe -> getLitre() . ' L !<br>';

$pompe -> donneEssence($vehicule);
echo 'Après ravitaillement<br>';
echo 'Le véhicule contient ' . $vehicule -> getLitre() . 'L <br>';
echo 'La pompe contient ' . $pompe -> getLitre() . 'L d\'essence <hr>';









