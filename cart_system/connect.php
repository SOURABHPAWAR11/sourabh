<html>
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
include("server.php");

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
$sql="INSERT INTO contactus(name,email,subject,message) VALUES('$name','$email','$subject','$message')";

$connect->query($sql);

}



?>
<h1 class="ml-4 p-2">your feedback submitted succesfully</h1>
<a href="index.php"><button type="button" class="btn btn-primary ml-4" >Home Page</button></a>
</body>
</body>
