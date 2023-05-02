<?php
     $conn=mysqli_connect("localhost","root","","bluebird");
     if(!$conn){
         die("Sorry we failed to connect".mysqli_connect_error());
     }
     else{
        $stmt = $conn->prepare("INSERT INTO users (name,email,phone,password,gender,dob) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("$name, $email, $phone, $pass, $gender, $dob);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header("Location: ../view/registation.php");
     }
?>