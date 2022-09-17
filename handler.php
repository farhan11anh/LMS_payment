<?php

include "api/post_data.php";
include "api/get_data.php";
include "api/patch_data.php";

 
require_once(dirname(__FILE__) . '/Midtrans.php');
\Midtrans\Config::$isProduction = false;
\Midtrans\Config::$serverKey = 'SB-Mid-server-TSRhFBTXPwOHrUxKq6aWNgEV';
$notif = new \Midtrans\Notification();
 
$transaction = $notif->transaction_status;
$type = $notif->payment_type;
$order_id = $notif->order_id;
$fraud = $notif->fraud_status;
$transaction_id = $notif->transaction_id;
$amount = $notif->gross_amount;
$date = date('c', time());
$approval_code = $notif->approval_code;


// melakukan udpate data invoices 
$invoicesData = get_data("https://tgvvy79o.directus.app/items/invoices/");
//untuk mendapatkan index terakhir
$invoices_big_id = count($invoicesData)-1;
$url_invoices = "https://tgvvy79o.directus.app/items/invoices/";
// mendapatkan row terakhir
$last_row_inv = $invoicesData[$invoices_big_id];
// mendapatkan id terakhir
$last_id_inv = $last_row_inv->invoices_id;

//melakukan update data berdasarkan id terakhir yang didapat
$url_update_inv = "https://tgvvy79o.directus.app/items/invoices/".$last_id_inv;
$update_data_inv = [
    "status" => $transaction
];
patch_data($url_update_inv, $update_data_inv);


$url = "https://tgvvy79o.directus.app/items/payments";
$payment_data = get_data($url);

$payment = [];
for($i = 0; $i < count($payment_data); $i++){
    $payment[$i] = $payment_data[$i]->{"order_id"};
}

// melakukan cek apakah order id sudah ada sebelumnya
for($i = 0; $i < count($payment); $i++){
    if($transaction_id == $payment[$i]){
        $check = true;
    }
}

if(isset($check)){
    // melakukan update pada table payments bila order id sudah pernah ada

    $getLastId = get_data('https://tgvvy79o.directus.app/items/payments?filter[order_id]='.$transaction_id);

    $lastId = $getLastId[0]->{'payments_id'};

    $url = "https://tgvvy79o.directus.app/items/payments/".$lastId;
    $data = [
        "status" => $transaction
    ];
    patch_data($url, $data);
}else{
    
    // melakukan insert pada table payments apabila order id belum pernah ada
    $data = [
        "order_id" => $transaction_id,
        "amount" => $amount,
        "created_at" => $date,
        "payment_type" => $type,
        "status" => $transaction
    ];
    post_data($url, $data);
}

// update status pada table invoices 
$getStatusInv = get_data('https://tgvvy79o.directus.app/items/invoices/'.$transaction_id);
$statusInv = $getStatusInv[0]->status;

$urlInv = "https://tgvvy79o.directus.app/items/invoices/".$transaction_id;
if($transaction == "pending"){
    $data = [
        "status" => "pending"
    ];
    patch_data($urlInv, $data);
}elseif ($transaction == "settlement"){
    $data = [
        "status" => "paid"
    ];
    patch_data($urlInv, $data);
} elseif($transaction == "pending"){
    $data = [
        "status" => "paid"
    ];
    patch_data($urlInv, $data);
}

$message = 'ok';

if ($transaction == 'capture') {
    // For credit card transaction, we need to check whether transaction is challenge by FDS or not
    if ($type == 'credit_card') {
        if ($fraud == 'challenge') {
            // TODO set payment status in merchant's database to 'Challenge by FDS'
            // TODO merchant should decide whether this transaction is authorized or not in MAP
            $message = "Transaction order_id: " . $order_id ." is challenged by FDS";
        } else {
            // TODO set payment status in merchant's database to 'Success'
            $message = "Transaction order_id: " . $order_id ." successfully captured using " . $type;
        }
    }
} elseif ($transaction == 'settlement') {
    // TODO set payment status in merchant's database to 'Settlement'
    $message = "Transaction order_id: " . $order_id ." successfully transfered using " . $type . "and order id = " .$transaction_id;

    // update DB status settlement 
    $url = "http://0.0.0.0:8055/items/invoices/".$transaction_id;
    $data = [
        "status" => "settlement"
    ];
    patch_data($url, $data);

} elseif ($transaction == 'pending') {
    // TODO set payment status in merchant's database to 'Pending'
    $message = "Waiting customer to finish transaction order_id: " . $order_id . " using " . $type;

    // update DB status pending
    $url = "http://0.0.0.0:8055/items/invoices/".$transaction_id;
    $data = [
        "status" => $transaction
    ];
    patch_data($url, $data);

} elseif ($transaction == 'deny') {
    // TODO set payment status in merchant's database to 'Denied'
    $message = "Payment using " . $type . " for transaction order_id: " . $order_id . " is denied.";

    // update DB status deny
    $url = "http://0.0.0.0:8055/items/invoices/".$transaction_id;
    $data = [
        "status" => $transaction
    ];
    patch_data($url, $data);

} elseif ($transaction == 'expire') {
    // TODO set payment status in merchant's database to 'expire'
    $message = "Payment using " . $type . " for transaction order_id: " . $order_id . " is expired.";

    // update DB status expire
    $url = "http://0.0.0.0:8055/items/invoices/".$transaction_id;
    $data = [
        "status" => $transaction
    ];
    patch_data($url, $data);

} elseif ($transaction == 'cancel') {
    // TODO set payment status in merchant's database to 'Denied'
    $message = "Payment using " . $type . " for transaction order_id: " . $order_id . " is canceled.";

    // update DB status cancel
    $url = "http://0.0.0.0:8055/items/invoices/".$transaction_id;
    $data = [
        "status" => $transaction
    ];
    patch_data($url, $data);
}

$filename = $order_id . ".txt";
$dirpath = 'log';
is_dir($dirpath) || mkdir($dirpath, 0777, true);

echo file_put_contents($dirpath . "/" . $filename, $message);

?>



