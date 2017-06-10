<?PHP

function ft_split($str)
{
	// $i = -1;
	// $ary = explode(" ", $str);
	$ary = preg_replace("!\s+!", " ",$str);
	$next = explode(" ", $ary);
	sort($next);
	return ($next);
}

?>
