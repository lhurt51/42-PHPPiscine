<?php

ini_set('display_errors', 1);
error_reporting(E_ERROR);

class House {
	public function introduce() {
		print("House ".static::getHouseName()." of ".static::getHouseSeat().' : "'.static::getHouseMotto().'"' . PHP_EOL);
	}
}

?>
