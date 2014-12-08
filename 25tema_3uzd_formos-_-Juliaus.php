	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
<?php
	for ($i = 0; $i <= 10; $i++) {
		echo 'Vardas: <input type="text" name="Name'.$i.'" /> Balas: <input type="text" name="Balas'.$i.'" /> <br/>';
	}
?>
		<input type="submit" />
	</form>
<?php
	$x = $ii = $vi = 0;
	foreach ($_GET as $indx => $value) {
		if ($x === 0) {
			$raktai[$ii] = $_GET[$indx];
			$ii++;
			$x = 1;
		} else {
			$reiksmes[$vi] = $_GET[$indx];
			$vi++;
			$x = 0;
		}
	}
	
	for ($i = 0; $i <= count($raktai) - 1; $i++) {
		$final[$raktai[$i]] = $reiksmes[$i];
	}

	echo "<table border=1>";
	foreach ($final as $indx => $value) {
		$colors = array("red", "yellow", "green");
		if ($value < 10) {
			$color = $colors[0];
		} elseif ($value == 10) {
			$color = $colors[1];
		} else {
			$color = $colors[2];
		}
		if (!$value) continue;
		echo "<tr bgcolor=$color>";
		echo "<td> $indx </td>";
		echo "<td> $value </td>";
		echo "</tr>";
	}
	echo "</table>";
?>