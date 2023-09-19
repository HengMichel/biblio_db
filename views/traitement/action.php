<?php 
session_start();
require_once "../../models/userModel.php";
require_once "../../models/bookModel.php";

if(isset($_POST['inscription'])){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // hasher le mot de passe
    $passwordHash = password_hash($password,PASSWORD_DEFAULT);

    // appeler la méthode inscription de la classe User
    // la méthode inscription étant static donc utilise le nom de la classe suivit de "::" 
    // ensuite le nom de la méthode qui est inscription
    User::inscription($name,$email,$passwordHash);
}

if(isset($_POST['login'])){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

     // appeler la méthode connexion de la classe User
    // la méthode connexion étant static donc utilise le nom de la classe suivit de "::"
    //  ensuite le nom de la méthode qui est connexion
    User::connexion($email,$password);
}

// pour l'ajout d'un book
if(isset($_POST['add'])){
    $title = htmlspecialchars($_POST['title']);
    $author = htmlspecialchars($_POST['author']);
    $publication = htmlspecialchars($_POST['publication']);

    Book::addBook($title,$author,$publication);
}

// pour l'emprunt d'un livre
if(isset($_GET['book'])){

    // indentifiant du livre à emprunter 
    $book = $_GET['book'];

    // on récupère l'identifiant de l'utilisateur connecté
    $id_user = $_COOKIE['id_user'];

    // appel de la méthode borrowBook
    Book::borrowBook($id_user,$book);             
}
// pour rendre un livre
if(isset($_GET['borrow'])){

    // indentifiant de l' emprunter 
    $borrow = $_GET['borrow'];
    $borrow = $_GET['bookId'];

    // appel de la méthode returnBook
    Book::returnBook($borrow, $bookId);             
}
?>