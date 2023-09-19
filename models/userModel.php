<?php 
require_once  $_SERVER["DOCUMENT_ROOT"]."/biblio_db/models/database.php";

class User{
    
    //  méthode pour s'inscrire
    public static function inscription($name,$email,$password){

        // connexion à la base de donnée
        $db = Database::dbConnect();

        // préparation de la requête
        $request = $db->prepare("INSERT INTO users (name,email,password) VALUES(?,?,?)");
        
        // éxécuter la requête
        try {
            $request->execute(array($name,$email,$password));
            // rediriger vers la page login.php
            header("Location: http://localhost/biblio_db/login");
        } catch (PDOException $e) {
            echo $e->getMessage();
            
        }

    }
    //  méthode pour se connecter
     public static function connexion($email,$password){

        // se connecter à la base de donné
        $db = Database::dbConnect();

        // preparer la requête
        $request = $db->prepare("SELECT * FROM users WHERE email = ?");

        // éxécuter la requête
        try {
            $request->execute(array($email));

            // récupérer le résultat de la requête dans un tableau
            $user = $request->fetch();

            // vérifier si le mot de passe est correct
            if(empty($user)){

                // header("Location: http://localhost/biblio_db/login");
                $_SESSION["error_message"] = "email inconnu";

                // HTTP_REFERER permet de rafrichir la page puisque pour 
                // l'instant on ne récupère pas les données saisies
                header("Location:".$_SERVER['HTTP_REFERER']);

            }else if(password_verify($password,$user['password'])){

                // il a taper le bon email et le bon mdp 
                setcookie("id_user",$user['id_user'],time()+86400,"/","localhost",false,true);
                // version avec $_SESSION
                // $_SESSION["id_user"] = $user["id_user"];


                setcookie("user_role",$user['role'],time()+86400,"/","localhost",false,true);
                // version avec $_SESSION
                // $_SESSION["id_role"] = $user["role"];

                header("Location: http://localhost/biblio_db/list_book");

            }else{
                $_SESSION["error_message"] = "mot de passe incorrect ";

                 // l'instant on ne récupère pas les données saisies
                 header("Location:".$_SERVER['HTTP_REFERER']);
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
     }

    //  méthode pour se déconnecter
     public static function logout(){

     }

    //  méthode pour avoir l'historique des emprunters d'un membre
     public static function borrowLog($idUser){

         // se connecter à la base de donné
         $db = Database::dbConnect();

        //  préparer la requête
        $request = $db->prepare("SELECT id_borrow, user_id, book_id, id_book, start_date, end_date, title FROM borrows, books WHERE borrows.book_id = books.id_book AND user_id= ?");

        // éxécuter la requête
        try {
            $request->execute(array($idUser));

            // récupérer le résultat dans un tableau
            $borrowList = $request->fetchAll();
            return $borrowList;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

     }
    
     //  méthode pour se désinscrire
     public static function deleteAccount(){

     }
}
?>