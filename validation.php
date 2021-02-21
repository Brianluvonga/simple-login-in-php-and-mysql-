<?php
include 'db.php';
// validates login credentials 

$errors = "";// variable for error messages


if(isset($_POST['login'])){
    if (empty($_POST['username']) || empty($_POST['pass'])){
        
        $errors = "please enter a correct username or password";
    }
    else{
        $username = $_POST['username'];
        $pass = $_POST['pass'];

        $result = $conn->query("SELECT * FROM (user) WHERE username = '$username' AND pass = '$pass' ");
        
        $rows = mysqli_num_rows($result);
            

        if ($rows == 1){
            while ($row=mysqli_fetch_array($result)){
                
            $_SESSION['userid'] = $username;

            }
            header("location:home.php");

        }
        else{
            
            $errors = ("incorrect credentials, check your details again!") ;
        }
        mysqli_close($conn);

    }

    }







?>