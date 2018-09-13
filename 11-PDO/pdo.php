<?php
// Ce fichier est un rappel du PHP procédural (celui qu'on a fait avec Christophe)

/* Les différentes fonctions pour exécuter une requête :

query() : - SELECT + SHOW
          - Succès : PDOStatement (obj)
          - Echec : FALSE (Bool)

exec() :  - INSERT - DELETE - REPLACE - UPDATE
          - Succès : X (int) correspond au nombre d'enregistrement affectés par la requête.
          - Echec : FALSE (bool)

prepare() + execut() :
          - Dès qu'on a une info sensible (GET / POST) dans la requête.
          -> prepare() :
            - Succès : PDOStatement (obj)
            - Echec : False (Bool)
          -> execute() :
            - Succès : True (Bool)
            - Echec : False (Bool)
*/

// 1 : Connexion sans avertissement d'erreur :
// $pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '');
// $resultat = $pdo -> query("jgdljghdlrjghdh");
// // les erreurs SQL ne s'affichent pas.

// // 2 : Connexion avec avertissement en mode erreur Warning :
// $pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
// ));
// $resultat = $pdo -> query("jgdljghdlrjghdh");

// 3 : Connexion avec avertissement en mode erreur Exception :
$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));


try {
    // $resultat = $pdo -> query("jkdjfdjhldhsl");

    $prenom = 'Amandine';
    $nom = 'Thoyer';

    // marqueur ? :
    $resultat = $pdo -> prepare("SELECT * FROM employes WHERE prenom = ? AND nom = ?");
    $resultat -> execute(array(
        $prenom,
        $nom
    ));

    // marqueur nominatif ':' :
        $resultat = $pdo -> prepare("SELECT * FROM employes WHERE prenom = :prenom AND nom = :nom");
        $resultat -> execute(array(
            ':nom' => $nom,
            ':prenom' => $prenom
        ));
        
        // marqueur nominatif ':' + bindparam()
        $resultat = $pdo -> prepare("SELECT * FROM employes WHERE prenom = :prenom AND nom = :nom");
        $resultat -> bindparam(':prenom', $prenom,  PDO::PARAM_STR);
        $resultat -> bindparam(':nom', $nom,  PDO::PARAM_STR);
        //$resultat -> bindparam(':telephone', $telephone,  PDO::PARAM_INT);
        $resultat -> execute();

        // Fetch vs FetchAll (requête select avec plusieurs résultats)
        // Fetch
    $resultat = $pdo -> query ("SELECT * FROM employes");
    // $resultat = OBJ PDOStatement
    // $resultat = INEXPLOITABLE
    // Combien de résultat à la reqête : PLUSIEURS =====> Boucle
    
    while($employes = $resultat -> fetch (PDO::FETCH_ASSOC)) {
        echo '<ul>';
        foreach($employes as $valeur){
            echo '<li>' . $valeur . '</li>';
        }
        echo '</ul>';
    }

     //FetchAll :
     $resultat = $pdo -> query ("SELECT * FROM employes");
     // $resultat = OBJ PDOStatement
     // $resultat = INEXPLOITABLE
     //Un ou plusieurs résultats à la reqête : PLUSIEURS =====> Boucle ou FetchAll
     $employes = $resultat -> FetchAll (PDO::FETCH_ASSOC);
         echo '<pre>';
             print_r($employes);
         echo '</pre>';
   
         foreach($employes as $emp) {
             echo '<h3>' . $emp['prenom'] . '</h3>';
             echo '<ul>';
             foreach($emp as $valeur){
                 echo '<li>' . $valeur . '</li>';
             }
             echo '</ul>';
         }
    
}



        catch(PDOException $e) {
        echo '<div style="background:red;padding: 10px; color: white">';
        echo 'Erreur SQL : <br>';
        echo 'Erreur : ' . $e -> getMessage() . '<br>';
        echo 'Fichier : ' . $e -> getFile() . '<br>';
        echo 'Ligne : ' . $e -> getLine() . '<br>';
        echo '</div>';

        $f = fopen('erreur.txt', 'a');
        $ligne = 'Erreur SQL : ' . date('d/m/Y h:i:s') . '<br>' . "\r\n";  // "\r\n" permet de passer à la ligne dans le code source
        fwrite($f, $ligne);
        exit;
    }
