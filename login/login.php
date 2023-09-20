<?php 

session_start();

	include("../login/connection.php");
	include("../login/functions.php");

	
	

		if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from login where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: ../dash/dashboard.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}
		else
		{
			echo "wrong username or password!";
		}
	}

?>
	<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>



<div class="text-2xl p-10">
	<img src="../images/Logo.png" class="w-36" alt="">
</div>
<section>

	<div class=" h-96 w-96  m-auto border-2 bg-white px-4 py-4 rounded-2xl">
		

<h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white pt-2">LOGIN </h1></center>
	<form class="space-y-4 md:space-y-6" action="#" method="POST">

			<div class="pt-10">
				<label for="user_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">user_name</label>
				<input type="user_name" name="user_name" id="user_name" class="bg-gray-100 border border-black rounded-lg w-full p-2" placeholder="" required="required">
			</div>
			<div>
				<label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
				<input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-100 border border-black  rounded-lg w-full p-2 " required="required">
			</div>
			<div class="">
				<button class="bg-blue-500 text-white px-2 rounded-lg py-2 w-full hover:bg-gray-800 ">LOG IN</button>
			</div>
			

</form>
<?php  include('../layout/footer.php'); ?>



</body>
</html>