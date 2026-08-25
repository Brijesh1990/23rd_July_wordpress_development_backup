<?php 
require_once "functions.php";
if(isset($_GET["logout"]))
{
 if(logoutUsers())
    {
        echo "<script>
        alert('You are logout successfully')
        window.location='login.php';
        </script>";
    }

}
?>