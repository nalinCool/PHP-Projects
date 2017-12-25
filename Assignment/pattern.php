<html>
<hr color="orange" size="20"><h1 align="center" style="font-family: cursive; color: purple;" color="red">Assignment</h1></hr><hr color="green" size="20"></hr>

</html>
<?php

echo "<br>Q1<br><br>";
for($i=0; $i<5; $i++){
    for($j=0; $j<=$i; $j++){
        echo "* ";
    }
    echo "<br>";
}

echo "<br><br><br>Q2<br><br>";

for($i=4; $i>=0; $i--){
    for($j=$i; $j>=0; $j--){
        echo "* ";
    }
    echo "<br>";
}


echo "<br><br><br>Q3<br><br>";

for($i="A"; $i<"F"; $i++){
    for($j="A"; $j<=$i; $j++){
        echo $j;
    }
    echo "<br>";
}

echo "<br><br><br>Q4<br><br>";

$arr1 = array(array(1,2,3),array(4,5,6),array(7,8,9),array(10,11,12));
$arr2 = array(array(1,2,3),array(4,5,6),array(7,8,9));
$d=0;
$srarr1 = sizeof($arr1,2);
$scarr1 = (sizeof($arr1,1)/-srarr1);
echo "$srarr1 <br>$scarr1<br>";
for($i=0; $i<3; $i++){
    for($j=0; $j<3; $j++){
        for($k=0; $k<3; $k++){
            $d += $arr1[$i][$k]*$arr2[$k][$j];
        }
        $arr3[$i][$j] = $d;
        $d=0;
    }
}

for($i=0; $i<3; $i++){
    for($j=0; $j<3; $j++){
        echo $arr3[$i][$j]," ";
    }
    echo "<br>";
}

echo "<br><br><br>Q5<br><br>";

$d="12321";
$ar = str_split($d);
$h = false;
if(strlen($d)%2==0)
    echo "Wrong Input";
else{
    for($i=0; $i<(strlen($d)/2); $i++){
        if($ar[$i]!=$ar[strlen($d)-$i-1]){
            $h = true;
            break;
        }
    }
    if($h==true)
        echo "Not Palindrome";
    else
        echo "Palindrome";
}

echo "<br><br><br>Q6<br><br>";

for($kk=100; $kk<1000; $kk++){
    $a = $kk;
    $sum=0;
    $i = 10;
    while($a != 0){
	   $k = $a % $i;
	   $sum = $sum + $k*$k*$k;
	   $l = (int) $a/10;
	   $a = $l;
	}
    if($sum==$kk)
	   echo $kk,"<br>";
}

echo "<br><br><br>Q7<br><br>";

$info = array(1,2,3,4,5,6,7,8,9);
$key = 10;
$kk = false;
for($i=0; $i<9; $i++){
    if($key==$info[$i]){
        $kk = true;
        break;
    }
}
echo $kk==true?"Match Found":"Match Not Found";

?>