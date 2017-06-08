#!/usr/bin/php
<?PHP

$count = 0;
$rtn_ary = array();
foreach ($argv as $elem)
{
	if ($count++ != 0)
	{
		$output = preg_replace('!\s+!', ' ', trim($elem));
		$ary = explode(" ", trim($output));
		$rtn_ary = array_merge($rtn_ary, $ary);
	}
}
sort($rtn_ary);
foreach ($rtn_ary as $elem)
	echo "$elem\n";

?>
