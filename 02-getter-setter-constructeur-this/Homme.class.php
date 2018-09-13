<?php

class Homme {

    private $prenom;
    private $nom;

    public function setPrenom($argument) {
        if(is_string($argument)) {
            if(strlen($argument) > 2 && strlen($argument) < 30) {
                $this -> prenom = $argument;
            }
        }
    }

    public function getPrenom() {
        return $this -> prenom;
    }

    public function setNom($nom) {
        $this -> nom = $nom;
    }

    public function getNom() {
        return $this -> nom;
    }
}
//------------
$homme = new Homme;
// $homme -> prenom = 'Lesly';  // Erreur : Impossible d'accéder à un élément private depuis l'extérieur de la classe.

$homme -> setPrenom('Lesly');
$homme -> setNom('Poujaud-Melot');

echo 'Bonjour '  .  $homme -> getPrenom() . '! <br>';
echo 'Nom : '  .  $homme -> getNom() . '! <br>';

/*
Commentaires :
    - Pourquoi faire des getters et des setters ?
    Le PHP est un langage qui ne type pas ses variables... Il faut donc constament vérifier l'intégrité des données. Mette une propriété en visibilité private, et donc passer par les accesseurs (getter/setter), permet de vérifier à un seul endroit (donc une seule fois) les données. 
    C'est une bonne contrainte !
    Tout dev' qui voudra affecter une valeur devra passer par le setter.

    $this : représente l'OBJET en cours de manipulation.

    Getter : Accéder !
    Setter : Affecter

    Nous aurons autant de getter et setter que de propriétés PRIVATE.        
*/

