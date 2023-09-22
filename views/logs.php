<?php 
require_once "../models/userModel.php";
require_once "inc/nav.php";
$borrowList = User::borrowLog($_COOKIE['id_user']);
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
<body>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th class="id bg-danger-subtle link-success">Id </th>
                <th class="startDate bg-danger-subtle link-success">Start Date</th>
                <th class="enDate bg-danger-subtle link-success">End Date</th>
                <th class="title2 bg-danger-subtle link-success">Title</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($borrowList as $borrow){ ?>
                <tr>
                    <td class="id border-success-subtle border-3 mt-2"><?= $borrow["id_borrow"]; ?></td>
               
                    <td class="startDate border-success-subtle border-3 mt-2"><?= $borrow["start_date"]; ?></td>
               
                    <td class="enDate border-success-subtle border-3 mt-2"><?= $borrow["end_date"]; ?></td>
               
                    <td class="title2 border-success-subtle border-3 mt-2"><?= $borrow["title"]; ?></td>

                    <?php if($borrow["end_date"] == NULL){ ?>
                        <td class="rendre border-success-subtle border-3 mt-2"
                         ><a href="traitement/action.php?borrow=<?=$borrow['id_borrow'];
                          ?>&bookId><?= $borrow["book_id"]; ?>=">Rendre le livre</a></td>

                    <?php } ?>

                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>    
</body>
</html>