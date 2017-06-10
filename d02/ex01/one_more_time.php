#!/usr/bin/php
<?PHP

function find_month($month)
{
	if ($month == "janvier")
		return ("01");
	else if ($month == "fevrier")
		return ("02");
	else if ($month == "mars")
		return ("03");
	else if ($month == "avril")
		return ("04");
	else if ($month == "mai")
		return ("05");
	else if ($month == "juin")
		return ("06");
	else if ($month == "juillet")
		return ("07");
	else if ($month == "aout")
		return ("08");
	else if ($month == "septembre")
		return ("09");
	else if ($month == "octobre")
		return ("10");
	else if ($month == "novembre")
		return ("11");
	else if ($month == "decembre")
		return ("12");
	else
		return ("0");
}

date_default_timezone_set("UTC");

if ($argc == 2)
{
	if (preg_match("/[\w]+[\s][0-3]?[\d][\s][\w]+[\s][\d][\d][\d][\d][\s][0-2][0-9]:[0-5][0-9]:[0-5][0-9]/i", $argv[1]))
	{
		$ary = explode(" ", preg_replace("!\s+!", " ", $argv[1]));
		$month = find_month(strtolower($ary[2]));
		echo strtotime("$ary[3]-$month-$ary[1] $ary[4]") - strtotime('1970-01-01 01:00:00')."\n";
	}
	else
		echo "Wrong Format\n";
}

?>
