<html>
<h1 align="center" style="font-family: cursive;" style="font-weight: bold;">See Your Data and Update it if required</h1>
<body>
<form name="frm" method="POST">


<?php

    
    $link2 = mysqli_connect("localhost","root","password","php_demo");
    $qry2 = "select u_name from users";
    $res2 = mysqli_query($link2, $qry2);
    echo "<table align=center border=0 cellpadding=2 cellspacing=2>";
    echo "<tr><td><select name=unm><option name=sel>~~Select~~</option>";
    while($r2 = mysqli_fetch_row($res2)){
        echo "<option name=nm>$r2[0]</option>";
    }    
    echo "</select></td>";
    echo "<td><input type=submit name=sub value=Show Record/></td></tr>";
    if(isset($_POST['sub'])){
    $nm2 = $_POST['unm'];
    
    $qry = "select * from users where u_name='$nm2'";
    $res = mysqli_query($link2, $qry);
    $r = mysqli_fetch_array($res);
    
    echo "<tr><td><b>Name</b></td><td><input type=text name=disname value=$r[0] /></td></tr>";
    echo "<tr><td><b>Password</b></td><td><input type=text name=dispass value=$r[1] /></td></tr>";
    echo "<tr><td><b>Email</b></td><td><input type=text name=disemail value=$r[2] /></td></tr>";
    echo "<tr><td><b>Mobile</b></td><td><input type=text name=dismob value=$r[3] /></td></tr>";
    echo "<tr><td><b>Hobbies</b></td><td><input type=text name=dishobbies value='$r[4]' /></td></tr>";
    echo "<tr><td colspan=2 align=center><input type=submit name=upd value=Update Record/></td><tr>";
    }
    
    if(isset($_POST['upd'])){
        $nm3 = $_POST['disname'];
        $email = $_POST['disemail'];
        $mob = $_POST['dismob'];
        $hobbies = $_POST['dishobbies'];
        $qry3 = "update users set u_email='$email', u_mob='$mob', u_hobbies='$hobbies' where u_name='$nm3'";
        $res3 = mysqli_query($link2,$qry3);
        if($res3){
            echo "<marquee scrollamout=20>Records updated</marquee>";
        }
               
    
    echo "</table>";
 }
    

?>

</form>
</body></html>