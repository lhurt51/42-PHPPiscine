<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login To Account</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<?php include("header.php") ?>
	<body>
		<form action="login.php" method="post">
			Username: <input type="text" placeholder="Enter Username" name="login" value="" /><br/>
			Password: <input type="password" placeholder="Enter Password" name="passwd" value="" /><br/>
			<input type="submit" name="submit" value="OK"/>
		</form>
		<p>Don't have an account? <a href="createPage.php">Create one</a></p>
	</body>
</html>
