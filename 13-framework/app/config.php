<?php
//app/config.php

class Config 
{
    protected $parameters;

    public function __construct() {
        require __DIR__ . '/Config/parameters.php';
        $this -> parameters = $parameters;
        // Lorsque j'instancie cette classr, je récupère automatiquement le fichier parameters et je stocke la variable $parameters dans la propriété parameters
    }

    public function getParametersConnect () {
        return $this -> parameters ['connect'];
        // cette fonction va retourner seulement la partie 'connect' de parameters
    }
}
//----------------
// $config = new Config;
// echo '<pre>';
// print_r ($config -> getParametersConnect());
// echo '</pre>';
