<?php 
include '../db/connection.php';
if(isset($_POST['submit']))
{
    //$id=0;
    $Businame = $_POST['businessname'];
    $Busilink = $_POST['businesslink'];
    $Uname = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   $sql = "INSERT INTO buser (Businame,Busilink,Uname,email,password)
   VALUES ('$Businame', '$Busilink', '$Uname', '$email', '$password')";
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