<?php

ini_set('display_errors', 1);
error_reporting(E_ERROR);

class NightsWatch implements IFighter {
	public function recruit($per) {
		if (($ary = class_implements(get_class($per)))) {
			if (in_array("IFighter", $ary)) {
				if (method_exists($per, "fight")) {
					$per->fight();
				}
			}
		}
	}
	public function fight() {}
}

?>
