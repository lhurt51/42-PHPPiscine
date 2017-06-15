<?php
class Example {

	function __construct() {
		print( 'Constructor called' . PHP_EOL );
		return;
	}

	function __destruct() {
		print( 'Destructor called' . PHP_EOL );
	}
}

$instance = new Example();
?>
