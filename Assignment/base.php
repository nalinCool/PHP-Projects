<?php
	$bs=2000
	$da=0
	$hra=0
	if($bs<=2000){
		$da=0.10;
		$hra=0.20;
	}
	elseif($bs>2000 && $bs<=5000){
		$da=0.20;
		$hra=0.30;
	}
	elseif($bs>5000 && $bs<=10000){
		$da=0.30;
		$hra=0.40;
	}
	else{
		$da=0.40;
		$hra=0.50;
	}
	$total = ($bs) + ($da*$bs) + ($hra*$bs);
	echo $total;
?>