#!/usr/bin/php
<?PHP

if ($argc >= 2)
{
	$output = preg_replace('!\s+!', ' ', trim($argv[1]));
	echo "$output\n";
}

?>
