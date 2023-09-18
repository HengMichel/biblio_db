<?php
 class Database{
    // une méthode static est une méthode qu'on peut éxécuter sans instancier
    // ex:   $db = dbConnexion();
    //  la classe dans laquel elle est implémentée
    public static function dbConnect(){
        $conn = null;
        try {
            $conn = new PDO("mysql:host=localhost;dbname=biblio_db","root","");
        } catch (PDOException $e) {
            $conn = $e->getMessage();
        }
        return $conn;
    }
 } 
