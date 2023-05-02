<?php
class UserView {
  public function render($user) {
    if ($user == null) {
      echo "User not found.";
    } else {
      echo "Name: " . $user['name'] . "<br>";
      echo "Phone: " . $user['phone'] . "<br>";
      echo "Email: " . $user['email'] . "<br>";
      echo "Gender: " . $user['gender'] . "<br>";
      echo "Date of Birth: " . $user['dob'] . "<br>";
    }
  }
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
    <button><a href="create_user.php">Add User</a></button>
   </div> 
<TAble>
    <tbody>
    <?php
        $sql="select * from users where uid = 10";
        $result=mysqli_query($con,$sql);
        if($result) {
            $user = mysqli_fetch_assoc($result);
    ?>
            <tr>
                <td><?php echo "Name: " . $user['name'] . "<br>";?></td>
            </tr>
            <tr>
                <td><?php echo "Phone: " . $user['phone'] . "<br>";?></td>
            </tr>
            <tr>
                <td><?php echo "Email: " . $user['email'] . "<br>";?></td>
            </tr>
            <tr>
                <td><?php echo "Date of Birth: " . $user['dob'] . "<br>";?></td>
            </tr>
            <tr>
                <td><?php echo "Gender: " . $user['gender'] . "<br>";?></td>
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