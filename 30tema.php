<?php
//Užduotis. Išrikiuot pagal skaitmeniną atstumą nuo 4.
	$a = array(-5,-3,0,1,2,3,4,5,6,7,8);
	uasort ($a, "rikiavimoFunkcija"); print_r ($a);
	function rikiavimoFunkcija($a, $b){
		$a = abs(4 - $a);
		$b = abs(4 - $b);
		if ($a == $b) return 0;
		return ($a > $b) ? 1 : -1;
	}
?>