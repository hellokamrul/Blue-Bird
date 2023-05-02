<?php 
include '../db/connection.php';
if(isset($_POST['submit']))
{
    //$id=0;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phone'];
   $sql = "INSERT INTO users (name,email,phone,password)
   VALUES ('$name', '$email', '$phonenumber', '$password')";
$result = mysqli_query($con,$sql);

if($result)
{
    header("Location: ../test/login.php");
    
    echo "Data inserted Successfully";
}
else
{
    die('Failed to connect to database: ' . mysqli_connect_error($con));
}

}

?>