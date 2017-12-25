<html>
<h1 align="center">Profile Page</h1>
<body>
<form method="POST" name="frm">
<center><input type="submit" value="Logout" name="logout"/></center>
<?php
session_start();
echo "User ID :: ".$_SESSION['userID']."<br>Password :: ".$_SESSION['passWord'];
if(isset($_POST['logout'])){
    session_destroy();
    header("location:SessionFirst.php");
}
?>
</form>
</body>
</html>