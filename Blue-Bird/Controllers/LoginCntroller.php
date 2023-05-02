<?php
session_start();
include '../db/connection.php';

if(isset($_POST['submit']))
{
    $user =$_POST['user'];

    if($user=='users')
    {

   
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) == 1)
    {
        $_SESSION['email'] = $email;
        echo "Login Successfully..";
        header("Location: ../test/HomePage_Customer.php");
        //header('location: dashboard.php');
    }
    else
    {
        $error = "Invalid email or password";
        echo "Invalid email or password";
       // header("Location: ../test/HomePage_Customer.php");
    }
 }
 else{

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `buser` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) == 1)
    {
        $_SESSION['email'] = $email;
        echo "Login Successfully..";
        header("Location: ../test/HomePage_CustomerM.php");
        //header('location: dashboard.php');
    }
    else
    {
        $error = "Invalid email or password";
        echo "Invalid email or password";
       // header("Location: ../test/HomePage_Customer.php");
    }
 }



    // if ($isValid === true) {
       
    //     $isValid = false;
    //     //👌👌
    //     include '../db/connection.php';
    //     //👌👌
    //     if ($isValid) {
    //         $_SESSION['email'] = $email;
    //         header("Location: ../test/HomePage_Customer.php");
    //     }
    //     // else {
    //     //     $_SESSION['global_msg'] = "Email or password incorrect";
    //     //     header("Location: ../view/login.php");
    //     // }				
    // }
}
?>