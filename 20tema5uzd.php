<?php
	include "20tema5uzdFunkcijos.php";
	if (isset($_GET["submit"])) {
		//tikrinam ar neivesti visi duomenys
		if ( !isset($_GET['vartotojas']) OR !isset($_GET['slaptazodis']) OR !isset($_GET['kodas']) ) {
			echo 'blogai<br><a href= "'.$_SERVER['PHP_SELF'].'">atgal</a>';
		} else {
			//priskiriame gautus GET duomenis
			$vartotojas  = $_GET["vartotojas"];
			$slaptazodis = $_GET["slaptazodis"];
			$kodas       = $_GET["kodas"];
			//kontrolinis kodas
			$code = array("213", "312", "132");
			//kodo patikrinimas
			if (fff($kodas, $code)) {
				if ( ($vartotojas === "jonas") AND ($slaptazodis === "1972") ) {
					a();
				} elseif ( ($vartotojas === "petras") AND ($slaptazodis === "1973") ) {
					b();
				} else {
					echo 'blogai<br><a href= "'.$_SERVER['PHP_SELF'].'">atgal</a>';
				}
			} else {
				echo 'blogai<br><a href= "'.$_SERVER['PHP_SELF'].'">atgal</a>';
			}
		}
	} else {
?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
		<label>Vartotojas: </label><input type="text" name="vartotojas" /><br>
		<label>Slaptažodis: </label><input type="password" name="slaptazodis" /><br>
		<label>Kodas: </label><input type="text" name="kodas" /><br>
		<input type="submit" name="submit" value="Patvirtinti" />
		<input type="reset" value="Atšaukti" />
	</form>
<?php
	}
?>