<?php
require_once("../api/get_item.php");

$itemId = $_POST['itemId'];

$url = "https://tgvvy79o.directus.app/items/items/".$itemId;
$response = get_item($url);

echo json_encode($response);

?>