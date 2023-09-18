<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
    <!-- <link rel="stylesheet" href="<?php echo $_SERVER["DOCUMENT_ROOT"]."/biblio_db/assets/css/style.css"; ?>"> -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <title>Register</title>
</head>
<body class="bg-success-subtle">
<div class="container">
    <form action="traitement/action.php" method="post">
 
        <div class="form-group link-danger">
            <label for="name">Name :</label>
            <input type="text" class="form-control border-success-subtle border-3 mt-3" id="name" name="name" >
        </div>
 
        <div class="form-group link-danger mt-3">
            <label for="email link-warning">Email :</label>
            <input type="email" class="form-control border-success-subtle border-3 mt-3" id="email" name="email" >
        </div>
 
        <div class="form-group link-danger mt-3">
            <label for="password link-light">Password :</label>
            <input type="password" class="form-control border-success-subtle border-3 mt-3" id="password" name="password" >
        </div>
      
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5 border-success-subtle border-3 mt-2 bg-success link warning" name="inscription" value="inscription">Inscription</button>
    </form>
</div>
</body>
</html>