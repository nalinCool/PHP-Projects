<?php
	$a = 1234;
	$sum=0;
	$i = 10;
	while($a != 0){
		$k = $a % $i;
		$sum = $sum + $k;
		$l = (int) $a/10;
		$a = $l;
	}
	echo $sum;
?>