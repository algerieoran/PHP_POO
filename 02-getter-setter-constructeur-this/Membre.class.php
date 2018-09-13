<?php


// Consignes : Au regard de la classe ci-dessous, veuillez affecter des valeurs à $pseudo et $email et les afficher dans la page.

class Membre {

    private $pseudo;
    private $email;

    // Getter et setter de Pseudo :
    public function setPseudo($pseudo) {
        if(is_string($pseudo)) {
            if(strlen($pseudo) > 2 && strlen($pseudo) < 20) {
                $this -> pseudo = $pseudo;
            }
        }
    }

    public function getPseudo() {
        return $this -> pseudo;
    }

    // Getter et sette de Email : 
    public function setEmail($email) {
        if(FILTER_VAR($email, FILTER_VALIDATE_EMAIL)) {
            $this -> email = $email;
        }
    } 

    public function getEmail() {
        return $this -> email;
    }
}


$membre = new Membre;

$membre -> setPseudo('Lyly');
$membre -> setEmail('lesly.p-m@live.fr');

echo 'Pseudo : '  .  $membre -> getPseudo() . '<br>';
echo 'Email : '  .  $membre -> getEmail() . '<br>';