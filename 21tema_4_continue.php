<?php
//tipo kad spausdintu skaicius nesidalijancius is 3 ir 10.
	for ($i = -500; $i <= 10; $i++) {
		$s = $i % 3;
		$v = $i % 10;
		if ( ($s !== 0) AND ($v !== 0) ) continue;
		echo $i."<br/>";
	}
?>