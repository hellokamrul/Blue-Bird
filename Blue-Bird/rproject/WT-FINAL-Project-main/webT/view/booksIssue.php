<?php
session_start(); 
    if(!isset($_SESSION['email'])){
    header("Location: login.php");
}
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Add Book</title>
        <style>
            body {background-color:rgba(195,169,255,255);}
            h1   {color: rgba(252,252,255,255);}
            h2   {color: rgba(252,252,255,255);}
            form {color: rgba(4,38,76,255);}               
        </style>
    </head>
    <body>
    <?php include 'header.php'; ?>
    <br><br>

    <form action=""align="center">
    <h2>BOOKS ISSUE</h2>
        <table align="center">
             
                <td>
                    <lable for="bookname">Book:</label>
                </td>
                
            </tr>
            <tr>
                <td>
                    <lable for="author">Author:</label>
                </td>
                 
            </tr>
            <tr>
                <td>
                    <lable for="user">User email:</label>
                </td>
                 
            </tr>
            <tr>
                <td>
                    <lable for="date">date:</label>
                </td>
                 
            </tr>
            <tr>
                <td>
                    <lable for="retuen">Return</label>
                </td>
                <td> 
                 
                     <button type="button"style="background-color:rgba(2,36,74,255);color:#ffffff;border-radius: 7.5px;">Return</button>
                 
                </td>
                <td>
                <a href="home.php">
                    <button type="button"style="background-color:rgba(2,36,74,255);color:#ffffff;border-radius: 7.5px;">Back</button>
                </a>
                </td>

                 
            </tr>  
                   
        </table>
    </form>


    <br><br><hr>
    <?php include 'footer.php'; ?>
    </body>
</html>