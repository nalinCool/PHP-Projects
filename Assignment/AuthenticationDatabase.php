<html>
<hr style="background-color: orange;" size="20"/>
<h1 align="center" style="font-style: oblique; color: purple;">Dare to Login</h1>
<hr style="background-color: green;" size="20"/>
<body>
<form name="frm" method="POST">
<table align="right" border="5" cellpadding="2" cellspacing="0" style="border-color: black; background-color: gray;">
<tr><td><b style="color: lime;">Email Id</b></td><td><input type="text" name="unm"/></td></tr>
<tr><td><b style="color: lime;">Password</b></td><td><input type="password" name="pass"/></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="login" value="Login"/></td></tr></table>
<?php
  if(isset($_POST['login'])){
    $em=$_POST['unm'];
    $pa=$_POST['pass'];
    if($em!="" && $pa!=""){
        $link=mysqli_connect("localhost","root","password","php_demo");
        $qry = "select * from users where u_email='$em'";
        $res = mysqli_query($link,$qry);
        $r=mysqli_fetch_array($res);
        $j=$r[1];        
        if(strcmp($j,$pa)==0){
            session_start();
            $_SESSION['u_name'] = $r[0];
            $_SESSION['ltime'] = time();
            header("location:DetailedDisplay.php");
        }
        else{
            echo "Access Denied";
        }
    }
    else{
        echo "Fields Empty";
    }    
  }
      
    
?>

</form>
</body></html>
