#!/usr/bin/php
<?PHP

$count = 0;
if ($argc == 2)
{
	$output = preg_replace('!\s+!', ' ', trim($argv[1]));
	echo "$output\n";
}

?>
