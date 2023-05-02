<?php
// create database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "bluebird";
$conn = new mysqli($servername, $username, $password, $dbname);

// create controller and show user details
require_once '../Controllers/UserController.php';
$controller = new UserController($conn);
$controller->showUser(1);

// close database connection
$conn->close();
?>
