<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
    <title>header</title>
</head>
<body class="bg-primary-subtle">


    <nav class="navbar navbar-expand-lg bg-danger-subtle mb-5 ">
            <div class="container-fluid "> 

                <?php if(isset($_COOKIE['user_role']) && $_COOKIE['user_role']=="admin") {?>
                    <a class="navbar-brand  fw-bold link-success" href="http://localhost/biblio_db/add_book">Add Book</a>
                
                <?php }else{?>
                    <a class="navbar-brand  fw-bold bg-success-subtle link-success" href="http://localhost/biblio_db/logs">Log</a>
                    <?php } ?> 

            </div>
    </nav>

<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5 ">
        <div class="container-fluid ">
            <a class="navbar-brand table-group-divider fw-bold" href="">Home</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarText">

              <ul class="navbar-nav  mb-2 mb-lg-0">
                <li class="nav-item">
                <?php if(isset($_COOKIE['user_role']) && $_COOKIE['user_role']=="admin") {?>
                  <a class="nav-link active form-check-inline fw-bolder" aria-current="page" 
                  href="http://localhost/biblio_db/add_book">
                  Add Book</a>
                </li>
                <?php }else{?>
                <li class="nav-item">
                  <a class="nav-link fw-bolder" 
                  href="http://localhost/biblio_db/logs">Log</a>
                </li>         
                <?php } ?> 
              </ul>
              
            </div>
        </div>
</nav> -->