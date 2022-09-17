<?php

$title_page = "Login";

require_once "./api/get_request.php";
require_once "./api/post_request.php";

session_start();

if(isset($_SESSION['user_data'])){
    header("location: view/");
}

if (isset($_POST['login'])) {
    $arr = array(
        "email" => $_POST['email'],
        "password" => $_POST['password']
    );

    $login = json_decode(post_request("https://account.lumintulogic.com/api/login.php", json_encode($arr)));
    var_dump($login);
    $access_token = $login->{'data'}->{'accessToken'};
    $expiry = $login->{'data'}->{'expiry'};

    if ($login->{'success'}) {
        $userData = json_decode(http_request_with_auth("https://account.lumintulogic.com/api/user.php", $access_token));
        $_SESSION['user_data'] = $userData;
        $_SESSION['expiry'] = $expiry;
        setcookie('X-LUMINTU-REFRESHTOKEN', $access_token, strtotime($expiry));

        switch ($userData->{'user'}->{'role_id'}) {
            case 1:
                // Admin
                break;
            case 2:
                // Mentor
                // var_dump($_SESSION['user_data']->{'user'}->{'role_id'});
                header("location: ./frontend/pages/mentor.php");
                break;
            case 3:
                // Student
                header("location: ./view/index.php");
                break;
            default:
                break;
        }

        // var_dump($_SESSION['user_data']);
        // var_dump($_COOKIE['X-LUMINTU-REFRESHTOKEN']);
    }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/icons/logo.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.3/dist/flowbite.min.css" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.17.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo $title_page ?> | Lumintu Classsroom</title>

<!-- File Custom CSS -->
<link href="assets/css/custom-auth.css" rel="stylesheet" />
  </head>

  <body style="background-image: url('assets/img/bg.jpg')">
    <div class="flex items-center justify-center min-h-screen px-10">
        <div class="px-8 py-8 text-left bg-white rounded-lg md:w-1/2 lg:w-1/2">
            <h2 class="text-4xl font-bold  tracking-wider sm:text-4xl text-yellow-800">
                Lumintu Learning
            </h2>
            <h3 class="text-2xl font-semibold tracking-wider mt-3 text-yellow-800">
                Welcome Back!
            </h3> 

            <?php if ( !empty($errors) ) { ?>

                <?php foreach ($errors as $error) : ?>
                    <div id="alert-1" class="flex p-4 mb-4 mt-5 bg-blue-100 rounded-lg dark:bg-blue-200" role="alert">
                        <svg class="flex-shrink-0 w-5 h-5 text-blue-700 dark:text-blue-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <div class="ml-3 text-sm font-medium text-blue-700 dark:text-blue-800">
                            <?php echo $error; ?>
                        </div>
                        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-100 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-blue-200 dark:text-blue-600 dark:hover:bg-blue-300" data-dismiss-target="#alert-1" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                <?php endforeach; ?>

            <?php } ?>

            <form method="post" id="register-form">
                
        
                <div class="mt-5 mx-auto">
                    <div class="mt-4">
                        <label class="block text-yellow-800" for="email">Email<label>
                        <input type="email" placeholder="name@gmail.com" name="email" id="email"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600 text-black required:" required>
                    </div>

                    <div class="mt-4">
                        <label class="block text-yellow-800" for="password">Password<label>
                        <div id="passwordInput">
                            <input type="password" placeholder="Password" name="password" id="password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600 text-black required:" required>
                        </div>
                        
                    <br>
                    <!-- <span class="text-white">Dengan mendaftar, kamu setuju dengan syarat dan ketentuan kami </span> -->
                    <div class="flex mt-3">
                        <button class="w-full px-6 py-2 mt-4 text-white bg-[#b6833b] rounded-full hover:bg-[#c5985f]" type="submit" name="login" id="login">Login</button>
                    </div>
                    <div class="mt-6 text-yellow-800">
                        Belum Punya Akun?
                        <a class="font-bold hover:underline text-yellow-800" href="register.php">
                            Daftar
                        </a>
                    </div>
                </div>
            </form>
        </div>
        <!-- <div class="hidden lg:flex lg:w-1/2 my-auto p-36">
            <img src="assets/img/register.png" class="animate-bounce lg:mt-10 lg:h-full lg:w-full">
        </div> -->
    </div>

    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
    <script src="assets/js/scripts.js"></script>
  </body>
</html>