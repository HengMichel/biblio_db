<?php 
// session_start();

// version cookie
if(isset($_COOKIE['user_role'])){
    echo "Bienvenue ".$_COOKIE['user_role'];

    // version session
    // if(isset($_SESSION['user_role'])){
    //     echo  "Bienvenue ".$_SESSION['user_role'];
    // }
}


?>  