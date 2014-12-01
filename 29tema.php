<?php
/*padaryti mygtuka ar nuoroda. irasyti kombinacija
irasyti masyva ir ji irasyti i faila.
galima irasyti dar viena kombinacija

kitas mygtukas leidzia uzkrauti pasirinkta operacija
per forma galima pasirinkti kombinacija ir ji isikelia
*/
	function saveToFile() {
		global $fileName, $arr;
		$file = fopen($fileName, "a");
		$txt = implode("|", $arr);
		if (filesize($fileName) == 0) {
			fwrite($file, $txt);
		} else {
			fwrite($file, PHP_EOL.$txt);
		}
		fclose($file);
	}

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
		$menu .= "<a href=\"?op=5&link=$link\" style=\"color:red;\">Išsaugoti</a>";
		$menu .= "</td></tr></table><br/>";
		$menu .= "<a href=\"?\" style=\"color:green;\">PRADŽIA</a>";
		return $menu;
	}

	$fileName = $_SERVER['SCRIPT_FILENAME'].".txt"; 
	define("MAX", 10);
	$op   = @$_GET["op"];
	$link = @$_GET["link"];
	$type = @$_GET["type"];
	
	if (!$link){
		$arr = array ("silver", "copper", "silver", "copper", "silver", "copper"); //initial array
	} else {
		$arr = explode (",", $link); array_pop ($arr);
	}
	
	$count = count($arr);

	switch($op) {
		case 1: if ($count > 1) array_shift($arr);
				break;
		case 2: if ($count < MAX) array_unshift($arr, "$type");
				break;
		case 3: if ($count > 1) array_pop($arr);
				break;
		case 4: if ($count < MAX) array_push($arr, "$type") ;
				break;
		case 5: saveToFile();
				break;
		default: break;
	}
	
	unset($link);
	$link = "";
	foreach($arr as $k => $v) {
		$link .= "$v,"; //constructs link
	}
	var_dump($link);

	$arrPic = array ( //coin picture array
			"silver"	=> "29tema_coin_silver.png",
			"copper"	=> "29tema_coin_copper.png",
			"gold"		=> "29tema_coin_gold.png");

	$content = "<div align=\"center\">";
	foreach($arr as $k => $v) {
		$content .= "<img src=\"{$arrPic[$v]}\" width=\"50\" />";
	}
	$content .= "</div>" ;

	$menu = menu();
	echo "<div align=\"center\" >$menu<br/>$content</div>";
?>