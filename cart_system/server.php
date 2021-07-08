<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 






// connect to the database
/*$host="localhost";
$user="root";
$password="";
$dbname="cart_system";
$connect=mysqli_connect($host,$user,$password,$dbname);
$dbname = mysqli_connect('localhost', 'root', '', 'cart_system');*/
include("db_connection.php");


// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($dbname, $_POST['firstname']);
  $last_name = mysqli_real_escape_string($dbname, $_POST['lastname']);
  $email = mysqli_real_escape_string($dbname, $_POST['email']);
  $password = mysqli_real_escape_string($dbname, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($dbname, $_POST['confirm_password']);
  $mobile = mysqli_real_escape_string($dbname, $_POST['mobile']);
   
  $address = mysqli_real_escape_string($dbname, $_POST['address']);
//  echo $_POST['firstname'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name)) { array_push($errors, "First Name is required"); }
  if (empty($last_name)) { array_push($errors, "Last Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($confirm_password)) { array_push($errors, "Password is required"); }
  if ($password != $confirm_password) {array_push($errors, "The two passwords do not match"); }
  if (empty($mobile)) { array_push($errors, "Mobile is required"); }
  
  if (empty($address)) { array_push($errors, "Address is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM register WHERE email='$email'";// OR password='$password' LIMIT 1";
  $result = mysqli_query($dbname, $user_check_query);
  $user = mysqli_fetch_assoc($result);
//  echo $user['email'];
  $no_of_rows = mysqli_num_rows($result);
//  echo $no_of_rows;

if (strlen($first_name)>0 and strlen($last_name)>0  and strlen($email)>0 and strlen($password)>0 and strlen($confirm_password)>0 and strlen($mobile)>0 and strlen($address)>0) {
if ($no_of_rows > 0) {
	array_push($errors, "Email already exists");
}

else {
	   	$query = "INSERT INTO register(first_name,last_name,email,password,confirm_password,mobile_no,address) VALUES('$first_name','$last_name','$email','$password','$confirm_password','$mobile','$address')";
  	mysqli_query($dbname, $query);
	array_push($errors, "Registration Done");
}
}



  

}

// ... 


// ... 

// LOGIN USER


if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($dbname, $_POST['email']);
  $password = mysqli_real_escape_string($dbname, $_POST['password']);
//echo $email.$password;
  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
//  	$password = md5($password);
//	echo $password;	
  	$query = "SELECT * FROM register WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($dbname, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
//	  echo $_SESSION['email'];
//	  echo $_SESSION['success'];
	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}

//..

//..



?>