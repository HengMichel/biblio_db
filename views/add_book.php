<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
    <title>Formulaire add Book</title>
</head>
<body class="bg-success">
    
    <div class="container">
        <form action="traitement/action.php" method="post">

            <div class="form-group link-warning">
            <label for="title">Title :</label>
            <input type="text" class="form-control border-danger border-3 mt-3" id="title" name="title" >
        </div>
        
        <div class="form-group link-warning mt-3">
            <label for="name link-light">Author :</label>
            <input type="text" class="form-control border-danger border-3 mt-3" id="author" author="author" name="author" >
        </div>
 
        <div class="form-group link-light">
            <label>Publication:</label>
            <input type="date" class="form-control border-success-subtle border-3 mt-3" name="publication" >
        </div>
     
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5 border-danger border-3 mt-2 bg-warning link-danger" name="add" value="submit">Add Book</button>
    </form>
</div>
</body>
</html>