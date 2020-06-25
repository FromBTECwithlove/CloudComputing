<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="" href="min.js">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
	<form action="connect.php" method="POST">
		<div class="container">
			<div class="left-section">
				<div class="header">
					<h1 class="animation a1">Welcome Back!</h1>
					<h4 class="animation a2">Log in to see and select products.</h4>
					<script><?php alert('Username: TinhTV<br>
						Password: 191020<br>')></script>
				</div>
				<div class="form">
					<input type="text" class="form-field animation a3" placeholder="Username" name="username">
					<input type="password" class="form-field animation a4" placeholder="Password" name="pass">
					<p class="animation a5"><a href="#">Forgot Password</a></p>
					<button class="animation a6">LOGIN</button>
				</div>
			</div>
			<div class="right-section"></div>
		</div>
	</form>
</body>
</html>
