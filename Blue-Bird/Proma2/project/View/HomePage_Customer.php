<?php

    session_start();

    if(isset($_COOKIE['userLogin']) && isset($_COOKIE['userID']) && isset($_COOKIE['userEmail']))
    {

?>

<html>
    <head>
        <title>Home Page</title>
    </head>
        
    <body>
        <form>
            <h1 align="center">Welcome <?php echo($_COOKIE['userLogin'])?></h1>
            <p align="right"> <a href="LogoutPage.php"> <img src="ProjectEssentials/log-out.png" width="25px" > LogOut </a> </p>
            <p align="right"><a href="Notifications.php"><img src="ProjectEssentials/Notification Logo.png" width="25px"></a></p>
            <label for="search">Search: </label>
            <input type="text" name="search" id="search" value=""/> 
            <br/> <br/>
            <table align="center">
                <tr>
                    <th width="350px"><a href="Orders.php">My Orders</a></th>
                    
                    <th width="350px"><a href="UserProfileInfo.php">Profile</a></th>

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

<?php

    }
    else
    {
        header('location: Log-in.php');
    }
    
?>
