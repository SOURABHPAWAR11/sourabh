<?php 

include("server.php");

$connect = mysqli_connect('localhost','root','','cart_system');
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$check_email = mysqli_query($connect,"SELECT * from register WHERE email='$email'");
	if(mysqli_num_rows($check_email)==1){
		header('location:resetpass.php?email='.$email);
	}else{
		echo 'wrong email';
	}
}
?>

<html>
<head>
<title>login form</title>
</head>
<body>
<form method="post">
	<table>
		<tr>
			<td><input type="text" name="email" placeholder="enter your email"></td>
		</tr>
		<tr>
			<td><button name="submit">check</td>
		</tr>
		
	</table>
</form>
</body>
</html>