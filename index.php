<?php

session_start();    

$user = $_SESSION['user_data']->user;

include 'api/get_data.php';

// menambahkan fungsi post data ke api
include 'api/post_data.php';

// validasi apakah sudah melakukan pesanan
if(!isset($_POST['item_id'])){
    header('location:view/index.php');
}

// mendapatkan id item dari dashboard.php 
$id = $_POST['item_id'];
$batch = 'batch' .$_POST['batch_id']. ", course " .$_POST['course_name'];
$price = $_POST['price'];
$course_name = $_POST['course_name'];


/**
 * Include test library if you are using composer
 * Example: Psysh (debugging library similar to pry in Ruby)
 */
require_once dirname(__FILE__) . '/vendor/autoload.php';

require_once dirname(__FILE__) . '/Midtrans.php';
require_once dirname(__FILE__) . '/tests/MT_Tests.php';
require_once dirname(__FILE__) . '/tests/utility/MtFixture.php';

// Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'SB-Mid-server-TSRhFBTXPwOHrUxKq6aWNgEV';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;
 
$params = array(
    'transaction_details' => array(
        'order_id' => rand(),
        'gross_amount' => $price,
    ),
    "item_details" => array(
        array(
            "id" => $id,
            "price" => $price,
            "quantity" => 1,
            "name" => $batch
        ),
        // array(
        //     "id" => "INV-002",
        //     "price" => 3000,
        //     "quantity" => 1,
        //     "name" => "Workshop 1"
        // )
    ),
    'customer_details' => array(
        'first_name' => $user->user_first_name,
        'last_name' => $user->user_last_name,
        // 'email' => $user->user_email,
        'email' => 'farhanwork23@gmail.com',
        'phone' => $user->user_phone,
    ),
);

// include "connection.php";
$snapToken = \Midtrans\Snap::createTransaction($params);
$order_id=$params['transaction_details']['order_id'];
$transaction_id=$snapToken->token;


//memasukan data yang akan disimpan ke db
$date = date('c', time());

$data=[
    'order_id' => $transaction_id,
    'user_id' => $user->user_id,
    'status' => 'pending',
    'item_id' => $_POST['item_id'],
    'created_at' => $date

];

// melakukan penyimpanan data
post_data('https://tgvvy79o.directus.app/items/invoices', $data );



echo '<a href="' . $snapToken->redirect_url . '"> Bayar </a>';


echo '<input type="text" id="snap" value="'.$snapToken->redirect_url.'" hidden>';



?>

<script>
    let snap = document.querySelector("#snap").value;
    console.log(snap);
    window.location.replace(snap);
</script>
