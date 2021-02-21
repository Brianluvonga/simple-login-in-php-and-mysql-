<?php include 'db.php'; ?>


<?php 


//validates register credentials 
if (isset($_POST['Register'])){
  session_start();
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $pass = mysqli_real_escape_string($conn, $_POST['pass']);

  $sql = $conn -> query("INSERT INTO user(username,pass) Values('{$username}','{$pass}')");

  header('location:login.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<form action="register.php" method="POST">

<div class="credentials" style="text-align: center">
    <label for="username">Username</label><br>
    <input type="text" name="username" id="username" required><br>
    <label for="password">Password</label><br>
    <input type="password" name="pass" id="pass" required>
  <br><br>
 <button type="submit" value= "Register" name="Register">Register</button>

  </div>
   

</form>

</body>
</html>