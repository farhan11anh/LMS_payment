<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoices Pembayaran</title>
</head>
<body>
    <h1>Status Pembayaran</h1>
    <?php
    
    include("../api/get_data.php");
    include("../api/get_item.php");

    $invoicesData = get_data("https://tgvvy79o.directus.app/items/invoices/");

    foreach($invoicesData as $key){ 
        $itemData = get_data("https://tgvvy79o.directus.app/items/items/".$key->item_id); 
        ?>
        
    

    <p> Name : <?= $itemData->course_name ?> </p>
    <p> Status : <?php
        if($key->status == "settlement"){
            echo "Sudah dibayar";
        }elseif($key->status == "pending"){
            echo "Menunggu pembayaran";
        }else{
            echo "Pembayaran gagal";
        }
    ?></p>
    <p> Price : <?= $itemData->price ?> </p>

    <a href="https://app.sandbox.midtrans.com/snap/v3/redirection/<?= $key->order_id?>"><button>Bayar</button></a> <hr>
    
    <?php }
    
    ?>

</body>
</html>