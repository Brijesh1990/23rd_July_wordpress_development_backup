<?php 
require_once("functions.php");
// login logic
if(isset($_POST["btn_admin"]))
{
$email=$_POST["admin_email"];
$password=$_POST["admin_password"];
if(admin_login($email,$password))
{
 echo "<script>
 alert('You are Logged In as admin successfully')
 window.location='dashboard.php';
 </script>";
}
else 
{

 echo "<script>
 alert('Your email and password are incorrect try again')
 window.location='index.php';
 </script>";
}
}  

// logout login 
if(isset($_GET["logoutid"]))
{
$logoutid=$_GET["logoutid"];
logout_admin();  
echo "<script>
 alert('You are Logout successfully')
 window.location='index.php';
 </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
height: 100vh;
background: linear-gradient(135deg, #0d6efd, #6610f2);
display: flex;
justify-content: center;
align-items: center;
}

/* Card */
.login-card {
width: 350px;
border-radius: 12px;
animation: fadeIn 0.8s ease;
}

/* Inputs */
.form-control {
border-radius: 8px;
}

button:hover {
transform: scale(1.05);
transition: 0.3s;
}

</style>
</head>
<body>
<div class="card p-4 shadow login-card">
<h3 class="text-center mb-3">Admin Login</h3>
<form method="post">
<input type="text" name="admin_email" class="form-control mb-3" placeholder="Email">
<input type="password" name="admin_password" class="form-control mb-3" placeholder="Password">
<button class="btn btn-dark w-100" type="submit" name="btn_admin">Login</button>
</form>
</div>
</body>
</html>