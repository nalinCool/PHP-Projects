<?php
if(isset($_POST['sub'])){
    $us = $_POST['nm'];
    $pass = $_POST['pwd'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $hobbies = $_POST['chk'];

    $x="";
    if($hobbies!=null){
        foreach($hobbies as $h){
            if($h!=$hobbies[sizeof($hobbies)-1])
                $x = $x.$h.", ";
            else
                $x = $x.$h;
        }
    }
    $link = mysqli_connect("localhost","root","password","php_demo");
    $qry = "insert into users values('$us','$pass','$email','$mob','$x')";
    $f = mysqli_query($link,$qry);
    if($f)
        $mar = "Records Inserted";
    else
        $mar = "Wrong Input";
    
        
}
?>
<html>
<h1><marquee scrollamount=10><?php echo $mar;?></marquee>
</h1>
</html>