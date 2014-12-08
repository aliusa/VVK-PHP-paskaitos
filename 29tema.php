<?php
/*
* Padaryta funkcija, kad galima būtų įrašyti kombinaciją,
* Nuskaityti visas kombinacijas iš failo su URL nuorodomis
*/
	$fileName = $_SERVER['SCRIPT_FILENAME'].".txt";  //failas į kurį įrašysim/nuskaitysim kombinacijas
	define("MAX", 10);      //maksimalus moenetų kiekis kombinacijoje
	define("SEPERATOR", "|");
	$op   = @$_GET["op"];   //ką darom, pradžios/galo nuimam/pridedam
	$link = @$_GET["link"]; //kombinacija
	$type = @$_GET["type"]; //kokią monetrą prideda/išimam

	//Išsaugom kombinaciją į failą
	function saveToFile() {
		global $fileName, $arr;
		$file = fopen($fileName, "a");
		$txt = implode(SEPERATOR, $arr);
		if (filesize($fileName) == 0) {
			fwrite($file, pack("CCC",0xef,0xbb,0xbf));
			fwrite($file, $txt);
		} else {
			fwrite($file, PHP_EOL.$txt);
		}
		fclose($file);
	}

	//Jei nenustatyta kombinacija URL nuorodoje - nustatom
	if (!$link){
		$arr = array ("silver", "copper", "silver", "copper", "silver", "copper"); //initial array
	} else {
		$link = trim($link, SEPERATOR);
		//Priešingu atveju imam duomenis iš URL
		$arr = explode (SEPERATOR, $link);
		//array_pop ($arr);
	}
	
	$count = count($arr);
	echo $count;
	switch($op) {
		case 1: //Nuiimam nuo priekio vieną monetą
				if ($count > 1) array_shift($arr);
				break;
		case 2: //Pridedam prie priekio vieną monetą
				if ($count < MAX) array_unshift($arr, "$type");
				break;
		case 3: //Nuiimam nuo galo vieną monetą
				if ($count > 1) array_pop($arr);
				break;
		case 4: //Pridedam prie galo vieną monetą
				if ($count < MAX) array_push($arr, "$type") ;
				break;
		case 5: //Išsaugom į failą kombinaciją
				saveToFile();
				break;
		default: break;
	}
	
	//nuorodos konstravimas
	function linkConstr($arr) {
		global $count;
		$link = "";
		foreach($arr as $k => $v) {
			//jei ne paskutinis elementas - pridedam kablelį
			$link .= "$v".SEPERATOR;
		}
		//Nuimam nuo galo kablelį
		$link = rtrim($link, SEPERATOR);
		return $link;
	}
	$link = linkConstr($arr);

	//monetų paveikslėlių masyvas
	function coinArray() {
		$mas = array (
			"silver"	=> "29tema_coin_silver.png",
			"copper"	=> "29tema_coin_copper.png",
			"gold"		=> "29tema_coin_gold.png");
		return $mas;
	}
	$arrPic = coinArray();

	//meniu, nuorodos su skritingomis funkcijomis
	function menu() {
		global $op, $type, $link;
		$menu =  "<table width=\"500\" align=\"center\"><tr><td>";
		$menu .= "<a href=\"?op=1&link=$link\" style=\"color:red;\">NUIMTI IŠ PRIEKIO</a><br/><br/>";
		$menu .= "<a href=\"?op=2&type=copper&link=$link\">PRIDĖTI PRIE PRIEKIO VARĮ</a><br/>";
		$menu .= "<a href=\"?op=2&type=silver&link=$link\">PRIDĖTI PRIE PRIEKIO SIDABRĄ</a><br/>";
		$menu .= "<a href=\"?op=2&type=gold&link=$link\">PRIDĖTI PRIE PRIEKIO AUKSĄ</a>";
		$menu .= "</td><td>";
		$menu .= "<a href=\"?op=3&link=$link\" style=\"color:red;\">NUIMTI IŠ GALO</a><br/><br/>";
		$menu .= "<a href=\"?op=4&type=copper&link=$link\">PRIDĖTI PRIE GALO VARĮ</a><br/>";
		$menu .= "<a href=\"?op=4&type=silver&link=$link\">PRIDĖTI PRIE GALO SIDABRĄ</a><br/>";
		$menu .= "<a href=\"?op=4&type=gold&link=$link\">PRIDĖTI PRIE GALO AUKSĄ</a><br/>";
		$menu .= "<a href=\"?op=5&link=$link\" style=\"color:red;\">Išsaugoti kombinaciją</a>";
		$menu .= "</td></tr></table><br/>";
		$menu .= "<a href=\"?\" style=\"color:green;\">PRADŽIA</a>";
		return $menu;
	}
	$menu = menu();

	//monetų paveikslėlių kodas
	$content = "<div align=\"center\">";
	foreach($arr as $k => $v) {
		$content .= "<img src=\"{$arrPic[$v]}\" height=50 />";
	}
	$content .= "</div>";

	//išvedam į ekraną meniu ir monetų eilutę
	echo "<div align=\"center\" >$menu<br/>$content</div>";

	function displaySelection() {
		global $fileName, $link;
		//Nuskaitom kombinacijas iš failo
		error_reporting(0);
		$file = fopen($fileName, "r") or die ("Nėra išsaugotų kombinacijų");
		error_reporting(E_ALL);
		$line = "";
		$txt = "<b>Kombinacijos:</b>";
		$i = 1;
		while(!feof($file)) {
			//Nuskaitom visą eilutę iš failo ir ištrinam nuo prieko ir galo tarpus
			$line = trim(fgets($file));
			$txt .= "<br/><a href=\"?link=$line\">$line</a>";
			$i++;
		}
		fclose($file);
		return $txt;
	}

	//išvedam į ekraną nuskaitytas iš failo kombinacijas
	echo displaySelection();
?>