<?php

    class Animal {

        public function manger() {
            return 'Je mange !';
        }

        protected function deplacement() {
            return 'Je me déplace !';
        }
    }
// ----------
class Elephant extends Animal {  // Extends signifie que la classe Elephant hérite de la classe Animal

    public function quiSuisJe() {
        return 'Je suis un éléphant  et ' . $this -> deplacement ();
    }
}
//-----------
class Chat extends Animal {

    public function quiSuisJe() {
        return 'Je suis un chat';
    }

    public function manger() {
        return 'Je mange peu !';
    }
    // Redéfinition de la méthode manger()
}
//--------
// Elephant :
$eleph = new Elephant;
echo 'Elephant > ' . $eleph -> manger() . '<br>';
echo 'Elephant > ' . $eleph -> quiSuisJe() . '<br><hr>';

// Chat :
$chat = new Chat;
echo 'Chat > ' . $chat -> manger() . '<br>';
echo 'Chat > ' . $chat -> quiSuisJe() . '<br>';

/* 
Commentaires :

    - L'héritage est l'un des fondements de la programmation en objet.
    - Lorsqu'une classe hérite d'une autre classe, c'est comme si tout le code était importé. Les éléments (Non private) sont donc accessibles avec $this ->

    - Redéfinition : une classe enfant (héritière) peut modifier le comportement global d'une méthode dont elle a hérité.
    - Surcharge : une classe enfant (héritière) peut modifier en partie le comportement d'une méthode dont elle a hérité (voir chapitre 06 - fichier surcharge.php)
    /!\ redéfinition != surcharge

    Dans le cas de l'héritage, l'interprêteur va regarder dans la classe enfant si les méthodes exécutées existent, et s'il ne les trouve pas, il regarde dans la classe parente.
*/

