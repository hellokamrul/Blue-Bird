<?php
session_start(); 
    if(!isset($_SESSION['email'])){
    header("Location: login.php");
}

?> 

<?php 
require_once '../db/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>
   <div class="container">
    <button><a href="HomePage_Customer.php">Back</a></button>
   </div> 
<TAble>
    <HEAd>
        
    </HEAd>
    <tbody>
        <?php   
           
           $sql="select * from buser where email= '".$_SESSION['email']."'";
        $result=mysqli_query($con,$sql);
        if($result) {
            $user = mysqli_fetch_assoc($result);
    ?>
            <tr>
                <td><?php echo "Shop Name: " . $user['Businame'] . "<br>";?></td>
            </tr>
            <tr>
                <td><?php echo "Web Site Link : " . $user['Busilink'] . "<br>";?></td>
            </tr>
            <tr>
                <td><?php echo "User Name: " . $user['Uname'] . "<br>";?></td>
            </tr>
            <tr>
                <td><?php echo "Email Address : " . $user['email'] . "<br>";?></td>
            </tr>
    <?php
        }
    ?>
    </tbody>
</TAble>
   <div>

   </div>
</body>
</html>