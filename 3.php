<?php
function countvocal(){
	$someString = "programmer";
	echo preg_match_all('/[aouie]/i', $someString, $out);
}
?>