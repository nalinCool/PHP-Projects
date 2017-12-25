<?php
	$x=10;
	$fact = 1;
	for($i=$x; $i>=2; $i--)
		$fact *= $i;
	if($x>0)
		echo $fact;
	else
		echo "1";
?>