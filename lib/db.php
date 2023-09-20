<?php


 class db
{
  public $conn;
  public $host = "localhost";
  public $user = "root";
  public $password = "";
  public $dbname = 'mvcdata';
  public $table_name = '';


  public function __construct()
  {

    // Create connection
    $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
    
    // Check connection
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
  }

  public  function total()
  {
    $total= $this->conn->query("SELECT * FROM $this->table_name")->fetch_all(MYSQLI_ASSOC);
    // dd($total);
    return count($total);
  }

  public function paginate($page_no = 1, $limit = 5, $search = '')
  {

    $total_records = $this->total();
    $total_pages = ceil($total_records / $limit);

    $start_from = ($page_no - 1) * $limit;
    $rows = $this->conn->query("SELECT * FROM $this->table_name WHERE fullname LIKE '%$search%'	ORDER BY id DESC LIMIT  $start_from, $limit")->fetch_all(MYSQLI_ASSOC);

    $data = [
      'page_no' => $page_no,
      'total' => $total_records,
      'total_pages' => $total_pages,
      'users' => $rows
    ];

    return $data;
  }


  public function get_all()
  {
    return $this->conn->query("SELECT * FROM $this->table_name ORDER BY id DESC")->fetch_all(MYSQLI_ASSOC);
  }

  public function get_by($id)
  {
    return $this->conn->query("SELECT * FROM $this->table_name where id=$id ") -> fetch_assoc();
  }

//The implode() function returns a string from the elements of an array.
//$arr = array('Hello','World!','Beautiful','Day!');
//echo implode(" ",$arr);
//output:Hello World! Beautiful Day!

  public function create($data)
  {
    $keys = implode(" ,", array_keys($data));
    $value = implode("', '", array_values($data));

    $sql = "INSERT INTO $this->table_name ($keys) VALUES ( '$value')";

    return $this->conn->query($sql);
  }

  public function update($data, $id)
  {


    $updateData = [];
    foreach ($data as $column => $value) {
      $updateData[] = "$column = '$value'";
    }


    $updateFields = implode(', ', $updateData);
    $sql = "UPDATE $this->table_name  SET $updateFields WHERE id= $id";



// return [$data,$updateData,$updateFields];
    return $this->conn->query($sql);
  }

  public function set_update($key, $value)
  {

    return "{$key} = {$value} ";
  }


  public function delete($id)
  {
    $sql = "DELETE FROM $this->table_name WHERE id=$id";
    return $this->conn->query($sql);
  }

//   public function login()
//   {
//     session_start();
// 	if($_SERVER['REQUEST_METHOD'] == "POST")
// 	{
// 		//something was posted
// 		$user_name = $_POST['user_name'];
// 		$password = $_POST['password'];

		
// 		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
// 		{

// 			//read from database
// 			$query = "select * from login where user_name = '$user_name' limit 1";
// 			$result = mysqli_query($this->conn, $query);

// 			if($result)
// 			{
// 				if($result && mysqli_num_rows($result) > 0)
// 				{

// 					$user_data = mysqli_fetch_assoc($result);
					
// 					if($user_data['password'] === $password)
// 					{

// 						$_SESSION['user_id'] = $user_data['user_id'];
// 						header("Location: ../dashboard/index.php");
// 						die;
// 					}
// 				}
// 			}
			
// 			echo "wrong username or password!";
// 		}
// 		else
// 		{
// 			echo "wrong username or password!";
// 		}
// 	}


//   }



//   function check_login($con)
// {

// 	if(isset($_SESSION['user_id']))
// 	{

// 		$id = $_SESSION['user_id'];
// 		$query = "select * from users where user_id = '$id' limit 1";

// 		$result = mysqli_query($con,$query);
// 		if($result && mysqli_num_rows($result) > 0)
// 		{

// 			$user_data = mysqli_fetch_assoc($result);
// 			return $user_data;
// 		}
// 	}

// 	//redirect to login
// 	header("Location: login.php");
// 	die;

// }

// function random_num($length)
// {

// 	$text = "";
// 	if($length < 5)
// 	{
// 		$length = 5;
// 	}

// 	$len = rand(4,$length);

// 	for ($i=0; $i < $len; $i++) { 
// 		# code...

// 		$text .= rand(0,9);
// 	}

// 	return $text;
// }

  
}
