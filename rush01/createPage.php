<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Create Account</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<?php include("header.php") ?>
	<body>
		<form action="create.php" method="post">
			Username: <input type="text" placeholder="Enter Username" name="usr" value="" /><br/>
			Password: <input type="password" placeholder="Enter Password" name="passwd" value="" /><br/>
			Confirm Password: <input type="password" placeholder="Confirm Password" name="conpw" value="" /><br/>
			<input type="submit" name="submit" value="OK"/>
		</form>
		<p>Already have an account? <a href="loginPage.php">Sign in</a></p>
	</body>
</html>
