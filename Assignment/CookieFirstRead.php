<?php

if(isset($_COOKIE['MyCookie'])){
    echo "Reading Cookie.<br>";
    $val=explode(",",$_COOKIE['MyCookie']);
    echo "User Name :: $val[0].<br>";
    echo "Password :: $val[1]";
}


?>