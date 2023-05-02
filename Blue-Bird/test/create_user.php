<?php
include '../db/create_user.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Create User</title>
</head>
<body>
   
    <form method="POST">
        <!-- <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" required><br><br>
        
        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" required><br><br>
        
        <input type="submit" name="submit" value="Create User" > -->

        <table align="center">
        <tr>
            <td><h1>Create User</h1></td>
        </tr>
            <tr>
                <td>
                <label for="name">Name:</label>
                </td>
                <td>
                <input type="text" placeholder="Name" name="name" id="name">
                </td>
            </tr>
            <tr>
                <td> </td>
           
            </tr>
            <tr>
                <td>
                <label for="phone">Phone Number:</label> 
                </td>
                <td>
                <input type="phone" placeholder="+880**********" name="phone" id="phone" value="+880">
                </td>
            </tr>
            
            <tr>
                <td>
                <label for="email">Email ID:</label> 
                </td>
                <td>
                <input type="email" placeholder="example@" name="email" id="email">
                </td>
            </tr>          
            <tr>
                <td>
                <label for="gender">Gender:</label>
                </td>
                <td>
                <input type="radio" name="gender" id="gender" value="Male" required>Male
                </td>
                <td>
                <input type="radio" name="gender" id="gender"  value="Female" required>Female   
                </td>
            </tr>
          
            <tr>
                <td>
                <label for="dob">Date of Birth:</label>
                </td>
                <td>
                <input type="date" name="dob" id="dob">
                </td>
            </tr>
            
            
            <tr>
                <td>
                <label for="pass">Password:</label>
                </td>
                <td>
                <input type="password" placeholder="Password" name="password" id="password">
                </td>
            </tr>
            <tr>
           
                <td> <input type="Submit" name="submit" value="Submit" style="background-color:rgba(2,36,74,255);color:#ffffff;border-radius: 7.5px;">
                    <a href="../test/login.php">
                    <button type="button"style="background-color:rgba(2,36,74,255);color:#ffffff;border-radius: 7.5px;">Login</button>
                    </a>
                 </td>
            </tr>
       
        
        </table>

    </form>
</body>
</html>
