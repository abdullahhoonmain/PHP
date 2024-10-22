<?php
include ("connection.php");

if (isset($_POST['delete']))
{
    $email= $_POST['email'];

    $query= "DELETE FROM phpform WHERE Email= '$email'";
    $data= mysqli_query($con, $query);

    if($data)
    {
        echo "<script>alert('Record deleted successfully')</script>";
        echo "<script>window.location.href='regform.html';</script>";
    }
}


?>