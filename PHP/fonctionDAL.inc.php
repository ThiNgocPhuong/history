<?php
    include './db.inc.writer.php';
    function connexionDDB(){
        try {
            $connexion = new PDO('mysql:dbname='.BDD.';host='.HOST.';port='.PORT,LOGIN,PASSW);
            $connexion->exec("set name utf8");
            return $connexion;
        }catch(PDOException $e){
            throw new Exception('Connexion impossible !');
        }
    }

    function
?>