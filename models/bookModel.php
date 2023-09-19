<?php 
require_once  $_SERVER["DOCUMENT_ROOT"]."/biblio_db/models/database.php";

class Book{
    public static function addBook($title,$author,$publication){

        // se connecter à la data base
        $db = Database::dbConnect();

        // préparer la requête
        $request = $db->prepare("INSERT INTO books (title,author,publication) VALUES (?,?,?)");

        // éxécution de la requête
        try {
            $request->execute(array($title,$author,$publication));

            header("Location: http://localhost/biblio_db/list_book");

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }
    // méthode pour récupérer la liste des livres

    public static function listBook(){

        // se connecter à la data base
        $db = Database::dbConnect();

        // préparer la requête
        $request = $db->prepare("SELECT * FROM books ");

        // éxécution de la requête
        try {
            $request->execute();

            // récupérer le résultat de la requête dans un tableau listBook
            $listBook = $request->fetchAll();
            return $listBook;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }
    // methode pour emprunter un livre
    public static function borrowBook($user,$book){

         // se connecter à la data base
         $db = Database::dbConnect();

         // préparer la requête
         $request = $db->prepare("INSERT INTO borrows(start_date, user_id, book_id) VALUES (NOW() ,?,?)");

         // éxécution de la requête
        try {
            $request->execute(array($user,$book));

            // requête pour mettre le statut du livre à unavailable
            $request1 = $db->prepare("UPDATE books SET state = ? WHERE id_book = ?");

            // éxécution de la requête
            try {
                $request1->execute(array("unavaible", $book));
                header("Location: http://localhost/biblio_db/logs");
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

 
    }
    // methode pour rendre un livre
    public static function returnBook($borrow, $bookId){

         // se connecter à la data base
         $db = Database::dbConnect();

         // préparer la requête
         $request = $db->prepare("UPDATE borrows SET end_date = NOW() WHERE id_borrow = ?");

         // éxécution de la requête
        try {
            $request->execute(array($borrow));

            // requête pour mettre à jour le statut du livre à available
            $request1 = $db->prepare("UPDATE books SET state = ? WHERE id_book = ?");

            // éxécution de la requête
            try {
                $request1->execute(array("avaible", $bookId));
                header("Location: http://localhost/biblio_db/logs");
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

 
    }
}
?>