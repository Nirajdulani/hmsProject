<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<?php 
include('../website/Navbar.php'); 
require_once '../lib/helper.php';


  $db = new db();
  $db->table_name = 'appointment';

  $id = get('id');

  $mode = ($id == null) ? 'insert' : 'update';

  if ($id !== null) {
    $appointment = $db->get_by($id);
    extract($appointment);
    //dd($user);
  }


  ?>


<section class="py-1">
<form method="post" action="<?= '../appointment/handle.php' ?>">
<div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
    <div class="rounded-t border border-black bg-white mb-0 px-6 py-6">
      <div class="text-center flex justify-center">
        <h6 class="text-xl font-bold">
          Appointment Form
        </h6>
        
      </div>
    </div>
    <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-slate-300">
      <form>
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
          Patient Information
        </h6>
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase  text-xs font-bold mb-2">
                Full Name
            </label>
              <input type="text" name="fullname" class="border-0 px-3 py-3 placeholder-blueGray-300  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-xs font-bold mb-2">
                Age
              </label>
              <input type="text"  name="age" class="border-0 px-3 py-3 placeholder-blueGray-300  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase  text-xs font-bold mb-2">
                Email Address
              </label>
              <input type="text" name="email" class="border-0 px-3 py-3 placeholder-blueGray-300  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            </div>


            <div class="md:col-span-2">
           <label for="status">Gender</label>
           <div class="flex mt-4">
             <div class="flex items-center mr-4">
               <input id="inline-radio" type="radio" value="male" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
               <label for="inline-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
             </div>
             <div class="flex items-center mr-4">
               <input id="inline-2-radio" type="radio" value="female" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
               <label for="inline-2-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
             </div>
           </div>
         </div>

          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase  text-xs font-bold mb-2">
                Contact No.
              </label>
              <input type="text" name="contact" class="border-0 px-3 py-3 placeholder-blueGray-300  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            </div>
            <div class="relative w-full mb-3">
              <label class="block uppercase  text-xs font-bold mb-2">
                Date
              </label>
              <input type="date" name="date" class="border-0 px-3 py-3 placeholder-blueGray-300  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            </div>
        </div>
    </div>

        <hr class="mt-6 border-b-1 border-blueGray-300">

        
        <div class="flex flex-wrap">
          <div class="w-full lg:w-12/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase  text-xs font-bold mb-2">
                Address
              </label>
              <input type="text" name="address" class="border-0 px-3 py-3 placeholder-blueGray-300  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            </div>
          </div>
          <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase  text-xs font-bold mb-2">
                City
              </label>
              <input type="email" name="city" class="border-0 px-3 py-3 placeholder-blueGray-300  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            </div>
          </div>
          <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase  text-xs font-bold mb-2">
                Country
              </label>
              <input type="text" name="country" class="border-0 px-3 py-3 placeholder-blueGray-300  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
            </div>
          </div>
          <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase  text-xs font-bold mb-2">
                Postal Code
              </label>
              <input type="text" name="postal" class="border-0 px-3 py-3 placeholder-blueGray-300  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
            </div>
          </div>
        </div>

        <hr class="mt-6 border-b-1 border-blueGray-300">

        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
          Diseases
        </h6>

        <input name="submit" value="<?= $mode ?>" class="hidden">
         <input name="id" value="<?= $id ?>" class="hidden">

        <div class="flex flex-wrap">
          <div class="w-full lg:w-12/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase  text-xs font-bold mb-2">
                Information
              </label>
              <textarea type="text" name="diseases" class="border-0 px-3 py-3 placeholder-blueGray-300  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" rows="4"></textarea>
            </div>
          </div>
        </div>
      </form>
    </div>
    <button  class="bg-blue-500 hover:bg-blue-700 uppercase text-white font-bold py-2 px-4 border border-blue-700 rounded">
      submit
    </button>
  </div> 
</div>
</section>
<?php include('../website/footer.php'); ?>
</body>
</html>