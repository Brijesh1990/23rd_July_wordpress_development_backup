<?php 
session_start();
unset($_SESSION["email"]);
session_destroy();
echo "<h2 align='center'>You are Logout successfully</h2>";
header('refresh:1,index.php');
?>