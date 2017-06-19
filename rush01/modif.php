<?php

$i = 0;
$match = false;
$folder = "../private";
$file = $folder."/passwd";

function error()
{
	header("Location: http://localhost:8080/StarCraftRemake/modifyPage.php");
	echo "ERROR\n";
	exit();
}

if ($_POST['submit'] != "OK" || $_POST['newpw'] === '' || $_POST['oldpw'] === '')
	error();
$cur_usr = array("login" => $_POST['login'],"oldpw" => hash('whirlpool', $_POST['oldpw']),"newpw" => hash("whirlpool", $_POST['newpw']));
$cont = unserialize(file_get_contents($file));
foreach ($cont as $ary)
{
	if ($ary['login'] === $cur_usr['login'] && $ary['passwd'] === $cur_usr['oldpw'])
	{
		$match = true;
		break;
	}
	$i++;
}
if ($match === false)
	error();
$cont[$i]['passwd'] = $cur_usr['newpw'];
file_put_contents($file, serialize($cont));
header("Location: http://localhost:8080/StarCraftRemake/");
echo "OK\n";

?>
