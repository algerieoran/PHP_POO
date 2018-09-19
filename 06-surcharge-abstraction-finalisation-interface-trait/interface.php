<?php

interface Mouvement {  // On utilise le mot clé 'interface' et non 'class'

    public function start();
    public function turnRight();
    public function turnLeft();
    // Dans une interface, les méthodes n'ont jamais de contenu (de corps)
}

class Bateau implements Mouvement {  // On utilise le mot clé 'implements' et non 'extends' pour les interfaces

    public function start() {  // Quand on 'implements' une interface on a obligation de redéfinir toutes les méthodes de l'interface.
    }

    public function turnRight() {
    }

    public function turnLeft() { 
    }
}

class Avion implements Mouvement {

    public function start() {
    }

    public function turnRight() {
    }

    public function turnLeft() {
    }
}

/*
    Commentaires :

    - Une interfce est une liste de méthode sans contenu, qui permet de garantir que toutes les classes vont implémenter l'interface contiendront les mêmes noms de méthodes.
    C'est une sorte de contrat qui est passé entre le lead dev' et les autres dev'. C'est un plan de fabrication d'une classe.

    - Une interface ne peut pas être instanciée
    - Une classe peut implémenter plusieurs interaces
    - Une classe peut à la fois 'extends' une classe mère et 'implements' une ou plusieur(s) interface(s).
    - Les méthodes d'une interface doivent forcément être 'public' sinon on ne peut pas les redéfinir. 
* /

