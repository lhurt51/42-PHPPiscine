#!/usr/bin/php
<?PHP

if ($argc > 1)
{
	$output = preg_replace('!\s+!', ' ', trim($argv[1]));
	$ary = explode(" ", trim($output));
	$last = array_shift($ary);
	array_push($ary, $last);
	foreach ($ary as $elem)
	{
		if ($check == true)
		{
			$check == false;
			echo " ";
		}
		echo "$elem";
		$check = true;
	}
	echo "\n";
}

?>
