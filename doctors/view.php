<?php
 require_once '../lib/helper.php';

 $db = new db();
 $db->table_name = 'patient';
 $id = get('id');
 $mode = ($id == null) ? 'insert' : 'update';


 if ($id !== null)
{  
   $patient = $db->get_by($id);
   extract($patient);
   //dd($user);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<center>
    <img src="../images/Logo.png" alt="" class="w-32">
    <p>H M S  Hospital , Mumbai Pin code is 381010  . <br>H M S  Hospital is a area in Mumbai City in Maharastra State,<br> India City Name : Mumbai</p>
</center>


    <h1 class="p-4 font-bold">Transaction:<?= isset($id) ? $id : '' ?></h1>

    <div class="p-10">
        <div class="grid md:grid-cols-2 space-y-2">
        <div class="pt-2">
            <span class="font-semibold">Patient FullName: <?= isset($fullname) ? $fullname : '' ?></span>
        </div>

        <div class="">
            <span class="font-semibold">Patient Gender: <?= isset($gender) ? $gender : '' ?></span>
        </div>

        <div class="">
            <span class="font-semibold">Patient Age:  <?= isset($age) ? $age : '' ?></span>
        </div>


        <div class="">
            <span class="font-semibold">Patient RegistrationDate: <?= isset($joiningdate) ? $joiningdate : '' ?></span>
        </div>

        <div class="">
            <span class="font-semibold">Patient Email: <?= isset($email) ? $email : '' ?></span>
        </div>

        <div class="">
            <span class="font-semibold">Patient Contact: <?= isset($contact) ? $contact : '' ?></span>
        </div>
        </div>
    </div>
    <hr class="border-2 border-black">

    <div class="grid grid-cols-3 divide-y border-2  border-black p-4">
    <div class="font-semibold text-xl">Diseases: <?= isset($diseases) ? $diseases : '' ?></div> 
    </div>


    <div class="flex items-center justify-center p-4">
    <button onclick="window.print()" class="bg-blue-500 px-4 py-2 text-white rounded-lg">Print</button>
    </div>  
</body>
</html>
