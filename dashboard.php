<?php

session_start();


include 'api/get_data.php';
include 'api/post_request.php';
include 'api/patch_data.php';

// melakukan udpate data invoices 
$invoicesData = get_data("https://tgvvy79o.directus.app/items/invoices/");
//untuk mendapatkan index terakhir
$invoices_big_id = count($invoicesData)-1;
$url_invoices = "https://tgvvy79o.directus.app/items/invoices/";
// mendapatkan row terakhir
$last_row_inv = $invoicesData[$invoices_big_id];
// mendapatkan id terakhir
$last_id_inv = $last_row_inv->invoices_id;

var_dump($invoicesData);
echo '<br> <br> <br>';
var_dump($invoices_big_id);
echo '<br> <br> <br>';
var_dump($last_row_inv);
echo '<br> <br> <br>';
var_dump($last_id_inv);
echo '<br> <br> <br>';








































$data = get_data("https://tgvvy79o.directus.app/items/items");

$date = date('c', time());

if(!isset($_SESSION['user_data'])){
    header("location: login.php");
}

$user = $_SESSION['user_data']->user;

echo "</br>";

$item = [];
for($i = 0; $i < count($data); $i++){
    $item[$i] = $data[$i]->{"item_id"};
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <h2>data Item</h2>

    <?php

        foreach($data as $key){ ?>

        <div>
            id = <?= $key->item_id?> <br>
            name = <?= $key->course_name?> <br>
            batch = <?= $key->batch_id?> <br>
            price = <?= $key->price?> <br>

            <form action="index.php" method="post">
                <input type="text" name="item_id" value="<?= $key->item_id ?>" hidden> 
                <input type="text" name="batch_id" value="<?= $key->batch_id ?>" hidden> 
                <input type="text" name="price" value="<?= $key->price ?>" hidden>
                <input type="text" name="course_name" value="<?= $key->course_name ?>" hidden>


                <input type="submit" value="beli">
            </form>
        </div>

        <hr>
        <?php }


    ?>

    <script>

        

    </script>
</body>
</html>