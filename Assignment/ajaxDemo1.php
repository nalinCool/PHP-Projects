<?php


?>


<html>
<h1 align="center">AJAX DEMO</h1>
<head><script type="text/javascript">
    function autoComp(strURL){
        //alert(strURL);
        var req = new XMLHttpRequest();
        
        if(req){
             req.onreadystatechange = function(){
                if(req.readyState==4){
                    if(req.status==200){
                        //var result = req.responseText;
                        var sel = document.getElementById("list");
                        sel.innerHTML = req.responseText;
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
    
</script></head>
<body>
<form name="frm" method="" action="">
<input type="text" name="txt1" list="list" onkeyup="autoComp('autoComplete.php?id='+this.value)" />
<datalist id="list">

</datalist>

</form>
</body>
</html>