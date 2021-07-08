<?php
include("server.php");
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
  <!-- Navbar start -->
  <?php
	include("navigation.php");
	?>
  <!-- Navbar end -->
  
  <!--contact us form started-->
  
  <div class="container col-md-4 mb-3 pt-2">
  <h2>Contact Us</h2>
    
  <form action="connect.php" method="POST" >
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
    </div>
	
	<div class="form-group">
	<label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
	
	<div class="form-group">
	<label for="subject">Subject</label>
      <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject"required>
    </div>

	<div class="form-group">
  <label for="message">Message</label>
  <textarea class="form-control" rows="5" id="message" placeholder="Enter Message" name="message" required></textarea>
</div>
    <button type="submit" class="btn btn-primary" name="submit" id="button">Submit</button>

  </form>
</div>
  
  <!--contact us form ended-->
  


  

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>


</body>

</html>