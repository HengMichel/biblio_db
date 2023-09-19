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
<body class="bg-warning-subtle d-flex flex-wrap d-sm-inline-flex">
    <?php foreach($listBook as $book) { ?> 



        <!-- <div class="container border-success-subtle border-3 mt-2 link-danger bg-warning">
            <div class="book border-success-subtle border-3 mt-2">
                <h1><?= $book['title'];?></h1>
                <h2><?= $book['author'];?></h2>
                <p><?= $book['publication'];?></p>
            </div>
        </div> -->


        <div class="container d-flex flex-wrap justify-content-around  border-danger bg-primary-subtle  " >

            <div class="card mt-5 m-3 w-25 border-warning mb-5" style="width: 28rem;">

                <div class="card-body bg-danger-subtle link-success-subtle" >
                    <h1 class="card-title mt-2 link-success "><?= $book['title'];?></h1>           
                    <h2 class="card-title mt-2 link-danger"><?= $book['author'];?></h2>
                    <p class="card-text link-warning fw-semibold"><?= $book['publication'];?></p>

                    <?php if($book['state'] == "available"){ ?>
                    <a href="traitement/action.php?book=<?=$book['id_book'];?>">Borrow this book</a>
                    <?php } ?>
                
                </div>
            </div>
    
        </div>








    <?php } ?>
</body>
</html>