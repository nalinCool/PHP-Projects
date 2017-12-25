<html>
<head>
<h1 align="center">NEW TASK</h1>
<body>
<form method="POST" name="frm">
<table align="center" border="2" bgcolor="purple" cellspacing="1" cellpadding="2">
<tr><td align="center" colspan="2"><input type="text" name="inp"/></td></tr>
<tr><td align="center"><input type="submit" name="upp" value="To Upper"/></td>
    <td align="center"><input type="submit" name="low" value="To Lower"/></td></tr>
</table></form>
<center><p>Your Input is : 
<?php

if(isset($_POST['upp'])){
    echo strtoupper($_POST['inp']);
}

if(isset($_POST['low'])){
    echo strtolower($_POST['inp']);
}
?>
</p>
</center>
</body></head></html>