<?php
include('connection.php');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    // Query with correctly formatted string values
    $sql = "INSERT INTO phpform (name, password, gender, email) VALUES ('$name', '$password', '$gender', '$email')";

    if ($con->query($sql) === TRUE) {
        echo "<script>alert('New record added successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>
