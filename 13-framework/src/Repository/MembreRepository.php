<?php
// src/ Repository/ProduitRepository.php

namespace Repository;

use PDO;

class MembreRepository extends EntityRepository
{   
    // Tout le code de EntityRepositery est copié/collé ici

    public function getAllMemmbre() {
        return $this -> findAll();

    }

    public function getMembreById($id) {
        return $this -> find($id);
    }

    public function registerMembre($infos) {
       return $this -> register($infos);
    }

    public function updateMembre($id, $infos) {
        return $this -> update($id, $infos);
    }

    public function deleteMembre($id){
        return $this -> delete($id);
    }

    public function getMembreByPseudo($pseudo) {

        $requete = "SELECT * FROM membre WHERE pseudo = :pseudo";

        $resultat = $this -> getDb() -> prepare($requete);
        $resultat -> bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $resultat -> execute();

        $resultat -> setFetchMode(PDO::FETCH_CLASS, 'Entity\Membre');

        $data = $resultat -> fetch();
        if (!$data) {
            return false;
        }
        else {
            return $data;
        }

    }

    



}