<?php 
// connection with mysqli
session_start();
$ser="localhost";
$user="root";
$pass="";
$dbname="crudapp1";
$con=new mysqli($ser,$user,$pass,$dbname);
// check connection
if($con)
{
// echo "<h6 align='center'>Database connection established successfully</h6>";
}
else 
{
die(mysqli_error($con));
}


?>