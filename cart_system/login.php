<?php include('server.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Shopping Cart System</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>
<?php
/*
//$connect = mysqli_connect('localhost','root','','loginform');
//session_start();
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	//$confirm_password = $_POST['confirm_password'];
	$sql = "SELECT * from register WHERE email='$email' AND password='$Password'";
	$result = mysqli_query($connect,$sql);
	if(mysqli_num_rows($result)==1){
		header('location:index.php');
		$_SESSION['email']=$email;
	}else{
		echo 'wrong login information';
	}
}
if(isset($_GET['logout'])){
	session_destroy();
}
if(isset($_GET['email'])){
	header('location:welcome.php');
}*/
?>

<?php
include "session_start.php";
?>
  <!-- Navbar start -->
   <?php
   
//   unset($_SESSION['email']);
//   $email = mysqli_real_escape_string($dbname, $_POST['email']);
// 	  echo $email;
//   $_SESSION["email"] = $email;
//   echo $_SESSION["email"];
	include("navigation.php");
	?>
  <!-- Navbar end -->
  
  
  <!--login form started-->
  
  <div class="container col-md-4 mb-3 pt-2">
  <h2>Login form</h2>
  <p>
  		Not yet a member? <a href="register.php"  style="text-decoration: none">Sign up</a>
  </p>
  <form action="login.php" method="POST">
 <?php include('errors.php'); ?>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="form-group form-check">
    </div>
	<p>
  		forget password? <a href="verification.php"  style="text-decoration: none">click here</a>
  	</p>
    <button type="submit" class="btn btn-primary" name="login">login</button>
	
  </form>
</div>

  
  <!--login form ended-->

  

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>


</body>

</html>