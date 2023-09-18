<?php 
session_start();
require_once "../../models/userModel.php";

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

?>