<?php

// Surcharge (Override) : L'idée de modifier en partie le comportement d'une méthode héritée.
// Surcharge != redéfinition

class A {

    public function calcul() {
        return 10;
    }
}

class B extends A { // B hérite de A

    public function calcul() {
        // return 15;
        return parent::calcul() + 5;
        // OK. permet d'appeler le comportement de la méthode calcul() telle que définie dans la classe parente.
    }
}
//---------
$b  = new B;
echo $b -> calcul();

/*
Commentaires :
    - La surcharge est une notion importante car elle permet de modifier le comportement d'une fonction héritée. Exemple : on souhaite modifier le comportement d'une fonctiondéclarée dans le coeur de l'application sans avoir à "toucher" au coeur de l'application directement.
*/