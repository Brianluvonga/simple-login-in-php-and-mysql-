<?php include 'validation.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login Application</title>

    <style>
    .credentials{
      text-align: center;
    }
    </style>
</head>
<body>

<form action="" method="POST">
<div class="credentials">
<?php echo $errors; ?>
    <label for="username">Username</label><br>
    <input type="text" name="username" id="username" required><br>
    <label for="password">Password</label><br>
    <input type="password" name="pass" id="pass" required>
  <br><br>
    <button type="submit" name="login"> Login </button>
 

  </div>

</form>


    
</body>
</html>