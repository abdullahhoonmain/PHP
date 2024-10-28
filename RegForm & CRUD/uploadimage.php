<?php
include("connection.php");

if(isset($_POST['upload']))
{
    $filename= $_FILES['img']['name'];
    $tempname= $_FILES['img']['tmp_name'];
    $folder= "images/" .basename($filename);
    echo "File with be uploaded to". $folder;
    if(move_uploaded_file($tempname, $folder))
    {
        echo "<script> alert('Uploaded Successfully')</script>;";
        echo "<img src=''". htmlspecialchars($folder)." alt= 'Image preview'";
    }
    else {
        echo "<script> alert('Uploading Failed!')</script>;";
    }

}
else {         echo "<script> alert('No file was uploaded')</script>;";

}


?>