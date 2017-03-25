<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<pre>
Įvesties pvz (be kabučių): "<u>     andr4jus,    kili6kevi2ius   </u>"
Programa panaikina dvigubus tarpus, pakeičia skaičius į atitinkamas LT raides
Išvedama Vardas ir Pavardė atskirose reikšmėse
</pre><hr/>

<form action="<?php $_SERVER['PHP_SELF']?>" method="GET" >
	<label>Vardas Pavardė: </label><input type="submit" name="submit" value="Submit" /><br/>
	<input type="text" name="inas" value="<?php echo @$_GET['inas']; ?>" /><br/>
</form>

<?php
if (isset($_GET['submit'])) {
	$str = $_GET['inas']; //iš formos gauti duomenys
	$str = trim($str); //pašalinam tarpus nuo priekio ir galo
	
	$len = strlen($str); //eilutės ilgis

	//pašalinam kablelius
	$str = str_replace(",", "", $str);
	//pakeičiam du tarpus į vieną
	for($i = 0; $i <= $len; $i++) {
		$str = str_replace("  ", " ", $str);
	}
	
	$len = strlen($str); //nauajs eilutės ilgis
	$arrNumbs = ["1","2","3","4","5","6","7","8","="]; //skaičių masyvas
	$arrChars = ["ą","č","ę","ė","į","š","ų","ū","ž"]; //raidžių masyvas

	$c = 0;
	$len = strlen($str); //nauajs eilutės ilgis
	for($i = 0; $i <= $len; $i++) {
		foreach($arrNumbs as $k => $v) {
			$str = str_replace($v, $arrChars[$c], $str);
			$c++;
		}
		$c = 0;
	}
	
	//visas raides į mažąsiasas
	$str = strtolower($str);
	//pirmąsias žodžių raides į didžiąsias
	$str = ucwords($str);
	
	//skaidom žodžius į atskirus elementus masyve
	$vardPav = explode(" ", $str);
	
	//išvedimas į ekraną
	if (sizeof($vardPav) === 1) {
		echo "Pateikite pilną vardą ir pavardę";
	} else {
		echo 'Vardas: '. $vardPav[0]. '<br/>' . 'Pavardė: '. $vardPav[1];
	}
}

?>
