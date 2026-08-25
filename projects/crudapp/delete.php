<?php 
require_once "functions.php"; 
if(!isset($_SESSION["r_id"]))
{
require_once "header.php";   
header("location:login.php"); 
}
else 
{
require_once "header_top.php";
$rid=$_SESSION["r_id"];
if(delProfile($rid))
    {
      echo "<div class='alert alert-danger'>
            <span class='text-white text-center fs-5'>Your data deleted successfully!</span>
            </div>";
            header('refresh:2,register.php');
    }
    else 
        {
            echo "<div class='alert alert-danger'>
            <span class='text-white text-center fs-5'>Something went wrong while deleted</span>
            </div>";
            header('refresh:2,profile.php');
        }

}

?>