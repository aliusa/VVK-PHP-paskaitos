<form action = "<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
	<input type="text" name="name" size="40" maxlength="80">
	<input type="submit" value="Spausk">
</form><br/>
<?php
	$failas = $_SERVER['SCRIPT_FILENAME'].".txt"; 
	$name = @$_GET["name"];
	$f = fopen($failas, "a+");
	$dydis = strlen($name);

	if ($name === "dydis") {
		$f = fopen($failas, "r" );
		$stat = fstat($f);
		echo "Failo simboliu kiekis yra ". $stat["size"]. "<br><hr>";
		$name = "";
	}

	if ($name !== "trinti") {
		if (($dydis > 0) AND ($dydis < 10)) {
			fwrite($f, htmlspecialchars(trim($name) . "\n"));
			rewind($f);
		}
		while (!feof($f)) { 
			$data = fgets($f, 300);
			echo " $data <hr>";
		}
	} else {
		rewind($f);
		ftruncate($f, 0);
?> 

<script type="text/javascript">
	window.location="<?php echo $_SERVER['PHP_SELF'];?>";
</script>

<?php
	}
	fclose($f); 
?>