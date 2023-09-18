<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
    <title>Login</title>
</head>
<body class="bg-success-subtle">
<div class="container">
    <form action="traitement/action.php" method="post">
 
        <div class="form-group link-warning mt-3">
            <label for="email link-light">Email :</label>
            <input type="email" class="form-control border-success-subtle border-3 mt-3 link-warning" id="email" name="email" >
        </div>
 
        <div class="form-group link-warning mt-3">
            <label for="password link-light">Password :</label>
            <input type="password" class="form-control border-success-subtle border-3 mt-3" id="password" name="password" >
        </div>

        <?php if(isset($_SESSION['error_message'])){?>

            <p style="color: red"><?= $_SESSION['error_message']; ?></p>

        <?php unset($_SESSION['error_message']);} ?>

<!-- 
        <?php if(isset($_SESSION['error_message'])){?>
        <p style="color:red;"><?= $_SESSION['error_message'];?></p>
        <?php session_destroy();}?> -->

        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5 border-success-subtle border-3 mt-2 bg-success link-warning" name="login" value="login">Se connecter</button>
    </form>
</div>
</body>
</html>