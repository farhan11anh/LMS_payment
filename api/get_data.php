<?php

function get_data($url){
        // persiapkan curl
        $ch = curl_init();

        // set url 
        curl_setopt($ch, CURLOPT_URL, $url);
    
        // return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    
        // $output contains the output string 
        $output = curl_exec($ch); 
    
        // tutup curl 
        curl_close($ch);      
    
        // menampilkan hasil curl
        // var_dump (json_decode($output)->data[0]->unit_price);
    
        return $output = json_decode($output)->data;
    
        // var_dump($output);
    
}

?>