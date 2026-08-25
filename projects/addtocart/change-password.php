<?php 
require_once("./admin/functions.php");
require_once("includes/header.php");
// login logic
if(isset($_POST["login_customer"]))
{
$email=$_POST["email"];
$password=$_POST["password"];
if(customer_login($email,$password))
{
 echo "<script>
 alert('You are Logged In  successfully')
 window.location='index.php';
 </script>";
}
else 
{

 echo "<script>
 alert('Your email and password are incorrect try again')
 window.location='login.php';
 </script>";
}
}  

?>
<!DOCTYPE html>
<html>
<head>
<title>Create Account | MyShop</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- AOS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
body {
background: linear-gradient(135deg, #e3f2fd, #ffffff);
}

/* Card style */
.account-card {
border: none;
border-radius: 15px;
box-shadow: 0 10px 30px rgba(0,0,0,0.1);
transition: 0.3s;
}

.account-card:hover {
transform: translateY(-5px);
}

/* Input style */
.custom-input {
border-radius: 10px;
padding: 12px;
transition: 0.3s;
}

.custom-input:focus {
border-color: #0d6efd;
box-shadow: 0 0 10px rgba(13,110,253,0.3);
}

/* Button animation */
.btn-primary {
border-radius: 10px;
transition: 0.3s;
}

.btn-primary:hover {
transform: scale(1.03);
background: #0b5ed7;
}

/* Image */
.account-img {
max-height: 420px;
animation: float 3s ease-in-out infinite;
}

@keyframes float {
0% { transform: translateY(0px); }
50% { transform: translateY(-10px); }
100% { transform: translateY(0px); }
}

/* Link */
a {
text-decoration: none;
}
</style>
</head>
<body>
<div class="container my-5">
<div class="row align-items-center">

<!-- LEFT IMAGE -->
<div class="col-lg-6 mb-4 text-center" data-aos="fade-right">
<img src="https://cdni.iconscout.com/illustration/premium/thumb/create-account-illustration-svg-download-png-5230166.png"
class="img-fluid rounded account-img">
</div>

<!-- RIGHT FORM -->
<div class="col-lg-6" data-aos="fade-left">
<div class="card p-4 account-card">
<h2 class="mb-4 text-center fw-bold">Change Password here</h2>
<form method="post">
<div class="mb-3">
<input type="password" name="oldpassword" class="form-control custom-input" placeholder="Old Password">
</div>

<div class="mb-3">
<input type="password" name="npassword" class="form-control custom-input" placeholder="New Password">
</div>
<div class="mb-3">
<input type="password" name="cpassword" class="form-control custom-input" placeholder="confirmed Password">
</div>
<button type="submit" name="login_customer" class="btn btn-primary w-100">Submit</button>
</form>
</div>

</div>
</div>
</div>


</body>
</html>
<?php
require_once("includes/footer.php"); 
?>