<?php
//Programa, kuri paeiliui skirtingom spalvom spalvintų eilutes
$x = 'yellow';
$y = 'green';
$z = 'red';

$tr = 11; //eilučių skaičius

?><table width="100%" border="1"><?php
	for ($i=1; $i<$tr; $i++) {
		$c = ($i % 3);
		if ( $c == 1) {
			$tr_spec = $x;
		} elseif ( $c == 2) {
			$tr_spec = $y;
		} elseif ( $c == 0) {
			$tr_spec = $z;
		}

?>
	<tr bgcolor="<?php echo $tr_spec; ?>" >
		<td>A</td>
		<td>B</td>
	</tr>
<?php 
	}
?>
</table>