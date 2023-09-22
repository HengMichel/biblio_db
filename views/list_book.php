<?php 
// session_start();

// version cookie
// if(isset($_COOKIE['user_role'])){
//     echo "Bienvenue ".$_COOKIE['user_role'];

    // version session
    // if(isset($_SESSION['user_role'])){
    //     echo  "Bienvenue ".$_SESSION['user_role'];
    // }
// }

require_once "inc/nav.php";
require_once "../models/bookModel.php";
$listBook = Book::listBook();
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
    <title>Document</title>
</head>
<!-- <?php require_once "inc/nav.php"; ?>  pour le css-->
<body class="bg-warning-subtle">

    <div class="container d-flex flex-wrap justify-content-around  border-danger bg-success-subtle  " >
        <div class="row">
            <?php foreach($listBook as $book) { ?>

                <!-- Utilisez la classe col-* pour définir la largeur de chaque carte -->
                <div class="col-4 mb-3"> 
    
                     <div class="card border-warning" style="width: 100%;">
                        <div class="card-body bg-danger-subtle link-success-subtle" >
                            <h1 class="card-title link-success "><?= $book['title'];?></h1>           
                            <h2 class="card-title link-danger"><?= $book['author'];?></h2>
                            <p class="card-text link-warning fw-semibold"><?= $book['publication'];?></p>
                            <?php if($book['state'] == "available"){ ?>
                            <a class=" btn btn-info bg-success link-warning border-warning" href="traitement/action.php?book=<?=$book['id_book'];?>">Borrow this book</a>
                            <?php } ?>    
                        </div>
                    </div>
                </div>
        
            <?php } ?>
        </div>
    </div>
</body>
</html>