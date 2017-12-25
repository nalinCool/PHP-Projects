<?php

$id=$_GET['id'];
if(strlen($id)>1){
    $link = mysqli_connect("localhost","root","password","php_demo");
    $query = "select u_name from users where u_name like '$id%' ";
    $result = mysqli_query($link,$query);
    while($row=mysqli_fetch_row($result)){
        echo "<option>$row[0]</option>";;
    }
}

?>