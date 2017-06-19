<?php

function auth($login, $passwd)
{
	$match = false;
	if (file_exists("../private/passwd"))
	{
		$cont = unserialize(file_get_contents("../private/passwd"));
		foreach ($cont as $ary)
		{
			if ($ary['login'] === $login && $ary['passwd'] === hash("whirlpool" ,$passwd))
			{
				$match = true;
				break;
			}
		}
	}
	return ($match);
}

?>
