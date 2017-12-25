<?php


?>
<script type="text/javascript">
    function sum(){
        var req = new XMLHttpRequest();
        var x = document.frm.txt1.value;
        var y = document.frm.txt2.value;
        var strURL = "AjaxAdd.php?x="+x+"&y="+y;
        
        if(req){
             req.onreadystatechange = function(){
                if(req.readyState==4){
                    if(req.status==200){
                        document.getElementById("t1").innerHTML = req.responseText;
                    }
                    else{
                        alert("ERROR "+req.statusText);
                    }
                }
            }
        
            req.open("GET",strURL,true);
            req.send();    
        }
    }
    
</script>
<html>
<h1 align="center">AJAX DEMO</h1>
<body>
<form name="frm" method="" action="">
<table border="3">
<tr><td>X:</td><td><input type="text" name="txt1"/></td></tr>
<tr><td>Y:</td><td><input type="text" name="txt2" onkeyup="sum()"/>
<tr><td>Sum:</td><td><div id="t1"></div></td></tr>
</table>
</form>
</body>
</html>