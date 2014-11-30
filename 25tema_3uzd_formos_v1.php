<a href="<?php echo $_SERVER['PHP_SELF'] ?>">pradinis</a>
<?php
	define("TABLE_SIZE", 10); //Formos eilučių kiekis.
	$arr = $_GET; //iš GET gaunam duomenų masyvą
	echo '<form method="GET" action="'.$_SERVER['PHP_SELF'].'">';
	echo '<table border=1><tr><td><b>Vardas</b></td><td><b>Skaičius</b></td></tr>';
	for ($i = 0; $i <= TABLE_SIZE; $i++) {
		echo '<tr><td><input type="text" name="vardas[]" value="'.@$arr['vardas'][$i].'" /></td>';
		echo '<td><input type="text" name="reiksme[]" value="'.@$arr['reiksme'][$i].'" /></td></tr>';
	} //@ - naudojam kad neišmestų klaidos pranešimo, kai nėra reikšmės
	echo '<tr><td><input type="submit" name="submit"/><td></td>';
	echo '</form></td></tr></table><br/>';
	//Jei formos eilutėj "vardas" arba "skaičius" input'e nėra reikšmės - neatvaizduos tos eilutės.
	if (isset($arr['submit'])) { //Iš formos gauna duomenis ir juos atvaizduoja lentelėj.
		$colors = array("gold", "lime", "fuchsia", "black"); //Spalvų masyvas
		echo '<table border=1><tr><td><b>Vardas</b></td><td><b>Skaičius</b></td></tr>';
		for ($i = 0; $i <= TABLE_SIZE; $i++) {
			if ( ($arr['vardas'][$i] === "") OR ($arr['reiksme'][$i] === "") ) continue;
			//spalviname eilutes priklausomai nuo reikšmės laukelyje "Skaičius"
			if ( $arr['reiksme'][$i] == 10 )  {$color = $colors[0];} //== nes data type yra string
			elseif ( $arr['reiksme'][$i] < 10 ) {$color = $colors[1];}
			elseif ( $arr['reiksme'][$i] > 10 ) {$color = $colors[2];}
			else {$color = $colors[3];}
			echo '<tr bgcolor="'.$color.'"><td>'.$arr['vardas'][$i].'</td><td>'.$arr['reiksme'][$i].'</td></tr>';
		}
		echo '</table>';
	}
?>