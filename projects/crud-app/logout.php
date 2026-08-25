<?php 
session_start();
if(isset($_GET["logout_here"]))
{
   unset($_SESSION["rid"]);
   unset($_SESSION["email"]);
   unset($_SESSION["fullname"]);
   session_destroy();
    echo "<script>
    alert('You are successfully Logout')
    window.location='index.php';
    </script>";
}

?>