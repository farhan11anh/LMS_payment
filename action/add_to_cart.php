<?php

include_once("../api/post_data.php");
include_once("../api/get_item.php");


$item_id = $_POST['itemId'];
$user_id = $_POST['userId'];

$cart_data_item = get_item("https://tgvvy79o.directus.app/items/cart?filter[status]=cart&filter[item_id]=".$item_id)->data;
$cart_data_user = get_item("https://tgvvy79o.directus.app/items/cart?filter[user_id]=".$user_id)->data;

if(count($cart_data_item) > 0 && count($cart_data_item) > 0){
    $response = [
        "msg" => "item sudah ada dalam keranjang"
    ];

    echo json_encode($response);
} else {
    $url = "https://tgvvy79o.directus.app/items/cart";

    $data = [
        "item_id" => $item_id,
        "user_id" => $user_id,
        "status" => "cart"
    ];
    post_data($url, $data);

    $response = [
        "msg" => "Berhasil menambahkan item kedalam keranjnag"
    ];

    echo json_encode($response);
}



?>