<?php //klasės darbas. surasti internete ir paaiškinti 3 masyvines funkcijas ?>

<?php /*............................................................*/?>

<?php
	$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
	ksort($fruits);
	foreach ($fruits as $key => $val) {
		echo "$key = $val\n";
	}
?>

<?php echo "<hr/>"; ?>

<?php
	$array1 = array("10", 100, 100, "a");
	$array2 = array(1, 3, "2", 1);
	array_multisort($array1, $array2);
	print_r($array1);
	print_r($array2);
?> 

<?php echo "<hr/>"; ?>

<?php
	$a = array(2, 4, 6, 8);
	echo "product(a) = " . array_product($a) . "\n";
	echo "product(array()) = " . array_product(array()) . "\n";
?>

<?php /*............................................................*/?>

<?php echo "<hr/>"; ?>

<?php
	$search_array = array('first' => 1, 'second' => 4);
	if (array_key_exists('first', $search_array)) {
		echo "The 'first' element is in the array";
		echo "<br>";
	}
?>

<?php echo "<hr/>"; ?>

<?php
	$arr = array(1,2,3,4,5,6);
	$arr_reversed = array_reverse($arr, true);
	print_r($arr);
	echo "<br>";
	print_r($arr_reversed);
?>

<?php echo "<hr/>"; ?>

<?php
	$input_array = array('a', 'b', 'c', 'd', 'e');
	echo "<br>";
	print_r(array_chunk($input_array, 2));
	echo "<br>";
	print_r(array_chunk($input_array, 2, true));
?>
