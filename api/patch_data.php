<?php

// $id = "13949b41-3ae7-4675-9aeb-9210e76f500f";

// $url = "http://0.0.0.0:8055/items/invoices/".$id;

// $data = [
//     "status" => "settlement"
// ];

function patch_data($url, $data){
    $data=json_encode($data);


    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PATCH');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
    "Content-Type: application/json",
    "Accept: application/json",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);


    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    //for debug only!
    // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    curl_close($curl);
    var_dump($resp);
    }

    // patch_data($url, $data);


?>