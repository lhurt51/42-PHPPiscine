<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Modify Account</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<?php include("header.php") ?>
	<body>
		<form action="modif.php" method="post">
			Username: <input type="text" placeholder="Enter Current Username" name="login" value="" /><br/>
			Old Password: <input type="password" placeholder="Enter Current Password" name="oldpw" value="" /><br/>
			New Password: <input type="password" placeholder="Enter New Password" name="newpw" value="" /><br/>
			<input type="submit" name="submit" value="OK"/>
		</form>
	</body>
</html>
