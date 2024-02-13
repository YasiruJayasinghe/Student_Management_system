<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body background="school2.jpg" class="body_deg">
	<center>
		<div class="form_deg">
			<center class="title_deg">Login Form

			<h5>
				<?php 
				error_reporting(0);
				session_start();
				session_destroy();
				echo $_SESSION['loginMessage']
				 ?>
			</h5>
			</center>
		<form action="login_check.php" method="POST" class="login_form">
		  <div>
		  <label class="label_deg">Username</label>
		  <input type="text" name="username">
		  </div>
		  <div>
		  <label class="label_deg">Password</label>
		  <input type="password" name="password">
		  </div>
		  <button type="submit" class="btn btn-primary">Login</button>
		</form>
		</div>
	</center>
	   <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>