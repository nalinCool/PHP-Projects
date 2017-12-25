<html>
<head>
<h1 align="center">NEW TASK</h1>
<body>
<marquee scrollamount=20>MY CALCULATOR</marquee>
<form method="POST" name="frm">
<table align="center" border="2" bgcolor="yellow" cellspacing="1" cellpadding="2">
<tr><td align="center" colspan="2"><input type="text" name="inp1" /></td></tr>
<tr><td align="center" colspan="2"><input type="text" name="inp2" /></td></tr>
<tr><td align="center"><input type="submit" name="plu" value="+"/></td>
    <td align="center"><input type="submit" name="min" value="-"/></td></tr>
    <tr><td align="center"><input type="submit" name="mul" value="*"/></td>
    <td align="center"><input type="submit" name="div" value="/"/></td></tr>
<tr><td colspan="2" align="center">
<?php
$h=0;
if(isset($_POST['plu'])){
    $h = ($_POST['inp1']+$_POST['inp2']);
}

if(isset($_POST['min'])){
    $h = ($_POST['inp1']-$_POST['inp2']);
}

if(isset($_POST['mul'])){
    $h = ($_POST['inp1']*$_POST['inp2']);
}

if(isset($_POST['div'])){
    if($_POST['inp2']!=0)
        $h = ($_POST['inp1']/$_POST['inp2']);
}

?>
<input type="text" name="inp3" value=<?php echo "$h" ?>></input></td></tr>
<tr><td colspan="2"><marquee scrollamount=2 behaviour="scroll" direction="right"><?php echo "$h" ?></marquee>
</td></tr>
</table></form>
</body></head></html>