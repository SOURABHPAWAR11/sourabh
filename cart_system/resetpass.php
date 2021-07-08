<?php
include("server.php");
$connect = mysqli_connect('localhost','root','','cart_system');
if(isset($_POST['submit'])){
	$newpass = $_POST['newpass'];
	//$newpass1 = $_POST['newpass1'];
	$email=$_GET['email'];
	
	$changepass=mysqli_query($connect,"UPDATE register SET password='$newpass' WHERE email='$email'");
	if($changepass){
	echo 'your password is changed';
	
	header("Refresh:2; url=index.php");
	}else{
		echo 'error';
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
				<td><input type="text" name="newpass" placeholder="enter your new password"></td>
			</tr>
			
			<tr>
				<td><button name="submit">change</button></td>
			</tr>
		</table>
	</form>
</body>
</html>