<?php

    session_start();
    require "Validations.php";

    if(isset($_REQUEST['signup']))
    {
        $userName = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $retypePassword = $_REQUEST['retypePassword'];
        $validPassword = validatePassword($password);
        $validEmail = validateEmail($email);

        if($userName == "" || $email == "" || $password == "" || $retypePassword == "")
        {
            header('location: Sign-Up_page.php?msg=nullInputs');
        }
        elseif($validEmail == 1)
        {
            header('location: Sign-Up_page.php?msg=invalidEmail');
        }
        elseif($validPassword == 0)
        {
            header('location: Sign-Up_page.php?msg=invalidPasswd');
        }
        elseif($retypePassword != $password)
        {
            header('location: Sign-Up_page.php?msg=passwdMismatch');
        }
        else
        {   
            $customerID = generateCustomerCode();
            $filename = 'Database/UserList.txt';
            $file = fopen($filename, 'a') or die('Unable to open file!');
            $text = "{$customerID}|{$userName}|{$email}|{$password}|Customer\r\n";
            fwrite($file, $text) or die('Unable to write to file!');
            fclose($file);
            echo("<h1 align='center'><b>Registration Successful.</b></h1>");
            echo("<h3 align='center'><b><a href='Log-in.php'>Login</a></b></h3>");
        }
    }
    else
    {
        header('location: Sign-Up_page.php');
    }

?>