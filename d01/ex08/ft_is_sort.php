<?PHP

function ft_is_sort($ary)
{
	if (is_array($ary))
	{
		$tmp = $ary;
		sort($tmp);
		if ($tmp == $ary)
			return true;
		else
			return false;
	}
}

?>
