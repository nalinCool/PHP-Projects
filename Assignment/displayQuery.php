<html>
<h1 align="center">Records Display</h1>
<body>
<form name="frm" method="POST">
<table align="center">
<tr colspan="5"><th><input type="submit" name="srecord" value="Show Record"/></th></tr></table>
<?php

$tab=<<<Tab
<table align="center" border="2"><tr><th>User Name</th><th>Password</th><th>E Mail</th><th>Mobile No.</th><th>Hobbies</th></tr>
Tab;
    
    if(isset($_POST['srecord'])){
        $link1 = mysqli_connect("localhost","root","password","php_demo");
        $qry1 = "select * from users;";
        $res = mysqli_query($link1, $qry1);
        echo $tab;
        while($r = mysqli_fetch_row($res)){
            echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td><td>$r[4]</td></tr>";
        }
        echo "</table>";    
    }
    
?>
</form>
</body></html>