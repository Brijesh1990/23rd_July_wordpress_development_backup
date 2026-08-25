<?php 
include_once("config.php");
//register logic here
if(isset($_POST["add_reg"]))
{
date_default_timezone_set("Asia/Calcutta");
// upload a file or images
$tmp_name=$_FILES["photo"]["tmp_name"];
$size=$_FILES["photo"]["size"]/1024;
$type=$_FILES["photo"]["type"];
$photo="uploads/customers/".$_FILES["photo"]["name"];
move_uploaded_file($tmp_name,$photo);

$fullnm=$_POST["fullname"];
$em=$_POST["email"];
$pwd=base64_encode($_POST["password"]);
$cpwd=base64_encode($_POST["confirmed_password"]);
$phone=$_POST["phone"];
$cn=$_POST["country"];
$sn=$_POST["state"];
$ct=$_POST["city"];
$date_time=date("d/m/Y H:i:s a");
// query 
if($pwd==$cpwd)
{    
$insert="insert into tbl_register(photo,fullname,email,password,phone,cid,sid,ctid,added_date_time) values ('$photo','$fullnm','$em','$pwd','$phone','$cn','$sn','$ct','$date_time')";
$query=mysqli_query($con,$insert);
if($query)
{
 echo "<script>
 alert('You are successfully registered')
 window.location='index.php';
 </script>";
}
}
else 
{
echo "<script>
 alert('Your password and confirmed password does not matched try again')
 window.location='register.php';
 </script>";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Register</title>
<!-- load a jquery CDN  -->
<script src="https://code.jquery.com/jquery-4.0.0.js"></script>
<!-- call ajax for load country => state => city without page reload there we can used ajax  -->
<script>
function str(val)
{
$.ajax({
type:"POST",
url:"getdata.php",
data:"country="+val,
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
url:"getdata.php",
data:"state="+val,
success:function(data)
{
$("#city").html(data);
}
})   
}
</script>
<script src="https://cdn.tailwindcss.com"></script>
<style>
@keyframes float {
0% { transform: translateY(0px); }
50% { transform: translateY(-10px); }
100% { transform: translateY(0px); }
}

.animate-float{
animation: float 4s ease-in-out infinite;
}
</style>

</head>

<body class="bg-slate-100 min-h-screen flex items-center justify-center p-6">

<div class="max-w-5xl w-full bg-white shadow-xl rounded-xl overflow-hidden grid md:grid-cols-2">

<!-- Left Grid -->
<div class="bg-gradient-to-br from-indigo-600 to-blue-500 text-white p-10 flex flex-col justify-center items-center">

<h1 class="text-4xl font-bold mb-4 animate-float">
Create Account
</h1>

<p class="text-center opacity-90 mb-6">
Register to access the admin dashboard and manage users easily.
</p>

<div class="w-40 h-40 bg-white/20 rounded-full flex items-center justify-center animate-float">
<svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" fill="none" viewBox="0 0 24 24" stroke="white">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M12 14l9-5-9-5-9 5 9 5z"/>
</svg>
</div>

</div>

<!-- Right Grid -->
<div class="p-10 flex flex-col justify-center">

<h2 class="text-2xl font-bold text-gray-700 mb-6">
Admin Registration
</h2>

<form method="post" class="space-y-5" enctype="multipart/form-data">

<div>
<label class="block text-sm text-gray-600 mb-1">Upload  Photo</label>
<input type="file" name="photo"
class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 outline-none"
placeholder="Enter your Photo">
</div>

<div>
<label class="block text-sm text-gray-600 mb-1">Full Name</label>
<input type="text" name="fullname"
class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 outline-none"
placeholder="Enter your name">
</div>

<div>
<label class="block text-sm text-gray-600 mb-1">Email</label>
<input type="email" name="email"
class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 outline-none"
placeholder="Enter your email">
</div>

<div>
<label class="block text-sm text-gray-600 mb-1">Password</label>
<input type="password" name="password"
class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 outline-none"
placeholder="Create password">
</div>

<div>
<label class="block text-sm text-gray-600 mb-1">Confirm Password</label>
<input type="password" name="confirmed_password"
class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 outline-none"
placeholder="Confirm password">
</div>
<div>
<label class="block text-sm text-gray-600 mb-1">Enter Phone</label>
<input type="text" name="phone"
class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 outline-none"
placeholder="Enter your name">
</div>
<div>
<label class="block text-sm text-gray-600 mb-1">Select country</label>
<select name="country" id="country" onchange="return str(this.value)"
class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 outline-none">
<option value="">-select country-</option>
<?php
$select="select * from tbl_country";
$query=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $fetch["cid"];?>"><?php echo $fetch["cname"];?></option>
<?php 
}
?>
</select>
</div>
<div>
<label class="block text-sm text-gray-600 mb-1">Select state</label>
<select name="state" id="state" onchange="return str1(this.value)"
class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 outline-none">
<option value="">-select state-</option>
</select>
</div>

<div>
<label class="block text-sm text-gray-600 mb-1">Select city</label>
<select name="city" id="city"
class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 outline-none">
<option value="">-select city-</option>
</select>
</div>

<button type="submit" name="add_reg"
class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">
Register
</button>

</form>

<div class="text-sm mt-5">
Already have an account ?
<a href="index.php" class="text-indigo-600 hover:underline">
Login here
</a>
</div>

</div>

</div>

</body>
</html>