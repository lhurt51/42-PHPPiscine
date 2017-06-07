#!/usr/bin/php
<?PHP

echo "Enter a number: ";
$fd = fopen ("php://stdin","r");
$line = trim(fgets($fd));
if(is_numeric($line)){
    if ($line % 2 == 0)
		echo "The number $line is even\n";
	else
		echo "The number $line is odd\n";
}
elseif ($line ==  "^D")
    exit;
else
	echo "'$line' is not a number\n";
fclose($fd);

?>
