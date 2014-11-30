<?php
//4. Perrašykite miestų sąrašo generavimo pavyzdį į funkciją, kuriai perduodamas vienas parametras.
//Tas parametras valdo nuo kurio elemento spausdina miestų sąrašą.
//Funkciją iškvieskite su įvairiu parametro dydžiu.

	function fff($a) {
		$masyvas = array('','vilnius','kaunas','klaipeda','siauliai','panevezys');
		$kiekis = count($masyvas);
		echo("<SELECT name='kintamieji'>\n");
		$i = $a;
		do {
			echo ("\t<OPTION value=$i>{$masyvas[$i]}</OPTION>\n");
		} while (++$i < $kiekis);
			echo("</SELECT>\n");
	}

	fff(3);
?>