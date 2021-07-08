<?php include('server.php') ?>
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
  <!-- Navbar start -->
   <?php
	include("navigation.php");
	//session_start();
	
	?>
  <!-- Navbar end -->
  
  
  <!--registration form start-->
  
  <div class="container col-md-4 mb-3 pt-2">
  <h2>Registration Form</h2>
  <p>
  		Click here for login-> <a href="login.php"  style="text-decoration: none">Login</a>
  </p>
  <form action="register.php" method="POST">
    <div class="form-group">
	<?php include('errors.php'); ?>
      <label for="firstname">First Name</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter fisrt name" name="firstname"
	  value="<?php if(isset($first_name)){echo $first_name;} ?>">
    </div>
	
	<div class="form-group">
	<label for="lastname">Last Name</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="lastname"
	  value="<?php if(isset($last_name))echo $last_name; ?>">
    </div>
	
	<div class="form-group">
	<label for="email">Email</label>
      <input type="email" class="form-control" id="lastname" placeholder="Enter email" name="email" value="<?php echo $email; ?>">
    </div>
	
	<div class="form-group">
	<label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
	
	<div class="form-group">
	<label for="confirm_password">Confirm Password</label>
      <input type="password" class="form-control" id="confirm_password" placeholder="Enter confirm password" name="confirm_password">
    </div>
	
    <div class="form-group">
      <label for="mobile">Mobile No.</label>
      <input type="text" class="form-control" id="mobile" maxlength="10" placeholder="Enter mobile no." name="mobile" value="<?php if(isset($mobile)) echo $mobile; ?>">
    </div>
	
	
	<div class="form-group">
  <label for="comment">Address</label>
  <textarea class="form-control" rows="5" id="comment" name="address" value="<?php if(isset($address)) echo $address; ?>"></textarea>
</div>
    <button type="submit" class="btn btn-primary" name="register">Submit</button>

  </form>
</div>
  
  <!--registration form end-->

  

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>


</body>

</html>