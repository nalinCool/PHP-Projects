<html>
<h1 align="center">Upload your file</h1>
<body>
<form name="frm" method="POST" enctype="multipart/form-data">
<input type="file" name="upfile" />
<input type="submit" name="sub" />
<?php

if(isset($_POST['sub'])){
    if($_FILES['upfile']['error']==0){
        $tmpname = $_FILES['upfile']['tmp_name'];
        $tpath = $_SERVER['DOCUMENT_ROOT']."Upload/".$_FILES['upfile']['name'];
        if(move_uploaded_file($tmpname,$tpath)){
            echo "File Uploaded..."."<br>";
            $imgpath = "Upload/".$_FILES['upfile']['name'];
            echo $imgpath;
        }
        else{
            echo "ERROR UPLOADING";
        }
    }
    else
        echo "ERROR UPLOADING";
}

?>
</form>
</body></html>
