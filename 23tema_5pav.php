<table width="100%">
<?php
	$a = array("44", "55", "66", "88", "AA"); // spalvu masyvas

	$countArr = count($a) ; // koks masyvo elementu kiekis
	$count = 20;
	for($x = 0; $x <= $count -1; $x++) {
		$xMod = $x % $countArr;
		$c = "#{$a[$xMod]}{$a[$xMod]}{$a[$xMod]}"; //spalvu kintamasis
		echo '<tr><td bgcolor="'.$c.'" align="center">'.$a[$xMod].'</td></tr>';
	}
?>
</table>