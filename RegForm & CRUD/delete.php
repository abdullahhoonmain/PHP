<?php
include ("connection.php");

if (isset($_POST['delete']))
{
    $email= $_POST['emailToDelete'];
    $check= "SELECT * FROM phpform WHERE Email= '$email'";
    $result = mysqli_query($con, $check);
    if (mysqli_num_rows($result) > 0)
    {

    $query= "DELETE FROM phpform WHERE Email= '$email'";
    $sql= mysqli_query($con, $query);

    if($sql)
    {
        echo "<script>alert('Record deleted successfully')</script>";
        echo "<script>window.location.href='regform.html';</script>";
    }
}
else
{
    echo "<script>alert('Email not found')</script>;";
    echo "<script>window.location.href='delete.html';</script>";

}
}


?>