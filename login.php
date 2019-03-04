<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>DIABETES</title>
	<link rel="stylesheet"  href="styles/css/bootstrap.min.css">
</head>
<body class="container">
	<div class="col-md-4">
		<div class="panel panel-primary" >
			<div class="panel-heading">
				REGISTER
			</div>
			<div class="panel-body">
				<form method="post" enctype="multipart/form-data">
					<input type="email" name="email" placeholder="email" class="form-control"><br>
					<input type="password" name="password" placeholder="password" class="form-control"> <br>
					<input type="submit" name="login" class="btn-primary btn-block">
					<P>If new user. click <a href="index.php"> here </a>to Register </P>
				</form>
			</div>
		</div>
	</div>

</body>
</html>

<?php
session_start();
require 'includes/config.php';
extract($_POST);
if(isset($login)){
$password=md5($password);
	$loginQuery=mysqli_query($conn,"SELECT * FROM `dia1_users` WHERE email='$email' AND password='$password'");
	if(mysqli_num_rows($loginQuery)==1){
	$_SESSION['email']=$email;
	echo "<script> window.open('profile.php','_self'); </script>";
} else {
	echo "Invalid Credentials";
}
}
?>