<?php
session_start(); 
    if(!isset($_SESSION['email'])){
    header("Location: login.php");
}

?> 
<?php 
    require_once '../db/connection.php';
?>

<?php
$sq = "select * from buser where email='" . $_SESSION['email'] . "'";

$user_id_result = mysqli_query($con, $sq);
$user_id_array = mysqli_fetch_array($user_id_result);
$user_id = $user_id_array['id'];
?>

<html>
    <head>
        <title>Cart</title>
    </head>
        
    <body>
        <form align="center" method="POST" action="PaymentOptions.php" enctype="">
            <h1 align="center">My Cart</h1>
            <label for="search">Search Items: </label>
            <input type="text" name="search" id="search" value=""/> 
            <br/> <br/>
            <table align="center" border="1" width="1500px">
                <tr>
                    <th width="100px">Serial No:</th>
                    <th>Order ID</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                
               
                    <?php

                        //$user_id = 10; // Replace with the actual user ID

                        $sql = "SELECT p.pid, p.name, p.price, p.desc
                                FROM merchorder c
                                JOIN buser u ON c.bid = u.id
                                JOIN products p ON c.pid = p.pid
                                WHERE u.id = $user_id";
                        $result = mysqli_query($con, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                           // echo "<table>";
                            //echo "<tr><th>Product ID</th><th>Name</th><th>Price</th><th>Description</th><th>Quantity</th></tr>";
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr><td>".$row['pid']."</td><td>".$row['name']."</td><td>".$row['price']."</td><td>".$row['desc']."</td></tr>";
                            }
                            //echo "</table>";
                        } else {
                            echo "No records found.";
                        }
                            
                        ?>
            
            </table>
          
            </br> </br>
            <input type="submit" name="proceedCheckOut" value="Proceed to Check Out"/>
        </form>
    </body>
</html>