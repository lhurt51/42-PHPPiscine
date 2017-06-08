#!/usr/bin/php
<?PHP

$count = 0;
$rtn_ary = array();
echo escapeshellcmd($argv[7]);
// setlocale(LC_CTYPE, "en_US.UTF-8");
// $options = getopt('#');
// if (!is_array($options) ) {
//     print "There was a problem reading in the options.\n\n";
//     exit(1);
// }
// $errors = array();
// print_r($options);
// echo "$options\n";
foreach ($argv as $elem)
{
	echo "$argc ";
	echo "$elem\n";
	if ($count++ != 0)
	{
		$output = preg_replace('!\s+!', ' ', trim($elem));
		$ary = explode(" ", $output);
		$rtn_ary = array_merge($rtn_ary, $ary);
	}
}
print_r($rtn_ary);
sort($rtn_ary, SORT_NATURAL | SORT_FLAG_CASE | SORT_NUMERIC);
// sort($rtn_ary, SORT_NUMERIC);
foreach ($rtn_ary as $elem)
	echo "$elem\n";

?>
