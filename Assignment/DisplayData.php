<html>
<h1 align="center" style="font-family: cursive;" style="font-weight: bold;">See Your Data and Update it if required</h1>
<body>
<form name="frm" method="POST">
<center><input type="text" name="user"/></center>
<center><input type="submit" name="sub" value="Show Record"/></center>

<table align="center" border="0" cellpadding="2" cellspacing="2">

<?php

if(isset($_POST['sub'])){
    $nm2 = $_POST['user'];
    $link2 = mysqli_connect("localhost","root","password","php_demo");
    $qry2 = "select * from users where u_name='$nm2'";
    $res2 = mysqli_query($link2, $qry2);
    $r2 = mysqli_fetch_array($res2);
    echo "<tr><td><b>Name</b></td><td><input type=text name=disname value=$r2[0] readonly /></td></tr>";
    echo "<tr><td><b>Password</b></td><td><input type=text name=dispass value=$r2[1] readonly /></td></tr>";
    echo "<tr><td><b>Mobile</b></td><td><input type=text name=dismob value=$r2[2] /></td></tr>";
    echo "<tr><td><b>Email</b></td><td><input type=text name=disemail value=$r2[3] /></td></tr>";
    echo "<tr><td><b>Hobbies</b></td><td><input type=text name=dishobbies value='$r2[4]' /></td></tr>"; 

}

?>
</table>
</form>
</body></html>