<?php 
$ser="localhost";
$user="root";
$pass="";
$dbname="expapp";
$conn=mysqli_connect($ser,$user,$pass,$dbname);
if(!$conn)
{
die(mysqli_error($conn));
}

?>