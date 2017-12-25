<html>
<h1 align="center">Records Display</h1>
<body>
<form name="frm" method="POST">
<input align="right" type="submit" name="logout" value="Logout"/>
<table align="center">
<tr colspan="5" ></tr><th><input type="submit" name="srecord" value="Show Record"/></th></tr></table>
<?php
session_start();
if(isset($_SESSION['u_name']) && ($_SESSION['ltime']+10>time())){
      echo "User Name :: ".$_SESSION['u_name'];
      $_SESSION['ltime'] = time();
    
$tab=<<<Tab
<table align="center" border="2"><tr><th>User Name</th><th>Password</th><th>E Mail</th><th>Mobile No.</th><th>Hobbies</th><th>Record Display</th><th>Delete Record</th></tr>
Tab;
    
    if(isset($_POST['srecord'])){
        $link1 = mysqli_connect("localhost","root","password","php_demo");
        $qry1 = "select * from users;";
        $res = mysqli_query($link1, $qry1);
        echo $tab;
        while($r = mysqli_fetch_row($res)){
            echo "<tr><td>$r[0]</td>
                      <td>$r[1]</td>
                      <td>$r[2]</td>
                      <td>$r[3]</td>
                      <td>$r[4]</td>
                      <td align=center><a href='DetailedDisplayUpdate.php?n=$r[0]' />Show</td>
                      <td><a href='DetailedDisplay.php?n1=$r[0]' >DELETE</a></td></tr>";
        }
           
    }
    
    if(isset($_GET['n1'])){
        $link1 = mysqli_connect("localhost","root","password","php_demo");
        $nm4 = $_GET['n1'];
        $qry2 = "delete from users where u_name='$nm4'";
        $res1 = mysqli_query($link1,$qry2);
        
        $qry1 = "select * from users;";
        $res = mysqli_query($link1, $qry1);
        echo $tab;
        while($r = mysqli_fetch_row($res)){
            echo "<tr><td>$r[0]</td>
                      <td>$r[1]</td>
                      <td>$r[2]</td>
                      <td>$r[3]</td>
                      <td>$r[4]</td>
                      <td align=center><a href='DetailedDisplayUpdate.php?n=$r[0]' />Show</td>
                      <td><a href='DetailedDisplay.php?n1=$r[0]' >DELETE</a></td></tr>";
        }
    }
    echo "</table>"; 
    
    if(isset($_POST['logout'])){
        session_destroy();
        header("location:AuthenticationDatabase.php");
    }
}
else{
    session_destroy();
    header("location:AuthenticationDatabase.php");
}
?>
</form>
</body></html>