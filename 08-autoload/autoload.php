<?php

function inclusion_automatique($className) {
    // $className contiendra le nom de la classe instanciée
    // exemple : Membre

    require 'class' . $className . '.php';
    // require 'classMembre.php'

    echo 'On passe dans l\'autoload<br>';
    echo 'On fait un require "class' . $className . '.php";<br>';
}

// ------------------------
spl_autoload_register('inclusion_automatique');
// ------------------------
/*
Commentaires :
    spl_autoload_register :
        - Est une fonction super pratique.
        - Elle va s'exécuter à chaque fois que l'interprêteur voit passer le mot 'new'.
        - Elle va exécuter une fonction dont on lui a transmis le nom en argument.
        - Elle va apporter en argument de notre fonction, le mot qu'elle trouve après 'new' (sous entendu le nom de la classe)

        $a = new Membre;
        classMembre.php
*/