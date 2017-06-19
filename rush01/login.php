<?php
include("auth.php");
session_start();
if (auth($_POST['login'], $_POST['passwd']) && $_POST['submit'] == "OK")
{
	$_SESSION['loggued_on_user'] = $_POST['login'];
	header("Location: http://localhost:8080/StarCraftRemake/");
	echo "OK\n";
}
else
{
	$_SESSION['loggued_on_user'] = "";
	header("Location: http://localhost:8080/StarCraftRemake/loginPage.php");
	echo "ERROR\n";
}
?>
