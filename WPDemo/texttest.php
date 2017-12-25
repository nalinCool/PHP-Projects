<html>
<script>
var x = 0; 
    function func() { 
    x++; 
    this.x = x; 
    return func; 
    } 
    var bar = new new func; 
    console.log(bar.x);
</script>
</html>