<html>
<head>
<h1 align="center">REPEATED TASK</h1>
<body>
<marquee scrollamount=20>AUTHENTICATION</marquee>
<form method="POST" name="frm">
<table align="center" border="2" bgcolor="yellow" cellspacing="1" cellpadding="2">
<tr><td align="center" colspan="2"><b>User Id : </b><input type="text" name="user" /></td></tr>
<tr><td align="center" colspan="2"><b>Password : </b><input type="password" name="pass" /></td></tr>
<tr><td align="center"><input type="submit" name="login" value="Login"/></td></tr>

<?php
$u = array("Shashank", "Nalin");
$h=array("Shashank"=>"mentos", "Nalin"=>"pure");
$k = false; $emp=false; $t="";
if(empty($_POST['user']) && empty($_POST['pass'])){
    $emp = true;
}
else{
if(isset($_POST['login'])){
    foreach($u as $se){
        if(strcmp($_POST['user'], $se)==0){
            if(strcmp($_POST['pass'],$h[$se])==0)
                $k=true;            
            }
        }
    }
}
    
    if($k==true && $emp==false){
        $t= "Authentication Successful";
    }
    elseif($emp==false && $k==false){
        $t= "Access Denied";
    }
?>
</table></form>

<center><?php echo "$t";?></center>

</body></head></html>