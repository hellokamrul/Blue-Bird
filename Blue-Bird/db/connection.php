<?php
// Set database connection variables
$host = 'localhost';
$user = 'root';
$db_name = 'bluebird';
$password = '';

// Create database connection
$con = mysqli_connect($host, $user, $password, $db_name);

// Check for connection errors
if (!$con) {
    die('Failed to connect to database: ' . mysqli_connect_error($con));
} 
//else {
    //echo "Connected to database successfully!";
//}

// Close database connection
//mysqli_close($conn);
?>
