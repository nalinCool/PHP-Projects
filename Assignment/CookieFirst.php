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

if(isset($_POST['login'])){
    if(!isset($_COOKIE['MyCookie'])){
        $val = $_POST['user'].",".$_POST['pass'];
        setcookie("MyCookie",$val,time()+120);
        echo "Cookie created...";
        header("location:CookieFirstRead.php");        
    }
    else{
        echo "Cookie Already Created";
        header("location:CookieFirstRead.php");
    }
}

?>