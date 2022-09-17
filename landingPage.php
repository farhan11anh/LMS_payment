<?php

// require_once "core/init.php";


$title_page = "Landing Page";


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/icons/logo.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.3/dist/flowbite.min.css" /> -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.17.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo $title_page ?> | Lumintu Classsroom</title>
<!-- File Custom CSS -->
<link href="assets/css/custom-auth.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/daisyui@2.17.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <!-- start navbar -->

  <!-- end navbar -->

  <section class=" relative">

    <nav class="text-white relative z-10 px-2 sm:px-4 py-2.5">
      <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="h#" class="flex items-center">
          <img src="assets/img/logo_lm.png" class="mr-3 h-6 sm:h-9" alt="Logo Lumintu">
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
          <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
          <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
            <li>
              <a href="#" class="block py-2 pr-4 pl-3 text-white rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Beranda</a>
            </li>
            <li>
              <a href="#" class="block py-2 pr-4 pl-3 text-white md:hover:text-yellow-700 md:p-0 md:dark:hover:bg-transparent ">Produk</a>
            </li>
            <li>
              <a href="#" class="block py-2 pr-4 pl-3 text-white md:hover:text-yellow-700 md:p-0 md:dark:hover:bg-transparent "">Kontak</a>
        </li>
        <li>
          <a href=" login.php" class="block py-2 pr-4 pl-3 text-white md:hover:text-yellow-700 md:p-0 md:dark:hover:bg-transparent "">Masuk</a>
        </li>
        <li>
          <a href="register.php" class="block py-2 pr-4 pl-3 text-white md:hover:text-yellow-700 md:p-0 md:dark:hover:bg-transparent "">Daftar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


                <img class=" absolute inset-0 object-[75%] sm:object-[25%] object-cover w-full h-full" src="assets/img/bghome1.png" alt="Lumintu" />

              <div class="hidden sm:block sm:inset-0 sm:absolute"></div>

              <div class="relative max-w-screen-xl px-4 py-32 mx-auto lg:h-screen lg:items-center lg:flex">
                <div class="max-w-xl text-center sm:text-left">
                  <span class="max-w-lg mt-4 sm:leading-relaxed sm:text-xl text-white">
                    WELCOME TO LUMINTU STACK
                  </span>
                  <h1 class="text-3xl font-extrabold sm:text-5xl">
                    <strong class="font-extrabold text-white sm:block space-y-4">
                      Committed<br>
                      to Excellent<br>
                      IT Education
                    </strong>
                  </h1>

                  <p class="max-w-lg mt-4 sm:leading-relaxed sm:text-xl text-white text-justify">
                    Lumintu Stack hadir sebagai penyedia course di bidang IT berbasis di Yogyakarta. Kami menyediakan layanan course untuk berbagai level, mulai dari anak usia 7 hingga 12 tahun, siswa SMK, mahasiswa, hingga pekerja. Saatnya belajar IT dari ahlinya dengan mengikuti course andalan kami!
                  </p>

                  <div class="flex flex-wrap gap-4 mt-8 text-center">
                    <a class="block w-full px-12 py-3 text-sm font-medium text-black shadow bg-white sm:w-auto active:bg-white hover:bg-gray-200 rounded-full focus:outline-none focus:ring" href="/get-started">
                      More About Us
                    </a>

                    <a class="block w-full px-12 py-3 text-sm font-medium bg-transparent rounded-full shadow text-white sm:w-auto hover:bg-black hover:text-white active:text-white focus:outline-none focus:ring border border-white hover:border-transparent" href="/about">

                      <!-- <a class="block w-full px-12 py-3 bg-transparent hover:bg-black text-white font-semibold hover:text-white border border-white hover:border-transparent rounded-full shadow"> -->

                      Learn More
                    </a>
                  </div>
                </div>
              </div>
  </section>
  <!-- end section 1 -->

  <!-- start section 2 -->
  <section id="home2" class="bg-[#151211] pb-[32px] text-white pt-10 px-4">
    <div class="container w-full mx-auto flex items-center justify-center">
      <div class="">
        <div class="text-center">
          <h1 class="text-center font-bold lg:text-[43px] text-lg mb-6 lg:mb-5">Get Ready to Deep Dive into IT World <br><br> with Lumintu Stack
          </h1>
        </div>

        <div class="mb-[50px] flex justify-center items-center ">

          <svg class="scale-[0.7]" width="91" height="104" viewBox="0 0 91 104" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M45.3686 75.2275V83.0201" stroke="#C49B6F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M45.3686 36.5735V43.826" stroke="#C49B6F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M45.3686 102C70.6566 102 88.7194 92.4329 88.7194 71.1385C88.7194 47.9924 77.8817 32.5616 56.2063 20.9886L64.732 9.26121C65.1651 8.49176 65.4 7.61371 65.413 6.71606C65.4259 5.8184 65.2163 4.93306 64.8056 4.14976C64.3948 3.36646 63.7974 2.71305 63.0739 2.25576C62.3504 1.79847 61.5266 1.55355 60.6859 1.54584H30.0514C29.2107 1.55355 28.3869 1.79847 27.6634 2.25576C26.9399 2.71305 26.3425 3.36646 25.9317 4.14976C25.521 4.93306 25.3114 5.8184 25.3243 6.71606C25.3372 7.61371 25.5722 8.49176 26.0053 9.26121L34.5309 21.0657C12.8556 32.7159 2.01788 48.1467 2.01788 71.2928C2.01788 92.4329 20.0807 102 45.3686 102Z" stroke="#C49B6F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M38.1436 71.6785C39.0252 72.796 40.1347 73.6829 41.3871 74.2714C42.6396 74.8598 44.0016 75.1342 45.3687 75.0733C47.4582 75.2254 49.5216 74.5064 51.1251 73.0676C52.7285 71.6287 53.747 69.5821 53.9666 67.3579C53.747 65.1337 52.7285 63.087 51.1251 61.6482C49.5216 60.2094 47.4582 59.4904 45.3687 59.6425C43.2791 59.7946 41.2158 59.0757 39.6123 57.6368C38.0089 56.198 36.9903 54.1513 36.7708 51.9271C36.9727 49.6952 37.9864 47.6368 39.594 46.1941C41.2016 44.7515 43.275 44.0398 45.3687 44.2118C46.7117 44.124 48.0563 44.3553 49.3056 44.8889C50.5549 45.4226 51.6779 46.2453 52.5938 47.2979" stroke="#C49B6F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
          </svg>

          <p class="ml-5 lg:text-md font-semibold  text-sm w-3/5">Investasi anti gagal dengan pengetahuan IT yang menyesuaikan level.
            <span class="lg:tex-[15px] text-xs block">Kurikulum pembelajaran IT disesuaikan dengan kebutuhan tingkatan level.<span>
        </div>

        <div class="mb-[50px] flex justify-center items-center">

          <svg class="scale-[0.7]" width="91" height="104" viewBox="0 0 96 103" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.3121 2H5.55201C3.59029 2 2 3.69819 2 5.79302V96.8256C2 98.9204 3.59029 100.619 5.55201 100.619H23.3121C25.2738 100.619 26.8641 98.9204 26.8641 96.8256V5.79302C26.8641 3.69819 25.2738 2 23.3121 2Z" stroke="#C49B6F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M48.1761 17.1721H30.4161C28.4544 17.1721 26.8641 18.8703 26.8641 20.9651V96.8256C26.8641 98.9205 28.4544 100.619 30.4161 100.619H48.1761C50.1378 100.619 51.7281 98.9205 51.7281 96.8256V20.9651C51.7281 18.8703 50.1378 17.1721 48.1761 17.1721Z" stroke="#C49B6F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M71.9501 15.0953L58.1671 18.7786C56.2641 19.2872 55.1074 21.3469 55.5837 23.379L72.83 96.9701C73.3063 99.0022 75.235 100.237 77.1381 99.7288L90.9211 96.0455C92.8241 95.5369 93.9807 93.4773 93.5045 91.4451L76.2582 17.8541C75.7819 15.8219 73.8531 14.5868 71.9501 15.0953Z" stroke="#C49B6F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M2 74.0676H26.8641" stroke="#C49B6F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M26.8641 66.4813H51.7281" stroke="#C49B6F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M69.4882 81.6537L89.9477 76.1918" stroke="#C49B6F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
          </svg>

          <p class="ml-5 lg:text-md font-semibold text-sm w-3/5">Dapatkan ilmu dan bimbingan langsung dari para ahli!. <span class="lg:text-[15px] text-xs block">Bimbingan langsung dari ahli memaksimalkan kegiatan pembelajaran..</span></p>
        </div>

        <div class="mb-[50px] flex justify-center items-center">

          <svg class="scale-[0.7]" width="91" height="104" viewBox="0 0 101 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M98.4842 25.0738C98.3401 24.2921 98.0332 23.5495 97.5834 22.8941C97.1336 22.2388 96.5511 21.6853 95.8735 21.2697L80.9553 36.1879C80.2595 36.9098 79.4253 37.484 78.5026 37.8762C77.5798 38.2684 76.5874 38.4706 75.5848 38.4706C74.5821 38.4706 73.5898 38.2684 72.667 37.8762C71.7443 37.484 70.9101 36.9098 70.2142 36.1879L64.5453 31.1157C63.1786 29.7214 62.4131 27.8468 62.4131 25.8943C62.4131 23.9419 63.1786 22.0673 64.5453 20.673L79.4635 5.75476C79.1382 4.99047 78.6488 4.30702 78.0301 3.75277C77.4114 3.19852 76.6785 2.787 75.8832 2.54734C70.678 1.50933 65.286 1.95366 60.321 3.82973C55.356 5.70581 51.0174 8.93825 47.7994 13.159C44.5813 17.3798 42.613 22.4194 42.1185 27.7039C41.6241 32.9885 42.6233 38.3057 45.0025 43.0502L4.27582 83.404C3.56537 84.0986 3.00087 84.9283 2.61548 85.8441C2.23008 86.76 2.03156 87.7436 2.03156 88.7372C2.03156 89.7309 2.23008 90.7145 2.61548 91.6303C3.00087 92.5462 3.56537 93.3758 4.27582 94.0705L6.96109 96.7558C7.65577 97.4662 8.48539 98.0307 9.40124 98.4161C10.3171 98.8015 11.3007 99 12.2943 99C13.288 99 14.2716 98.8015 15.1875 98.4161C16.1033 98.0307 16.9329 97.4662 17.6276 96.7558L58.3543 56.1037C63.1001 58.3647 68.38 59.2652 73.607 58.7048C78.8339 58.1445 83.803 56.1453 87.9617 52.9297C92.1204 49.7141 95.3057 45.408 97.1633 40.4902C99.021 35.5725 99.4782 30.2359 98.4842 25.0738V25.0738Z" stroke="#C49B6F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
          </svg>

          <p class="ml-5 lg:text-md font-semibold text-sm w-3/5">Menjadi problem solver handal dengan kurikulum Project Based Learning.<span class="lg:text-[15px] text-xs block">Project based learning memungkinkan murid memecahkan masalah berdasarkan proyek nyata.</span></p>
        </div>
      </div>
    </div>
  </section>
  <!-- Section 2 End -->

  <!-- Section Card -->
  <section id="home2" class="bg-[#151211] pb-[32px] text-white pt-5">
    <div class="container w-full mx-auto flex items-center justify-center">
      <div class="project">
        <div>
          <h1 class="text-center font-bold lg:text-[43px] text-lg mb-6 lg:mb-5">Choose Your Course According to Your Criteria </h1>
        </div>

        <!-- start section daftar course -->
        <div class="row lgx:max-w-xs w-100 h-30 my-5 grid lgx:grid-cols-1 lgx:inline-block lgx:mx-auto md:grid-cols-4 pt-5">

          <!-- start Prokidz -->
          <div class="max-w-sm shadow-md dark:bg-gray-800 dark:border-gray-700 m-2">
            <a href="#">
              <img class="p-8 rounded-t-lg" src="assets/img/bgprokidz.png" alt="product image" />
            </a>
            <div class="px-5 pb-5">
              <a href="#">
                <h5 class="text-xl font-semibold tracking-tight text-white dark:text-white mb-5">Asah Kemampuan Coding Anak di Bidang IOT</h5>
                <p class="lg:tex-[10px] text-xs block font-extralight">START FROM</p>
              </a>
              <div class="flex flex-wrap justify-between items-center space-y-3">
                <p class="lg:text-3xl lg:mb-0 md:text-xl font-bold text-white">Rp 500.000</p>
                <span class="block justify-between">
                  <a href="#" class="text-white bg-[#C49A6C] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Selengkapnya</a>
                </span>
              </div>
            </div>
          </div>
          <!-- end prokidz -->

          <!-- start codecation -->
          <div class="max-w-sm shadow-md dark:bg-gray-800 dark:border-gray-700 m-2">
            <a href="#">
              <img class="p-8 rounded-t-lg" src="assets/img/bgcodecation.png" alt="product image" />
            </a>
            <div class="px-5 pb-5">
              <a href="#">
                <h5 class="text-xl font-semibold tracking-tight text-white dark:text-white mb-5">Buat Website Kamu Sendiri Hanya dalam 1 Bulan! </h5>
                <p class="lg:tex-[10px] text-xs block font-extralight">START FROM</p>
              </a>
              <div class="flex flex-wrap items-center justify-between space-y-3">
                <span class="lg:text-3xl lg:mb-0 font-bold text-white">Rp 500.000</span>
                <a href="#" class="text-white bg-[#C49A6C] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Selengkapnya</a>
              </div>
            </div>
          </div>
          <!-- end codecation -->

          <!-- start gradit -->
          <div class="max-w-sm shadow-md dark:bg-gray-800 dark:border-gray-700 m-2">
            <a href="#">
              <img class="p-8 rounded-t-lg" src="assets/img/bggradit.png" alt="product image" />
            </a>
            <div class="px-5 pb-5">
              <a href="#">
                <h5 class="text-xl font-semibold tracking-tight text-white dark:text-white mb-5">Raih Impian Menjadi Web Developer Profesional </h5>
                <p class="lg:tex-[10px] text-xs block font-extralight">START FROM</p>
              </a>
              <div class="flex flex-wrap items-center justify-between space-y-3">
                <span class="lg:text-3xl lg:mb-0 font-bold text-white">Rp 450.000</span>
                <a href="#" class="text-white bg-[#C49A6C] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Selengkapnya</a>
              </div>
            </div>
          </div>
          <!-- end gradit -->

          <!-- start in career -->
          <div class="max-w-sm shadow-md dark:bg-gray-800 dark:border-gray-700 m-2">
            <a href="#">
              <img class="p-8 rounded-t-lg" src="assets/img/bgincareer.png" alt="product image" />
            </a>
            <div class="px-5 pb-5">
              <a href="#">
                <h5 class="text-xl font-semibold tracking-tight text-white dark:text-white mb-5">Shortcut Menjadi Database Manager Profesional</h5>
                <p class="lg:tex-[10px] text-xs block font-extralight">START FROM</p>
              </a>
              <div class="flex flex-wrap items-center justify-between space-y-3">
                <span class="lg:text-3xl lg:mb-0 font-bold text-white">Rp 500.000</span>
                <a href="#" class="text-white bg-[#C49A6C] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Selengkapnya</a>
              </div>
            </div>
          </div>
          <!-- end in career -->
        </div>
        <!-- end section daftar course -->
      </div>
    </div>
  </section>
  <!-- end card -->

  <!-- start section 3 -->
  <section id="home3" class="pb-[32px] bg-white text-amber-900">
    <div class="container w-full mx-auto flex items-center justify-center">
      <div class="">
        <!-- TITLE -->
        <div class="w-full px-4">
          <div class="mx-auto text-center mb-16 mt-10">
            <h3 class="text-amber-900 text-center font-bold lg:text-4xl lg:mt-2 text-lg lg:mb-3">Why Lumintu Stack</h3>
          </div>
        </div>
        <!-- CONTENT -->
        <div class="flex justify-center flex-wrap px-16 text-center w-full mx-auto">
          <div class="mb-12 lg:w-1/3 md:w-1/2 w-full">
            <div class="flex items-start justify-center">
              <img class="h-[100px] md:h-[150px] lg:h-max" src="assets/img/g1s3.png" alt="" width="w-full">
            </div>
            <h3 class="justify-center lg:text-xl font-bold text-sm text-[#4F2A0F]">Semi-Private Class</h3>
            <p class="lg:text-lg text-xs block text-black font-extralight mb-8">Kelas dengan daya tampung kurang dari 10 orang menjadikan kelas lebih private dan interaktif sehingga meningkatkan efektivitas pembelajaran.</p>
          </div>
          <div class="mb-12 lg:w-1/3 md:w-1/2 w-full">
            <div class="flex items-center justify-center">
              <img class="h-[100px] md:h-[150px] lg:h-max" src="assets/img/g2s3.png" alt="" width="w-full">
            </div>
            <h3 class="justify-center lg:text-xl font-bold text-sm text-[#4F2A0F]">Intergrated LMS</h3>
            <p class="lg:text-lg text-xs block text-black font-extralight mb-8">Lumintu Stack memiliki fasilitas Learning Management System (LMS) yang terintegrasi. Fasilitas ini membantu mentor dan siswa dalam pembelajaran.</p>
          </div>
          <div class="mb-12 lg:w-1/3 md:w-1/2 w-full">
            <div class="flex items-center justify-center">
              <img class="h-[100px] md:h-[150px] lg:h-max" src="assets/img/g3s3.png" alt="" width="w-full">
            </div>
            <h3 class="justify-center lg:text-xl font-bold text-sm text-[#4F2A0F]">Project Based Learning</h3>
            <p class="lg:text-lg text-xs block text-black font-extralight mb-8">Lumintu Stack memiliki sistem pembelajaran yang berbasis proyek dan portofolio nyata dalam dunia pekerjaan.</p>
          </div>
          <div class="mb-12 lg:w-1/3 md:w-1/2 w-full">
            <div class="flex items-center justify-center">
              <img class="h-[100px] md:h-[150px] lg:h-max" src="assets/img/g4s3.png" alt="" width="w-full">
            </div>
            <h3 class="justify-center lg:text-xl font-bold text-sm text-[#4F2A0F]">Certificate</h3>
            <p class="lg:text-lg text-xs block text-black font-extralight mb-8">Pemberian sertifikat bagi para peserta course.</p>
          </div>
          <div class="mb-12 lg:w-1/3 md:w-1/2 w-full">
            <div class="flex items-center justify-center">
              <img class="h-[100px] md:h-[150px] lg:h-max" src="assets/img/g5s3.png" alt="" width="w-full">
            </div>
            <h3 class="justify-center lg:text-xl font-bold text-sm text-[#4F2A0F]">Designed Curriculum for Each Level</h3>
            <p class="lg:text-lg text-xs block text-black font-extralight mb-8">Kurikulum Lumintu Stack disesuaikan oleh para ahli dibidangnya. </p>
          </div>
          <div class="mb-12 lg:w-1/3 md:w-1/2 w-full">
            <div class="flex items-center justify-center">
              <img class="h-[100px] md:h-[150px] lg:h-max" src="assets/img/g6s3.png" alt="" width="w-full">
            </div>
            <h3 class="justify-center lg:text-xl font-bold text-sm text-[#4F2A0F]">Comfortable Classroom </h3>
            <p class="lg:text-lg text-xs block text-black font-extralight mb-8">Lumintu Stack menyediakan ruang kelas ber-AC yang dilengkapi dengan jaringan internet untuk menunjang kenyamanan pembelajaran. </p>
          </div>
        </div>
      </div>
  </section>
  <!-- end section 3 -->

  <!-- start section 4 -->
  <section id="home4" class="pb-[32px] bg-[#D8B48F] text-amber-900">
    <div class="container w-full mx-auto flex items-center justify-center">
      <!-- TITLE -->
      <div class="mt-4">
        <h3 class="text-amber-900 text-center font-bold lg:text-[43px] text-lg lg:mb-3 mt-5">OUR MENTORS</h3>
      </div>

    </div>
    <h4 class="text-center font-semibold">Seluruh mentor Lumintu Stack merupakan ahli yang berpengalaman dibidangnya</h4>
    <br>

    <!-- CONTENT -->
    <!-- carousel start -->
    <div id="default-carousel" class="relative" data-carousel="static">
      <!-- Carousel wrapper -->
      <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
          <img src="assets/img/mentor1.png" class="lg:scale-[0.5] md:scale-[0.8] block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="assets/img/mentor2.png" class=" lg:scale-[0.5] md:scale-[0.3] sm:scale-[0.3] block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
        <!-- Item 3 -->
      </div>
      <br>
      <!-- Slider indicators -->
      <div class="flex absolute left-1/2 z-30 space-x-3 -translate-x-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        
      </div>
      <!-- Slider controls -->
      <button type="button" class="flex absolute top-0 left-0 xl:left-80 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
          <span class="hidden">Previous</span>
        </span>
      </button>
      <button type="button" class="flex absolute top-0 right-0 xl:right-80 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
          <span class="hidden">Next</span>
        </span>
      </button>
    </div>
    <!-- carousel end -->
  </section>

  <div class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 md:px-12 xl:px-32">
      <div class="mb-16 text-center">
        <h2 class="mb-4 text-center text-2xl text-[#4F2A0F] font-bold md:text-4xl">What They Said About Lumintu Stack</h2>
      </div>
      <div class="grid gap-12 items-center md:grid-cols-3">
        <div class="space-y-4 text-center">
          <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64" src="assets/img/woman1.jpg" alt="woman" loading="lazy" width="640" height="805">
          <div class="space-y-4">
            <h4 class="text-2xl">Hentoni Doe</h4>
            <span class="block text-sm text-gray-500">CEO-Founder</span>
            <h4 class="text-sm text-gray-500">“Selama mengikuti Free Trial Class Codecation, saya mendapat mendapat banyak manfaat. Antara lain penyampaian materi oleh mentor yang jelas, terstruktur, mudah dipahami dan menarik serta ruang kelasnya juga sangat nyaman buat belajar.”</h4>
          </div>
        </div>
        <div class="space-y-4 text-center">
          <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-48 md:h-64 lg:w-64 lg:h-80" src="assets/img/woman1.jpg" alt="man" loading="lazy" width="1000" height="667">
          <div class="space-y-4">
            <h4 class="text-2xl">Jonathan Doe</h4>
            <span class="block text-sm text-gray-500">Chief Technical Officer</span>
            <h4 class="text-sm text-gray-500">“Selama mengikuti Free Trial Class Codecation, saya mendapat mendapat banyak manfaat. Antara lain penyampaian materi oleh mentor yang jelas, terstruktur, mudah dipahami dan menarik serta ruang kelasnya juga sangat nyaman buat belajar.”</h4>
          </div>
        </div>
        <div class="space-y-4 text-center">
          <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64" src="assets/img/woman1.jpg" alt="woman" loading="lazy" width="1000" height="667">
          <div class="space-y-4">
            <h4 class="text-2xl">Anabelle Doe</h4>
            <span class="block text-sm text-gray-500">Chief Operations Officer</span>
            <h4 class="text-sm text-gray-500">“Selama mengikuti Free Trial Class Codecation, saya mendapat mendapat banyak manfaat. Antara lain penyampaian materi oleh mentor yang jelas, terstruktur, mudah dipahami dan menarik serta ruang kelasnya juga sangat nyaman buat belajar.”</h4>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- end section 4 -->

  <!-- start section 5 -->
  <!-- <section id="home5" class="pb-[32px] bg-white text-amber-900">
  <div class="container">
   <h1 class="text-center font-bold lg:text-[43px] text-lg lg:mb-3 mt-28">What They Said About Lumintu Stack</h1>
  </div>
  <div class="carousel w-1/2">
    <div id="slide1" class="carousel-item relative w-full">
      <img src="assets/img/said1.png" class="w-full" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide4" class="btn btn-circle">❮</a> 
        <a href="#slide2" class="btn btn-circle">❯</a>
      </div>
    </div> 
    <div id="slide2" class="carousel-item relative w-full">
      <img src="assets/img/said1.png" class="w-full" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide1" class="btn btn-circle">❮</a> 
        <a href="#slide3" class="btn btn-circle">❯</a>
      </div>
    </div> 
    <div id="slide3" class="carousel-item relative w-full">
      <img src="assets/img/said1.png" class="w-full" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide2" class="btn btn-circle">❮</a> 
        <a href="#slide4" class="btn btn-circle">❯</a>
      </div>
    </div> 
    <div id="slide4" class="carousel-item relative w-full">
      <img src="assets/img/said1.png" class="w-full" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide3" class="btn btn-circle">❮</a> 
        <a href="#slide1" class="btn btn-circle">❯</a>
      </div>
    </div>
  </div>
  
</section> -->
  <!-- end section 5 -->


  <!-- end section 6 -->

  <!-- start footer -->

  <footer class="bg-neutral-800">
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
        <div>
          <img src="./assets/img/logo_lm.png" class="mr-3 h-16 sm:items-center " alt="Lumintu Logo">
          <p class="max-w-xs mt-4 text-sm text-white text-justify">
            Lumintu Logic is an IT company that developed its first products mostly for desktop application environment.
          </p>

          <div class="flex mt-8 space-x-6 text-white">
            <a class="hover:opacity-75" href="./pages/contact.php" target="_blank" rel="noreferrer">
              <span class="sr-only"> Chat </span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
              </svg>
            </a>
            <a class="hover:opacity-75" href="mailto:official@gamainovasi.com" target="_blank" rel="noreferrer">
              <span class="sr-only"> Email </span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </a>
            <a class="hover:opacity-75" href="https://wa.me/6282228887882" target="_blank" rel="noreferrer">
              <span class="sr-only"> Phone </span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
              </svg>
            </a>
            <a class="hover:opacity-75" href="https://www.instagram.com/gama.inovasi/" target="_blank" rel="noreferrer">
              <span class="sr-only"> Instagram </span>
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
              </svg>
            </a>
            <a class="hover:opacity-75" href="" rel="noreferrer">
              <span class="sr-only"> Home </span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
            </a>
          </div>
        </div>
        <div class="grid grid-cols-1 gap-8 lg:col-span-2 sm:grid-cols-2 lg:grid-cols-3">
          <div>
            <p class="text-xl font-bold text-transparent bg-clip-text bg-white">
              Our Products
            </p>
            <nav class="flex flex-col mt-4 space-y-2 text-sm text-white">
              <a class="hover:opacity-75" href=""> ProKidz Academy </a>
              <a class="hover:opacity-75" href=""> CodeCation Academy </a>
              <a class="hover:opacity-75" href=""> GradIT Course </a>
              <a class="hover:opacity-75" href=""> InCareer </a>
            </nav>
          </div>
          <div>
            <p class="text-xl font-bold text-transparent bg-clip-text bg-white">
              About
            </p>
            <nav class="flex flex-col mt-4 space-y-2 text-sm text-white">
              <a class="hover:opacity-75" href=""> Home </a>
              <a class="hover:opacity-75" href=""> Contact Us </a>
              <a class="hover:opacity-75" href=""> Why Us? </a>
              <a class="hover:opacity-75" href=""> Our Mentors </a>
              <a class="hover:opacity-75" href=""> Testimonials </a>
              <a class="hover:opacity-75" href=""> News </a>
            </nav>
          </div>
          <div>
            <p class="text-xl font-bold text-transparent bg-clip-text bg-white">
              Address
            </p>
            <p class="mt-4 space-y-6 text-white text-justify">
              Gg. Pandega Siwi No. 6A.<br>
              Jl. Kaliurang Km 5,6
              Sleman, <br> DI Yogyakarta
              55281, Indonesia
            </p>
          </div>
          <p class="mt-8 text-xs text-white">
            &copy; 2022 CV Lumintu Logic
          </p>
        </div>
  </footer>

  <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

  <!-- end footer -->
