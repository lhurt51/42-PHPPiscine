<?php
	session_start();
	foreach ($_GET as $key => $val)
	{
		if ($key === "passwd")
			$pass = $val;
		else if ($key === "login")
			$log = $val;
		else if ($key === "submit")
		{
			if ($val === "OK")
			{
				$_SESSION['usr'] = $log;
				$_SESSION['pass'] = $pass;
			}
		}
	}
?>
<html><body>
<form>
	Username: <input type="text" placeholder="Enter Username" name="login" value="<?php echo $_SESSION['usr'] ?>" />
	<br />
	Password: <input type="password" placeholder="Enter Password" name="passwd" value="<?php echo $_SESSION['pass'] ?>" />
	<input type="submit" name="submit" value="OK"/>
</form>
</body></html>
