<?php 

    // include("../api/get_data.php");

    $cartData = get_data("https://tgvvy79o.directus.app/items/cart?filter[status]=cart&filter[user_id]=".$user->user_id);

?>

    <!-- Main modal 1 -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                <h3 id="course-name" class="text-xl font-semibold text-gray-900 dark:text-white">
                    GradIT
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-800 dark:text-gray-900">
                    Raih Impian Menjadi Web Developer
                </p>
                <h1 class="text-2xl leading-relaxed text-gray-800 dark:text-gray-900">
                    Benefit Langganan
                </h1>
                <ul class="list-disc p-6">
                <li>Akses Kelas <span id="courseName" ></span></li>
                <li>Diskusi bersama Mentor</li>
                <li>Ujian</li>
                <li>Tugas</li>
                <!-- ... -->
                </ul>
            </div>
            <!-- Modal footer -->
            <div class="flex justify-between items-start p-4 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                <h3 class="text-xl pl-6 font-semibold text-gray-900 dark:text-white">
                    Harga Langganan <br>
                    <span id="price" ></span>
                </h3>

                <form method="post">
                    <input type="text" id="item_id_form" name="item_id" value="" hidden> 
                    <input type="text" id="batch_id_form" name="batch_id" value=""  hidden> 
                    <input type="text" id="price_form" name="price" value=""  hidden>
                    <input type="text" id="course_name_form" name="course_name" value=""  hidden>

                    <input type="text" id="user_id_form" name="course_name" value="<?= $user->user_id ?>"  hidden>



                    <input data-modal-toggle="defaultModal" type="submit" id="submit-form" class="text-white bg-gradient-to-r from-amber-600 to-amber-700 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" value="Masuka ke keranjang">
                </form>
            </div>
            
        </div>
    </div>
</div>






    <!-- Modal Cart -->
    <div id="ModalPayment" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
      <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="modal-cart relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="sticky top-0 z-50 bg-white flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
              Cart 
            </h3>
            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="ModalPayment">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <!-- Modal body -->
          <div class="max-w-full bg-white px-10 py-10">
            <div class="flex justify-between mt-5 mb-5">
              <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
              <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
              <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
            </div>

            <?php foreach($cartData as $key){ ?>
                        <?php
                            $item = get_data("https://tgvvy79o.directus.app/items/items/".$key->item_id);
                        ?>
                        <input type="text" id="cart-id" value="<?= $key->cart_id ?>" hidden>
                        <div class="flex justify-between items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                            <div class="flex w-2/5">
                                <!-- product -->
                                <div class="w-20">
                                <img class="h-24" src="https://drive.google.com/uc?id=18KkAVkGFvaGNqPy2DIvTqmUH_nk39o3z" alt="">
                                </div>
                                <div class="flex flex-col justify-between ml-4 flex-grow">
                                <span class="font-bold text-sm">Name : <?= $item->course_name ?></span>
                                <span class="text-red-500 text-xs">Batch : <?= $item->batch_id ?></span>
                          
                                </div>
                            </div>
                            <span class="text-center w-1/5 font-semibold text-sm">Rp.<?= number_format($item->price , 0, ',', '.') ?></span>
                            <span class="text-center w-1/5 font-semibold text-sm">Rp.<?= number_format($item->price , 0, ',', '.') ?></span>

                              

                        </div>
                        <div>
                            <form action="../index.php" method="post">
                                <input type="text" name="item_id" value="<?= $item->item_id ?>" hidden> 
                                <input type="text" name="batch_id" value="<?= $item->batch_id ?>" hidden> 
                                <input type="text" name="price" value="<?= $item->price ?>" hidden>
                                <input type="text" name="course_name" value="<?= $item->course_name ?>" hidden>

                                <button id="checkout" class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Checkout</button>

                            </form> 
                        </div>

                        <br> <hr> <br>

            <?php } ?>
          </div>
        </div>
      </div>
    </div>

