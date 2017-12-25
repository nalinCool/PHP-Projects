<?php
	$s = 6;
	$f = false;
	for($i=2; $i<$s; $i++){
		if($s%$i==0){
			$f = true;
			break;
		}			
	}
	if($f==false)
		echo "$s is prime";
	elseif($f==true || $s==1)
		echo "$s is not prime";
?>