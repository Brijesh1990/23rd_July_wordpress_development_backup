<?php 
require_once("./admin/functions.php");
require_once("includes/header.php");
// register customers 
if(isset($_POST["add_register"]))
{
date_default_timezone_set("Asia/Calcutta");    
$tmp_name=$_FILES["photo"]["tmp_name"];
$path="uploads/customers/".$_FILES["photo"]["name"];
move_uploaded_file($tmp_name,$path);  
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
 // Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$phone=$_POST["phone"];
$address=$_POST["address"];
$cid=$_POST["country"];
$sid=$_POST["state"];
$ctid=$_POST["city"];
$added_date=date("d/m/Y H:i:s a");

$data=array("photo"=>$path,"username"=>$username,"email"=>$email,"password"=>$hashed_password,"phone"=>$phone,"address"=>$address,"cid"=>$cid,"sid"=>$sid,"ctid"=>$ctid,"added_date"=>$added_date); 
print_r($data);

if($password==$cpassword)
{   

 insertalldata('tbl_customers',$data);   

 echo "<script>
 alert('Your account  successfully created')
 window.location='login.php';
 </script>";
}
else 
    {
        
 echo "<script>
 alert('Your  password and confirmed password does not matched')
 window.location='account.php';
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
<!-- ajax via jquery -->
<script>
function str(val)
{
   $.ajax({

    type:"POST",
    url:"data.php",
    data:'country='+val,
    success:function(data)
    {
        $("#state").html(data);
    }
    
   }) 
}

function str1(val)
{
   $.ajax({

    type:"POST",
    url:"data.php",
    data:'state='+val,
    success:function(data)
    {
        $("#city").html(data);
    }
    
   }) 
}
</script>
</head>

<body>

<div class="container my-5 vh-100">
<div class="row align-items-center top-0 position-relative">
<!-- LEFT IMAGE -->
<div class="col-lg-6 mb-4 text-center top-0 position-sticky" style="top:80px;" data-aos="fade-right">

<img src="https://cdni.iconscout.com/illustration/premium/thumb/create-account-illustration-svg-download-png-5230166.png"
class="img-fluid rounded account-img  top-0 position-sticky">

</div>

<!-- RIGHT FORM -->
<div class="col-lg-6" data-aos="fade-left">

<div class="card p-4 account-card">

<h2 class="mb-4 text-center fw-bold">Create Account</h2>

<form method="post" enctype="multipart/form-data">


<div class="mb-3">
<input type="file" name="photo" class="form-control custom-input" placeholder="photo">
</div>

<div class="mb-3">
<input type="text" name="username" class="form-control custom-input" placeholder="Username">
</div>

<div class="mb-3">
<input type="email"  name="email" class="form-control custom-input" placeholder="Email">
</div>

<div class="mb-3">
<input type="password"  name="password" class="form-control custom-input" placeholder="Password">
</div>

<div class="mb-3">
<input type="password"  name="cpassword" class="form-control custom-input" placeholder="Confirm Password">
</div>


<div class="mb-3">
<input type="text"  name="phone" class="form-control custom-input" placeholder="Phone">
</div>

<div class="mb-3">
<textarea  name="address"  class="form-control custom-input" placeholder="Address"></textarea>
</div>



<div class="mb-3">
<select name="country" id="country"  class="form-control custom-input" placeholder="country" onblur="return str(this.value)">
<option value="">-select country-</option>
<!-- fetch country -->
<?php 
$shwcountry=selectAllData('tbl_country');
foreach($shwcountry as $country)
{    
?>
<option value="<?php echo $country["cid"];?>"><?php echo $country["cname"];?></option>
<?php 
}
?>
</select>
</div>


<div class="mb-3">
<select name="state" id="state" onblur="return str1(this.value)"  class="form-control custom-input" placeholder="state">
<option value="">-select state-</option>
<option value=""></option>
</select>
</div>


<div class="mb-3">
<select name="city" id="city"  class="form-control custom-input" placeholder="city">
<option value="">-select city-</option>
<option value=""></option>
</select>
</div>

<button type="submit" class="btn btn-primary w-100" name="add_register">Register</button>
<p class="text-center mt-3">
Already have an account? <a href="login.php">Login</a>
</p>

</form>

</div>

</div>

</div>
</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
AOS.init({
duration: 900,
once: true
});
</script>

</body>
</html>
<?php
require_once("includes/footer.php"); 
?>