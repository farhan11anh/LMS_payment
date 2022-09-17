<?php

session_start();

$user = $_SESSION['user_data']->user;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <h3>keranjang</h3>

    <?php 

        include("../api/get_data.php");

        $cartData = get_data("https://tgvvy79o.directus.app/items/cart?filter[status]=cart&filter[user_id]=".$user->user_id);

    ?>

    <?php 
    
    foreach($cartData as $key){ ?>

        <?php
            $item = get_data("https://tgvvy79o.directus.app/items/items/".$key->item_id);
        ?>

        <p>Nama :<?= $item->course_name  ?></p> 
        <p>Batch : <?= $item->batch_id ?></p>
        <p>Harga :Rp.<?= number_format($item->price , 0, ',', '.') ?> </p>

        <form action="../index.php" method="post">
            <input type="text" name="item_id" value="<?= $item->item_id ?>" hidden> 
            <input type="text" name="batch_id" value="<?= $item->batch_id ?>" hidden> 
            <input type="text" name="price" value="<?= $item->price ?>" hidden>
            <input type="text" name="course_name" value="<?= $item->course_name ?>" hidden>


            <input type="submit" value="beli">
        </form> <hr>

    <?php
        }
    
    ?>
</body>
</html>