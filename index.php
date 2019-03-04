<!-- <!DOCTYPE html>
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
					<input type="text" name="name" placeholder="Name" class="form-control">
					<br><input type="email" name="email" placeholder="email" class="form-control"><br>
					<input type="password" name="password" placeholder="password" class="form-control"> <br>
					<input type="password" name="cpassword" placeholder="reenter password" class="form-control"><br>
					<input type="submit" name="submit" class="btn-primary btn-block">
					<P>Already have account. click <a href="login.php"> here </a>to login </P>
				</form>
			</div>
		</div>
	</div>

</body>
</html -->



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/css/style.css">
	<title>DIABETES DIAGONSIS WITH SMART HEALTH CARE</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/css/bootstrap.min.css">
</head>
<body class="container">
	<div class="mainDiv">
		<div class="sub1">
			<div class="c2">
				<img src="./images/dia.png" alt="flower" id="images" class="img-responsive">
				<p>DIABETES DIAGONISIS WITH SMART HEALTHCARE</p>
		
			</div>
		</div>
		
				<!-- <div class="sub2">
					<div class="c2">
						<img src="./images/logo.png">
					</div>
				</div> -->
	</div> <hr>

<!-- Modules -->
	<section class="flexParent">
		<div>
			<p>
				<b><a href="risk.php" target="_blank">Are You At Risk</a></b>
			</p>
		</div>

		<div>
			<p>
				<b><a href="basics.php" target="_blank">Diabetes Basics</a></b>
			</p>

			
		</div>

		<div>
			<p>
				<b><a href="food.php" target="_blank">food and fitness</a></b>
			</p>

			
		</div>


		<div>
			<p>
				<b><a href="advisor.php" target="_blank">My health Adivisor</a></b>
			</p>

			
		</div>

		<div>
			<form action="/action_page.php">
				<div class="input-group">
				<input type="search" name="q" class="form-control" placeholder="Google Search...">
				<span class="input-group-btn"> <button type="submit" class="btn btn-primary"> <span class="glyphicon glyphicon-search"> </span> </button> </span>
			</div>
			</form>

			
		</div>
	</section>
	

</body>
</html>


<?php
include 'includes/config.php';
extract($_POST);
if(isset($submit))
{
	$password=md5($password);
	$cpassword=md5($cpassword);
	$registerQuery=mysqli_query($conn,"INSERT INTO `dia1_users`(`name`, `email`, `password`, `cpassword`) VALUES ('$name','$email','$password','$cpassword')");
	if($registerQuery)
	{
		echo "success";
	}
	else
	{
		echo "Fail";
	}
}

  ?>