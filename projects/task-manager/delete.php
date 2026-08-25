<?php
require_once "functions.php";

if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    if(deleteTask($id))
    {
        echo "<script>
        alert('Task deleted successfully')
        window.location='index.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('Failed to delete task')
        window.location='index.php';
        </script>";
    }
}
?>