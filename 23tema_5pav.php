<table width="100%">
<?php
	$a = array("44", "55", "66", "88", "AA"); //spalvų masyvas

	$countArr = count($a) ; //masyvo elementų kiekis
	$count = 20;
	for($x = 0; $x <= $count -1; $x++) {
		$xMod = $x % $countArr;
		$c = "#{$a[$xMod]}{$a[$xMod]}{$a[$xMod]}"; //spalvų kintamasis
		echo '<tr><td bgcolor="'.$c.'" align="center">'.$a[$xMod].'</td></tr>';
	}
?>
</table>