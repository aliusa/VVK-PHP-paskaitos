<?php
	//Vardų ir skaičių masyvas
	$arr = array(
		"John" => 10,
		"Simon" => 20,
		"Oona" => 15,
		"Luana" => 8,
		"Peter" => 16,
		"Marta" => 18,
		"Laima" => 10,
		"Stanislava" => 7,
		"Lukrecija" => 15,
		"Bozena" => 0
		);
	
	//Priklausomai nuo masyve esančio skaičiaus - spalvinam eilutes
	echo "<table border=1>";
	foreach ($arr as $k => $v) {
		if ($v == 10) {$color = "gold";}
		if ($v < 10) {$color = "teal";}
		if ($v > 10) {$color = "tan";}
		echo "<tr bgcolor=\"$color\"><td>$k</td><td>$v</td></tr>";
	}
	echo "</table>";
?>