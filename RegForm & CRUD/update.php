<?php
include ('connection.php');

if(isset($_POST['submit']))
{
    // Capture the form data
    $name = $_POST['newName'];
    $emailToUpdate = $_POST['emailToUpdate'];  // Email to identify the record
    $newEmail = $_POST['newEmail'];  // New email, if changing
    $password = $_POST['newPassword'];
    $hpassword = password_hash($password, PASSWORD_DEFAULT);  // Always hash passwords
    $gender = $_POST['newGender'];

    // Query to update the record in the database
    $sql = "UPDATE phpform 
            SET Name='$name', Password='$hpassword', Gender='$gender', Email='$newEmail' 
            WHERE Email= '$emailToUpdate'";

    // Check if the query was successful
    if($con->query($sql) === TRUE)
    {
        echo '<script>alert("Record updated successfully!");</script>';
        echo '<script>window.location.href="regform.html";</script>';
    }
    else 
    {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>
