<?php

class Tyrion extends Lannister {
	public function sleepWith($class) {
		if (get_parent_class($class) === get_parent_class($this))
			print("Not even if I'm drunk !" . PHP_EOL);
		else
			print("Let's do this." . PHP_EOL);
	}
}

?>
