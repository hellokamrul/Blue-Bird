<?php
session_start(); 
    if(!isset($_SESSION['email'])){
    header("Location: login.php");
}

?> 

<html>
    <head>
        <title>Home Page</title>
    </head>
        
    <body>
        <form>           
            <p align="right"> <a href="../Controllers/LogoutController.php"> <img src="ProjectEssentials/log-out.png" width="25px" > LogOut </a> </p>
            <p align="right"><a href="Notifications.php"><img src="ProjectEssentials/Notification Logo.png" width="25px"></a></p>
            <label for="search">Search: </label>
            <input type="text" name="search" id="search" value=""/> 
            <br/> <br/>
            <table align="center">
                <tr>
                    <th width="350px"><a href="orderList.php">My Orders</a></th>
                    
                    <th width="350px"><a href="display.php">Profile</a></th>

                    <th width="350px"><a href="BulkOrder.php">Bulk Order</a></th>

                    <th width="350px"><a href="ProductView.php">Review Product</a></th>

                    <
                </tr>
            </table>

            <br/> <br/>
            <br/> <br/>

        </form>
    </body>
</html>

