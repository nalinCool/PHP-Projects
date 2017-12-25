<?php
	$arr = array(70,65,89,45,74);
	$total = 0;
	foreach($arr as $a){
		$total += $a;
	}
	$m = $total/5;
	switch($m){
		case ($m>=85):
			echo "$m receives A+";
			break;
		case ($m>=70 && $m<85):
			echo "$m receives A";
			break;
		case ($m>=45 && $m<70):
			echo "$m receives B";
			break;
		case ($m>=33 && $m<45):
			echo "$m receives C";
			break;
		default:
			echo "$m receives Fail";
			break;
	}
?>