Užduotis. Sukurti kontrolę  Ūgiui > 170 ir Amžiui > 18, jeigu netenkina, meta klaidos pranešimus.
<?php
$vardas     = @$_GET ['vardas'];
$pavarde    = @$_GET ['pavarde'];
$amzius     = @$_GET ['amzius'];
$ugis       = @$_GET ['ugis'];
$failas	= $_SERVER['SCRIPT_FILENAME'].".txt"; //šio failo pavadinimas + ".txt"

if ($vardas && $pavarde && ($ugis > 170) && ($amzius > 18) ){
	$informacija = $vardas."|".$pavarde ."|".  $amzius ."|". $ugis ; 

	$f = fopen($failas, "a"); 
	fwrite($f, "${informacija}\n"); 
	fclose($f); 
	$f = fopen( $failas, "r" );
	echo "<pre>";
	while (!feof($f)) {
		$eilute = fgets($f, 4096);
		echo $eilute;
	}
	echo "</pre>";
	fclose ($f);
	echo "<a href=\"".$_SERVER['PHP_SELF']."\">Atgal</a>";
} else {
	if (@$_GET['submit']){
		echo "klaidos:<br/>";
		if (!$vardas)		echo "nėra vardo<br/>";
		if (!$pavarde)		echo "nėra pavardės<br/>";
		if ($ugis < 170)	echo "netinkamas ūgis<br/>";
		if ($amzius < 18)	echo "netinkamas amžius<br/>";
	}
?>
	<form action="<?=$_SERVER['PHP_SELF'];?>" method="GET">
	<input name="vardas" value='<?=@$_GET['vardas'];?>' placeholder="vardas" />
	<input name="pavarde" value='<?=@$_GET['pavarde'];?>' placeholder="pavardė" />
	<input name="amzius" value='<?=@$_GET['amzius'];?>' placeholder="amžius" />
	<input name="ugis" value='<?=@$_GET['ugis'];?>' placeholder="ūgis" />
	<input type="submit" name="submit" value="Pateikti" />
	</form>
<?php
}
?>