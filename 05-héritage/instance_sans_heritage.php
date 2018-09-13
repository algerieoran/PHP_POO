<?php

class C {}
//---------
class A {

    public function bonjour () {
        return 'Bonjour';
    }
}
//--------
class B extends C { // B n'hérite pas de A 

    public $maVariable;  // contient un objet de la classe A

    public function __construct () {
        $this -> maVariable = new A;

    }
}
//-------
$b = new B;
echo $b -> maVariable -> bonjour();
// $maVariable = new A;
// $maVariable -> bonjour();
// objet a -> bonjour();


/*
Commentaires :
    - Nous avons un objet dans un objet, d'où l'utilisation de deux flèches successivement ($x -> methode())

    - L'intérêt d'avoir une instance sans héritage (récupérer un objet dans la propriété d'une classe) est de pouvoir hériter d'une classe mère d'un côté, tout en ayant la possibilité de récupérer les éléments d'une autre classe en même temps.

*/
