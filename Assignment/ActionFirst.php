<?php

echo "User Name : ".$_POST['nm'];
echo "<br>";
echo "Password : ".$_POST['pwd'];
echo "<br>";
echo "Email : ".$_POST['email'];
echo "<br>";
echo "Address : ".$_POST['addr'];
echo "<br>";
echo "Gender : ".$_POST['r1'];
echo "<br>";
echo "Date Of Birth : ".$_POST['dob'];
echo "<br>";
echo "CGPA : ".$_POST['cgpa'];
echo "<br>";
echo "Qualification : ".$_POST['qul'];
echo "<br>";
echo "Color : ".$_POST['color'];
echo "<br>";
$hobbies = $_POST['chk'];
$x="";
foreach($hobbies as $h){
    if($h!=$hobbies[sizeof($hobbies)-1])
        $x = $x.$h.", ";
    else
        $x = $x.$h;
}
echo "Hobbies : ".$x;
echo "<br>";
?>