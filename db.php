<!------------- simple db connection ---------------->
<?php 
    //variable declaration
    
$user = "root";   
$server = "localhost";
$pass = "";
$db = "simple";

$conn = new mysqli("localhost",$user,$pass,$db) or die("unable to connect to the database");
// if($conn){
//     echo "connection successful";
// }

?>