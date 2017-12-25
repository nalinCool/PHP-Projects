<?php
    if(isset($_POST['logout'])){
        echo $_POST['logout'];
        session_destroy();
        header("location:admin.php");
    }
?>