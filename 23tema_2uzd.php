<?php
//23 tema => perdaryt foreach i for
	error_reporting(E_ALL ^ E_NOTICE);
	$formArr= array("vardas", "pavarde","gmetai","atlyginimas");
	$dataArr= array("Vardas", "Pavarde","Gimimo_metai","Atlyginimas");
	echo '<form action = "'.$_SERVER['PHP_SELF'].'.php">';
	$count = count($formArr)-1;
	for ($k = 0; $k <= $count; $k++) {
		echo "{$dataArr[$k]}<br /><input name={$formArr[$k]} value=\"{$_GET[$formArr[$k]]}\" /><br/><br/>\n";
	}
	echo "<br /><input type=submit /></form>";
	for ($k = 0; $k <= $count; $k++) {
		if (!isset($_GET[$formArr[$k]])) continue;
		echo $formArr[$k]." = ".$_GET[$formArr[$k]]."<br/>" ;
	}
?>