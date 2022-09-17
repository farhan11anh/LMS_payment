<?php

include("../api/patch_data.php");

$cart_id = $_POST['cartId'];

$url = "https://tgvvy79o.directus.app/items/cart/".$cart_id;
$data = [
    "status" => "to_invoices"
];
patch_data($url, $data);

?>