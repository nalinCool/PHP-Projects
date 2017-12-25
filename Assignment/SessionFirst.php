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

session_start();
if(isset($_POST['login'])){
    $_SESSION['userID'] = $_POST['user'];
    $_SESSION['passWord'] = $_POST['pass'];
    header("location:SessionFirstRead.php");
}


?>