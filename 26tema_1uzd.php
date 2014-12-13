<a href="<?php echo $_SERVER['PHP_SELF'] ?>">pradinis</a>
<form method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	<input type="text" name="a" value="<?php echo @$_GET['a'] ?>" /><br/>
	<input type="text" name="b" value="<?php echo @$_GET['b'] ?>" /><br/>
	<input type="text" name="c" value="<?php echo @$_GET['c'] ?>" /><br/>
	<input type="text" name="d" value="<?php echo @$_GET['d'] ?>" /><br/>
	<input type="submit" name="submit" />
</form>
<?php
	//jei paspaustas Submit mygtukas - vykdom IF
	if (isset($_GET['submit'])) {
		$a = $_GET['a'];
		$b = $_GET['b'];
		$c = $_GET['c'];
		$d = $_GET['d'];
		echo '<table border=1>';
		foreach ($_GET as $k => $v) {
			//jei nėra reikšmės - praleidžiam
			if ( (!$v) OR ($k === "submit") ) continue;
			echo "<tr><td>$k</td><td>$v</td></tr>";
		}
		echo "</table>";
	}
?>