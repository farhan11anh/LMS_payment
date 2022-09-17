<?php
// $date = date('c', time());

// $url = "https://tgvvy79o.directus.app/items/payments";

// $data = [
//     "order_id" => '390',
//     "amount" => 2000,
//     "created_at" => $date,
//     "payment_type" => 'SPEZIALED'
// ];
function post_data($url, $data){
    $data=json_encode($data);
    
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data))
    );
    $response = curl_exec($curl);
    echo $response; 
}

// // post_data($url, $data);

// function post_data($url, $data){
//     $options = array(
//         'http' => array(
//           'method'  => 'POST',
//           'content' => json_encode( $data ),
//           'header'=>  "Content-Type: application/json\r\n" .
//                       "Accept: application/json\r\n"
//           )
//       );
      
//       $context  = stream_context_create( $options );
//       $result = file_get_contents( $url, false, $context );
//       $response = json_decode( $result );
// }


  

?>