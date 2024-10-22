<?php
include ("connection.php");

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password =$_POST['password'];
    $gender = $_POST['gender'];

    $query= "UPDATE phpform SET Name= '$name', Password= '$password', Email= '$email' WHERE Gender= '$gender' ";


    if(mysqli_query($con, $query))
    {
            echo '<script> alert("Record updated successfully"); </script> ';
            echo '<script>window.location.href="regform.html";</script>';

    }
    else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>