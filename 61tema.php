<?php
	//Užduotis: atvaizduoti 5 pasirinkimus, bei balsavimo kiekio liniją atvaizduoji kaip kintamo ilgio paveikslėlį
	$failas = $_SERVER['SCRIPT_FILENAME'].".txt"; 
	$balsas = @$_GET['balsas']; //balsavima valdantis kintamasis
	define("COUNT", 5); //if changed number - change 10th line and $colors array
	
	// failo sukurimas, kuriame laikoma statistika
	if (@filesize($failas) == 0){
		$fp = fopen($failas, "w");
		fwrite($fp, "-|0|0|0|0|0");
		fclose($fp);
	}          

	if ($balsas){
		// apklausos balso irašymas 
		$h = file($failas);
		$hits = explode("|",$h[0]);

		$hits[$balsas]++;
		ksort ($hits); //butina išrikiuoti vel, nes kažkodel išsimaišo elementai

		$h = implode ("|", $hits);
		$fp = fopen($failas, "w");
		fwrite($fp, $h);
		fclose($fp);
		$viso = 0;
		for ($i = 1; $i <= COUNT; $i++) {
			$viso = $viso + $hits[$i];
		}

		//print to monitor
		$colors = array(1=>"red", 2=>"blue", 3=>"green", 4=>"yellow", 5=>"orange");
		for ($i = 1; $i <= COUNT; $i++) {
			echo "$i: ${hits[$i]}";
			$width = (100 * $hits[$i] / $viso) . "px";
			echo " <img src=\"".$_SERVER['PHP_SELF'].".png\" width=\"$width\" height=\"12px\" alt=\"pic\" /><br/>";
		}
		echo "<br/>Viso $viso <a href = \"".$_SERVER['PHP_SELF']."\" >atgal</a>";
	} else {
		//jeigu nera valdancio kintamojo, spausdinama balsavimo forma
		echo '<form action = "'.$_SERVER['PHP_SELF'].'" method="GET">';
		for ($i = 1; $i <= COUNT; $i++) {
			echo $i.' <input type="radio" name="balsas" value="'.$i.'" /><br/>';
		}
		echo "<input type=\"submit\" value=\"Pateikti\" />";
		echo "</form>";
	}
?>