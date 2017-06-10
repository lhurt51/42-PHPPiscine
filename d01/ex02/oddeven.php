#!/usr/bin/php
<?PHP

echo "Enter a number: ";
$fd = fopen("php://stdin","r");
while (($line = fgets($fd)))
{
    $line = trim($line);
    if(is_numeric($line)){
        if ($line % 2 == 0)
            echo "The number $line is even\n";
        else
            echo "The number $line is odd\n";
    }
    else
        echo "'$line' is not a number\n";
    echo "Enter a number: ";
}
fclose($fd);

?>
