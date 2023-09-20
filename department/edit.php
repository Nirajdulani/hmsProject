<?php

 
  require_once '../lib/helper.php';
  require_once '../layout/header.php';

  $db = new db();
  $db->table_name = 'department';

  $id = get('id');

  $mode = ($id == null) ? 'insert' : 'update';


  // The extract() function imports variables into the local symbol table from an array.
  //This function uses array keys as variable names and values as variable values. For each element it will create a variable in the current symbol table.
  //This function returns the number of variables extracted on success.
  //$a = "Original";
  //$my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
  //extract($my_array);
  //echo "\$a = $a; \$b = $b; \$c = $c";
  //output:$a = Cat; $b = Dog; $c = Horse


  if ($id !== null) {
    $department = $db->get_by($id);
    extract($department);
    //dd($user);
  }

?>

 <form method="post" action="<?= '../department/handle.php' ?>" class="bg-white rounded   p-4 px-4 md:p-8 mb-6 mx-64">
   <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
     <div class="text-gray-600">
       <h1 class="text-3xl font-bold">
         <?= ucfirst($mode) ?> Department <?= $id ?></h1>
     </div>

     <div class="lg:col-span-2">
       <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
         <div class="md:col-span-5">
           <label for="fullname">Full Name</label>
           <input type="text" name="fullname" id="fullname" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?= isset($fullname) ? $fullname : '' ?>" />
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

         <div class="md:col-span-5">
           <label for="fullname">Age</label>
           <input type="text" name="age" id="age" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?= isset($age) ? $age : '' ?>" />
         </div>

         <div class="md:col-span-5">
           <label for="fullname">Date</label>
           <input type="date" name="joiningdate" id="joiningdate" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?= isset($date) ? $date : '' ?>" />
           <!-- <input type="text" disabled id="demoDate" name="joiningdate" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?= isset($date) ? $date : '' ?>" /> -->
         </div>

         <div class="md:col-span-2">
           <label for="email">Email Address</label>
           <input type="text" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?= isset($email) ? $email : '' ?>" placeholder="email@domain.com" />
         </div>


         <div class="md:col-span-5">
           <label for="address">Address / Street</label>
           <textarea type="text" name="address" id="address" class="  border mt-1 rounded px-4 w-full bg-gray-50" placeholder="" rows="5"><?= isset($address) ? $address : '' ?></textarea>
         </div>

         <div class="md:col-span-1">
           <label for="contact">Contact</label>
           <input type="text" name="contact" id="contact" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?= isset($contact) ? $contact : '' ?>" placeholder="+91 9876543210" />
         </div>

         <!-- <div class="md:col-span-1">
           <label for="department">department</label>
           <input type="text" name="department" id="department" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?= isset($department) ? $department : '' ?>" placeholder="" />
         </div> -->



         
           <div class="md:col-span-1">
           <label for="department">Department</label>
        <select name="department" id="department" class="border-2 border-blacck mt-1 px-2 py-2 bg-gray-50" value="<?= isset($department) ? $department : '' ?>">
        <option value="cardiologist">cardiologist</option>
        <option value="receptionist">receptionist</option>
        <option value="neurology">neurology</option>
        <option value="nurse">nurse</option>
</select>
         </div>




         <input name="submit" value="<?= $mode ?>" class="hidden">
         <input name="id" value="<?= $id ?>" class="hidden">

         <div class="md:col-span-5 text-right">
           <div class="inline-flex items-end">

             <a href="<?= link_path('department/index.php') ?>" class="bg-gray-100 hover:bg-gray-200 text-black font-bold py-2 px-4 rounded mr-2">
                 Cancel

             </a>
             <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit"> <?= ucfirst($mode) ?></button>
           </div>
         </div>

       </div>
     </div>
   </div>
 </form>


 <?php require_once '../layout/footer.php'; ?>


 <script>
    let date = new Date();
    let day = date.getDate();
    let month = date.getMonth() +1 ;
    let year = date.getFullYear();
    let fullDate = `${day}/${month}/${year}`;
    let demoDate = document.querySelector("#demoDate").value = fullDate;

</script>