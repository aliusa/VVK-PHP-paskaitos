<style>
input[type=text] {border:0px solid #ccc;margin:-1px;padding: 0 2px 0 2px}/**/
table,thead,tbody,tr,th,td{border: 1px solid #777;border-collapse:collapse;}
</style>
<a href="<?php echo $_SERVER['PHP_SELF'] ?>">pradinis</a>
<?php
	function ff($arr, $i) {
		static $colors = array("lime", "yellow", "fuchsia", "black"); //Spalvų masyvas
		$bg = 'style="background-color:';
		if ($arr['reiksme'][$i] < 10) {$bg .= $colors[0];}
		elseif ($arr['reiksme'][$i] == 10) {$bg .= $colors[1];}
		elseif ($arr['reiksme'][$i] > 10) {$bg .= $colors[2];}
		else {$bg .= $colors[3];} //ERRORRRER
		return $bg.';"';
	}
	define("TABLE_SIZE", 10); //Formos eilučių kiekis.
	$arr = $_GET; //iš GET gaunam duomenų masyvą
	echo '<form method="GET" action="'.$_SERVER['PHP_SELF'].'">';
	echo '<table><thead><tr><th>Vardas</th><th>Skaičius</th></tr></thead><tbody>';
	for ($i = 0; $i <= TABLE_SIZE; $i++) {
		if ( (@$arr['vardas'][$i] != "") AND (@$arr['reiksme'][$i] != "") AND ((string)(int)@$arr['reiksme'][$i] === @$arr['reiksme'][$i]) ) {
			$bg = ff($arr, $i); //spalviname eilutes priklausomai nuo reikšmės laukelyje "Skaičius"
		} else $bg = ""; //nėra spalvos - balta
		echo '<tr><td><input type="text" name="vardas[]" value="'.@$arr['vardas'][$i].'" '.$bg.' /></td>';
		echo '<td><input type="text" name="reiksme[]" value="'.@$arr['reiksme'][$i].'" '.$bg.' /></td></tr>';
	}
	echo '<tr><td colspan=2><input type="submit" name="submit"/>';
	echo '</form></td></tr></tbody></table><br/>';
	if (isset($arr['submit'])) { //Iš formos gauna duomenis ir juos atvaizduoja lentelėj.
		echo '<table><thead><tr><th>Vardas</th><th>Skaičius</th></tr></thead><tbody>';
		for ($i = 0; $i <= TABLE_SIZE; $i++) {
			if ( ($arr['vardas'][$i] === "") OR ($arr['reiksme'][$i] === "") OR ((string)(int)@$arr['reiksme'][$i] !== @$arr['reiksme'][$i] ) ) continue;
			$bg = ff($arr, $i);
			echo '<tr '.$bg.'"><td>'.$arr['vardas'][$i].'</td><td>'.$arr['reiksme'][$i].'</td></tr>';
		}
		echo '</tbody></table>';
	}
?>