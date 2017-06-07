<?PHP

function ft_split($str)
{
	$ary = explode(" ", $str);
	sort($ary);
	return ($ary);
}

?>
