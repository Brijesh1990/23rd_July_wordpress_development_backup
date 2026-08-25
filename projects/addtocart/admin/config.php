<?php 
session_start();
$keyId = "rzp_test_SrXk28nO4zBWkg";
$keySecret = "vrC0pAJvXucKa5SOEUaz3Bfh";
//localhost
$ser="localhost";
$user="root";
$pass="admin123";
$dbname="addtocart";
$conn=mysqli_connect($ser,$user,$pass,$dbname);
//server
// $ser="sql208.byethost22.com";
// $user="b22_41863149";
// $pass="a123456";
// $dbname="b22_41863149_addtocart";
$conn=mysqli_connect($ser,$user,$pass,$dbname);
if($conn)
{
// echo "connection successfully stablished";
}
else 
{
  die(mysqli_error());  
}    
?>