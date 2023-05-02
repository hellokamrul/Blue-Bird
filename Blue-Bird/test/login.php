<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if(isset($error)) { echo '<p>' . $error . '</p>'; } ?>
    <form action="../Controllers/LoginCntroller.php" method="POST">
    <label for="user">User Type:</label>
  <select name="user" id="user">
    <option value="users">Personal</option>
    <option value="buser">Marchent</option>
  </select>
  <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>


        <input type="submit" name="submit" value="Login">
        
        <button><a href="create_user.php">Registration</a></button>
       
    </form>
</body>
</html>
