<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpform"; 

// Create a new connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}
?>
