<?php
include('connection.php');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hpassword= password_hash($password, PASSWORD_DEFAULT);
    $gender = $_POST['gender'];
    
    $filename= $_FILES['img']['name'];
    $tempname= $_FILES['img']['tmp_name'];
    $folder= "images/" .basename($filename);
    echo "File with be uploaded to". $folder;

    $sql = "INSERT INTO phpform (Name, Password, Gender, Email, image) VALUES ('$name', '$hpassword', '$gender', '$email', '$filename')";

    if ($con->query($sql) === TRUE) {

        if(move_uploaded_file($tempname, $folder))
        {
            echo "<script> alert('Uploaded Successfully')</script>;";
            echo "<img src=''". htmlspecialchars($folder)." alt= 'Image preview'";
        }
        else {
            echo "<script> alert('Uploading Failed!')</script>;";
        }
        echo "<script>alert('New record added successfully');</script>";
        echo '<script>window.location.href="regform.html";</script>';

    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>
