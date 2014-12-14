<?php error_reporting(E_ALL); ?>
<a href="http://www.skelbimaizaidimaiorai.lt/php-programavimas-pamokos-kodai/php-klausimai-uzduotys-2" target="_blank">http://www.skelbimaizaidimaiorai.lt/php-programavimas-pamokos-kodai/php-klausimai-uzduotys-2</a><hr/>
<!---------------------------------------->
<h3>1.</h2>
<?php
//1. Sukurkite funkciją, kuri sujungia 3 išorinius kintamuosius ir grąžina reikšmę- tų kintamųjų sąjungą.

	function aa($a,$b,$c) {
		return $a.$b.$c;
	}

	$a = 1;
	$b = 2;
	$c = 3;

	echo aa($a, $b, $c);
?>
<!---------------------------------------->
<h3>2.</h2>
<?php
//2. Sukurkite funkciją, kuri atliktų sudėties, atimties, daugybos ar dalybos veiksmus,
//perduodant jai 3 parametrus. Iškviečiama ji turėtų būti:

	function func ($op , $sk1 , $sk2) {
		switch ($op) {
			Case "+" :
				return $sk1 + $sk2;
				break;
			Case "-" :
				return $sk1 - $sk2;
				break;
			Case "*" :
				return $sk1 * $sk2;
				break;
			Case "/" :
				return $sk1 / $sk2;
				break;
			default :
				return "ERROR";
				break;
		}
	}

	$c = "+";		//  + - * /
	$sk1 = 1;		//pirmas skaičius
	$sk2 = 2;		//antras skaičius

	echo func($c, $sk1, $sk2);
?>
<!---------------------------------------->
<h3>3.</h2>
<?php
//3. Suraskite klaidas. Rezultatas- 10:

	function a($b) {
		if ($b === 10 ) {
			return 10;
		} else {
			return 20;
		}
	}

	echo a(10);
?>
<!---------------------------------------->
<h3>3a.</h2>
<?php
//3a. Sukurkite funkciją, kuri grąžina naują masyvą iš jai perduodamo masyvo.
//Naujas masyvas neturi pirmo ir paskutinio seno masyvo elemento.
//Masyvo elementų kiekiui suskaičiuoti naudokite $kiekis = count($masyvas); sakinį.
//Pvz.: Jeigu senas masyvas:
//array (1,2,3,4,5,66,77,888,999,1000), tai naujas masyvas turi gautis  array (2,3,4,5,66,77,888,999),
//t.y neturintis pirmo ir paskutinio seno masyvo elementų.

	function ff($arr) {
		$k = 0; //pradinis elementų kiekis masyve
		foreach ($arr as $key) {
			$k++; //iteruojam elementų kiekį masyve
		}
		$count = $k - 1; //-1 nes pradėjom nuo 0
		$k = 0;
		foreach ($arr as $key) {
			if ( ($k === 0) OR ($k === $count) ) {
				unset($arr[$k]); //ištrinam elementą iš masyvo
			}
			$k++;
		}
		return $arr; //grąžinam reikšmę
	}
	//pradinis masyvas
	$arr = array(1,2,3,4,5,66,77,888,999,1000);
	print_r(ff($arr));
?>
<!---------------------------------------->
<h3>3b.</h2>
<?php
//3b. Sukurkite funkciją, kuri masyvą padalina į du naujus beveik lygius masyvus, t.y 
//array (1,2,3,4,5) bus padalintas į array (1,2,3) ir  array (4,5)  masyvus. 
//Masyvo elementų kiekiui suskaičiuoti naudokite $kiekis = count($masyvas); sakinį.

	function fff($arr) {
		$k = 0; //pradinis elementų kiekis masyve
		foreach ($arr as $key) {
			$k++;
		}
		$k++;
		$arr1 = array_slice($arr, 0, $k/2);
		$arr2 = array_slice($arr, $k/2, $k);
		return array($arr1, $arr2); //grąžinam masyvus
	}

	//pradinis masyvas
	$arr = array(1,2,3,4,5);
	//priskiriam abi masyvo puses į atskirus masyvus
	list($a1, $a2) = fff($arr);

	print_r($a1);
	print_r($a2);
?>
<!---------------------------------------->
<h3>4.</h2>
<a href="20tema4uzd.php" target="_blank">20tema4uzd.php</a>

<!---------------------------------------->
<h3>5.</h2>
<?php
//5. Papildykite PHP. $_GET, $_POST - 3. Sąlygos. Autorizacija prisijungimo- autorizacijos pavyzdį,
//kad reikalautų kontrolinio kodo. Kontrolinis kodas yra laikomas masyve ir turi 2 reikšmes: 321 ir 231.
//Jis įvedimas į formos tekstinę dėžutę. Kontrolinio kodo tikrinimas laikomas funkcijoje - functions.php faile.
//Naudoti kontrolinių kodų masyvą array ("213", "312", "132") ir tikrinimui: in_array funkciją. 
?>
<a href="20tema5uzd.php" target="_blank">20tema5uzd.php</a>
