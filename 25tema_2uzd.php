<table width="100%" border="0" cellspacing="0">
<?php
	//Spalvų masyvas
	$a = array("tan", "teal", "blue", "yellow",
		"magenta", "brown", "cyan", "gold",
		"fuchsia", "lavender", "lime", "pink", "teal");

	$countArr = count($a);	//Masyvo elementų kiekis
	$count = 30;			//Kiek eilučių generuoti
	for($x = 0; $x <= $count - 1; $x++) {	//"-1" - nes skaičiuojam nuo 0
		$xMod = $x / 4;		//"4" - Kas kiek eilučių keist spalvą
		$color = $a[$xMod]; //spalvų kintamasis
		echo "<tr><td bgcolor=\"$color\" align=\"center\">".$a[$xMod]."</td></tr>";
	}
?>
</table>