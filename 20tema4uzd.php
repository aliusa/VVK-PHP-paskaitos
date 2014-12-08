<h3>index.php FAILAS</h3>
<a href= "<?php echo $_SERVER['PHP_SELF']; ?>">Pradinis</a><br>
<?php
/*
* 4. Papildykite PHP. $_GET, $_POST - 1. Sąlygos. Autorizacija prisijungimo- autorizacijos pavyzdį,
* kad reikalautų kontrolinio kodo. Kontrolinis kodas yra laikomas masyve ir turi 2 reikšmes: 321 ir 231.
* Jis įvedimas į formos tekstinę dėžutę. Neteisingai jį įvedus, vartotojų duomenys nerodomi.
*/
	//jei paspaudžiamas Submit mygtukas - tikrina duomenis
	if (isset($_GET["submit"])) {
		//gauname duomenis iš formos
		$vartotojas  = $_GET["vartotojas"];
		$slaptazodis = $_GET["slaptazodis"];
		$kod         = $_GET["kodas"];

		//kontrolinių kodų masyvas
		$code = array(321,231);

		//Ar įvestas kontrolinis kodas sutampa su vienu iš nustatytu kodu
		if ( $kod === ($code[0] OR $code[1]) ){
			if ( ($vartotojas === "jonas") && ($slaptazodis === "1972") ) {
				include("20tema4uzdMano.html");
			} elseif ( ($vartotojas === "petras") && ($slaptazodis === "1973") ) {
				include('20tema4uzdKitas.html');
			} else echo "blogai <br>";
		} else echo "blogai <br>";
	} else {
	//jei nėra paspaustas mygtukas - atvaizduojam formą
?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
		<label>Vartotojas: </label><input type="text" name="vartotojas" /><br>
		<label>Slaptažodis: </label><input type="password" name="slaptazodis" /><br>
		<label>Kodas: </label><input type="text" name="kodas" /><br>
		<input type="submit" name="submit" value="Pateikti"/> <input type="reset">
	</form>
<?php
	}
?>