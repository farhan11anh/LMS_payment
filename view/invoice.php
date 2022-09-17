<?php

session_start();

if(!isset($_SESSION['user_data'])){
    header("location: ../login.php");
}

$user = $_SESSION['user_data']->user;

include("../api/get_data.php");

require('templates/modal.php');


$invoicesData = get_data("https://tgvvy79o.directus.app/items/invoices?filter[user_id]=".$user->user_id);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/icons/logo.ico" type="image/x-icon">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/intro.js/minified/introjs.min.css" />

    <title>Invoice | Lumintu Classsroom</title>

    <!-- Flowbite CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />

    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.14.3/dist/full.css" rel="stylesheet" type="text/css" />

    <!-- CDN TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="overflow-x-hidden">
    <?php
    require "templates/navbar.php";
    ?>
    <div class="py-16 bg-gradient-to-br from-[#C27D2B] to-[#CEB27C] w-screen min-h-screen">

        <div class="container mx-auto px-6 text-gray-600 md:px-12 xl:px-6 ">
            <div class="mb-12 space-y-2 text-center">
                <h2 class="text-3xl text-white font-bold md:text-4xl pt-6">Invoice</h2>
                <p class="lg:w-6/12 lg:mx-auto text-gray-100">Berikut adalah history modul apa saja yang sudah dibeli atau belum : </p>
            </div>
            <div class="grid gap-12 2xl:grid-cols-2 lg:grid-cols-1 md:grid-cols-1">

                <?php foreach($invoicesData as $key){
                    $itemData = get_data("https://tgvvy79o.directus.app/items/items/".$key->item_id); 
                    ?>

                        <div class="p-1 rounded-xl group md:flex space-x-6 bg-white shadow-xl hover:rounded-2xl">
                            <img src="<?php if($itemData->item_id == 1 ){
                                echo "../assets/img/gradit.png";
                            }elseif($itemData->item_id == 2){
                                echo "../assets/img/codecation.png";
                            }elseif($itemData->item_id == 3){
                                echo "../assets/img/prokidz.png";
                            }elseif($itemData->item_id == 4){
                                echo "../assets/img/incareer.png";

                            } ?>" alt="art cover" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
                            <div class="sm:w-7/12 pl-0 p-5 justify-items-center">
                                <div class="space-y-2">
                                    <div class="space-y-4">
                                        <h4 class="text-2xl font-semibold text-cyan-900"><?= $itemData->course_name ?></h4>
                                        <p class="text-gray-600 pb-2">Laborum saepe laudantium in, voluptates ex placeat quo harum aliquam totam, doloribus eum impedit atque! Temporibus...</p>
                                    </div>
                                    <p>Rp. <?= number_format($itemData->price , 0, ',', '.') ?></p> 

                                    <div class="flex flex-row justify-between">
                                        <?php
                                            if($key->status == "settlement"){
                                                echo '<span class="block w-max px-6 border border-green-200 rounded bg-green-100 text-green-600 shadow">Berhasil</span>';
                                            }elseif($key->status == "pending"){
                                                echo '<span class="block w-max px-6 border border-yellow-200 rounded bg-yellow-100 text-yellow-600 shadow">Pending</span>';
                                            }else{
                                                echo '<span class="block w-max px-6 border border-red-200 rounded bg-red-100 text-red-600 shadow">Gagal</span>';
                                            }
                                        ?></p>
                                       
                                        <a href="https://app.sandbox.midtrans.com/snap/v3/redirection/<?= $key->order_id?>" type="button" class="cursor-pointer text-white bg-gradient-to-br from-[#C27D2B] to-[#CE7F21] hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-400 font-medium rounded-lg text-sm px-5 pt-0.5 text-center shadow">Bayar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php } ?>

            </div>
        </div>
    </div>
    <footer class="bg-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com" class="hover:underline">GradIT™</a>. All Rights Reserved.
        </span>
        <br>
        <a href="https://flowbite.com" class="flex items-center mb-6 sm:mb-0 mt-2">
            <img src="../assets/logo/logo_lumintu.png" class="mr-3 h-8" alt="GradIT Logo">
    </footer>
</body>




<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

</html>