<?php

$folder = "../private";
$file = $folder."/passwd";

function error()
{
	echo "ERROR\n";
	exit();
}

if ($_POST['submit'] != "OK" || $_POST['passwd'] == '')
	error();
$new_usr = array("login" => $_POST['login'],"passwd" => hash("whirlpool", $_POST['passwd']));
if (file_exists($file))
{
	$cont = unserialize(file_get_contents($file));
	foreach ($cont as $ary)
		if ($ary['login'] === $new_usr['login']);
			error();
}
else
{
	$cont = array();
	if (!file_exists($folder))
		mkdir($folder);
}
array_push($cont, $new_usr);
file_put_contents($file, serialize($cont));
echo "OK\n";

?>
