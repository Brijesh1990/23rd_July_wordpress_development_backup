<?php
require_once "include/config.php";
// create a function for admin login 
function adminLogin($email, $password)
{
    global $conn;
    $sql = "SELECT * FROM tbl_admin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['admin_id'] = $row['admin_id'];
        $_SESSION['email'] = $row['email'];
        return true;
    } else {
        return false;
    }
}
// create a function for admin logout
function adminLogout()
{
    
    unset($_SESSION['admin_id']);
    unset($_SESSION['email']);
    session_destroy();
    echo "<script>
    alert('You are logged out successfully')
    window.location='index.php';
    </script>";
}
if(isset($_GET['logout'])){
    adminLogout();
}
?>