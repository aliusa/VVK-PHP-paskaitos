<?php error_reporting(E_ALL); ?>
<a href="http://www.skelbimaizaidimaiorai.lt/php-programavimas-pamokos-kodai/php-klausimai-uzduotys-1" target="_blank">http://www.skelbimaizaidimaiorai.lt/php-programavimas-pamokos-kodai/php-klausimai-uzduotys-1</a><hr/>
<!---------------------------------------->
<h3>1.</h3>
<?php
//1. Sujunkite kintamuosius, kad atspausdintų tekstą "mano batai buvo du":
	$a = "du";
	$b = "mano";
	$c = "batai buvo";
	echo $b." ".$c." ".$a;
?>

<!---------------------------------------->
<h3>2.</h3>+
<?php
//2. Parašykite sąlygą: jeigu kintamasis $a daugiau už $b, spaudintų tekstą: " a daugiau už b" .
	if ($a > $b) {
		echo " a daugiau už b";
	}
?>

<!---------------------------------------->
<h3>3.</h3>
<?php
//3. Priskirkite dviems konstantoms kokias nors reikšmes ir jas sujunkite. Atspausdinkite.
	define("PIRMAS","1st");
	define("ANTRAS","2nd");
	echo PIRMAS.ANTRAS;
?>

<!---------------------------------------->
<h3>4.</h3>
<?php
//4. Ištaisykite klaidas, rezultate turi spausdinti žodį "Vokietija":
	$salis = "de";
	switch($salis) {
		case 'ca':
			echo ("Kanada");
			break;
		case "cr":
			echo ("Kosta Rika");
			break;
		case "de":
			echo ("Vokietija");
			break;
		case "uk":
			echo ("Didžioji Britanija");
			break;
		default:
			echo ("JAV");
	}
?>

<!---------------------------------------->
<h3>5.</h3>
<?php
//5. Kokias operacijas atlikti su $a ir $b, kad atspausdintų 11:
	$a = "10 maišų";
	$b = "1 maišas";
	echo $a + $b;
?>

<!---------------------------------------->
<h3>6.</h3>
<?php
	$a = $b = $c = $d = 0;
//6. Kokį kintamąjį (kintamuosius) reikia ištrinti ar užkomentuoti, kad $e įgytų reikšmę 10:
	$a = "11";
	$b = "5";
	$c = "6";
	$d = 4;
	
	$e = $d + $a - $b + $c;
	echo "1var. Reikia ištrinti kintamajį C iš formulės:<br/>";
	echo "4 + 11 - 5 + 0 = 10<br/><br/>";
	echo "2var. Reikia ištrinti kintamuosius A ir B iš formulės:<br/>";
	echo "4 + 0 - 0 + 6 = 10";
?>

<!---------------------------------------->
<h3>7.</h3>
<?php
	$b = $c = 0;
//7. Ką reikia užkomentuoti, kad $e įgytų reikšmę 4:
	$a = 5;
	//$b = $a + 1;
	//$c = $a -  1;
	$d = $c -  1;

	$e = $d + $a -$b + $c;
	echo "Reikia ištrinti kintamamųjų B ir C deklaracijas";
?>

<!---------------------------------------->
<h3>8.</h3>
<?php
//8. Ištaisykite kodą; rezultate spausdins "skirtumas yra":
	$a = 10;
	$b = 30;
	if ($a - $b) {
		echo "skirtumas yra";
	} else {
		echo "skirtumo nera";
	}
?>

<!---------------------------------------->
<h3>9.</h3>
<?php
//9. Turime kintamuosius ir reikšmes $vardas, $pavardė ir $atlyginimas. 
//Parašykite sąlygą, jeigu egzistuoja kinamieji $vardas ir $pavarde, o $atlyginimas > 5000, spausdinti - visi duomenys yra; kitu atveju spausdinti: duomenys netinkami.
	$vardas = "Le";
	$pavarde = "reddit";
	$atlyginimas = 900;
	if ($vardas && $pavarde && ($atlyginimas > 5000)) {
		echo "visi duomenys yra";
	} else {
		echo "duomenys netinkami";
	}
?>

<!---------------------------------------->
<h3>10.</h3>
<?php
//10. Turime masyvą. Padidinkite jo elementų reikšmes 10 kartų ir atspausdinkite.
	$a = array (10,20,30);
	for ($i = 0; $i < 10; $i++) {
		foreach ($a as $k => $v) {
			$a[$k] = $a[$k] + 1;
			$k++;
		}
	}
	var_dump($a);
?>
<!---------------------------------------->
<h3>11.</h3>
<?php
//11. Turime masyvą.
//Sukurkite seno masyvo pagrindu naują masyvą. Palikite tiek elementų, kokia yra pirma masyvo reikšmė ir atspausdinkite.
	$a = array(3,10,20,30,40,50);

	$b = $a;
	$k = $b[0];
	$s = sizeof($b);
	for ($i = $s; $i >= $k; $i--) {
		unset($b[$i]);
	}
	var_dump($b);
?>

<!---------------------------------------->
<h3>12.</h3>
<?php
//12. Turime masyvą.
//Sukurkite seno masyvo pagrindu naują masyvą. Sumažinkite jo elementų kiekį 2 kartus, t.y. palikite kas antrą elementą ir atspausdinkite.
	$a = array (10,20,30,50,60,70,80);

	$b = $a;
	$s = sizeof($b);
	for ($i = 0; $i <= $s; $i++) {
		$i++;
		unset($b[$i]);
	}
	var_dump($b);
?>
<!---------------------------------------->
<h3>13.</h3>
<?php
//13. Ką daryti, kad reikšmes naršyklėje rodytų skirtingose eilutėse:
	//echo "a \n b \n c \n d";
	echo "Įterpti 'pre' žymę.";
	//echo "<pre>a \n b \n c \n d</pre>";
?>

<!---------------------------------------->
<h3>14.</h3>
<?php
//14. Formos ir nuorodos. Kuo skiriasi GET nuo POST duomenų siuntimo būdai. Kaip tai patikrinti?
	echo "Su GET duomenys perduodami neužkoduotai - per URL nuorodą.<br/>";
	echo "GET limituotas siūsti tekstinius (ASCII) iki 256 simbolių.<br/>";
	echo "Su POST galima siūsti failus iki 2MB (default), bet galima padidint per nustatymus.<br/>";
	echo "Patikrinti galima - jei URL nuorodoje yra papildomų duomenų tada naudojama GET metodas";
?>

<!---------------------------------------->
<h3>15.</h3>
<?php
//15. Koks skirtumas tarp ===, ==,  = PHP kalboje?
	echo "= Priskiria dešiniają reikšmę kairiajai<br/>";
	echo "== Lygina ar jų reikšmės tokios pat<br/>";
	echo "=== Lygina ar jų reikšmės ir jų duomenų tipai tokie pat";
?>

<!---------------------------------------->
<h3>16.</h3>
<?php
//16. Kuo skiriasi switch nuo if?
	echo "Su If galima nurodyt kriterijuose daugiau kriterijų<br/>";
	echo "Su Case galima įvykdyti ir kitus įvykius, nepertraukiant ciklo su break";
?>