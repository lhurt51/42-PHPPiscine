<?php

foreach ($_GET as $key => $value)
{
	if ($key === "action")
		$action = $value;
	else if ($key === "name")
		$name = $value;
	else if ($key === "value")
		$des = $value;
	else
		exit ();
}

if ($action === "set")
{
	if ($_COOKIE[$name] == '')
		setcookie($name, $des, time() + (86400 * 30));
}
else if ($action === "get")
{
	if ($_COOKIE[$name] != '')
		echo "$_COOKIE[$name]\n";
}
else if ($action === "del")
	setcookie($name, NULL, time() - 3600);
else
	exit ();

?>
