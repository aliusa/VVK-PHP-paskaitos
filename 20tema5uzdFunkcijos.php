<?php
	function fff($uKodas, $code) {
		$k = (in_array($uKodas, $code)) ? true : false;
		return $k;
	}

	function a() {
		echo "<h1>A pasirinkimas</h1>";
	}

	function b() {
		echo "<h2>B pasirinkimas</h2>";
	}
?>