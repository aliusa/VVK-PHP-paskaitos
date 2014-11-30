<?php
//tipo.. is Form ganame vartotojo ivestus eiluciu ir stulpeliu kieki ir generuojam lentele pagal tuos skaicius
if (isset($_GET['submit'])) {
	$td = $_GET['td']+1;
	$tr = $_GET['tr']+1;

	echo "<form><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" valign=\"top\" border=\"1\">";
	for ($i=1; $i<$tr; $i++) {
	echo "<tr>";
	for ($j=1; $j<$td; $j++) {
		echo "<td align = center>\$i <b>$i </b> , \$j <b>$j</b> <input name = a$i$j size = 2></td>" ;
	}
	echo "</tr>";
	}
	echo "</table><input type=submit /></form>";
	foreach ($_GET as $k => $v){
	if (!$v) continue;
	echo "$k = $v<br/>" ;
	}
} else {
?>
	<form method="GET">
		eilutes: <input type="text" name="tr" /><br/>
		stulpeliai: <input type="text" name="td" /><br/>
		<input type="submit" name="submit" />
	</form>
<?php
}
?>
