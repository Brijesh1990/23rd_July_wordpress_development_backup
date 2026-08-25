<?php 
include_once("config.php");
include_once("navigation.php");
if(!isset($_SESSION["rid"]))
{
 header("location:index.php");   
}
if(isset($_POST["change_pass"]))
{
$rid=$_SESSION["rid"];
$opass=base64_encode($_POST["opass"]);
$npass=base64_encode($_POST["npass"]);
$cpass=base64_encode($_POST["cpass"]);    

$select="select password from tbl_register where rid='$rid'";
$query=mysqli_query($con,$select);
$fetch=mysqli_fetch_array($query);
$pass=$fetch["password"];
if($pass==$opass && $npass==$cpass)
{
$upd="update tbl_register set password='$npass' where rid='$rid'";
$query=mysqli_query($con,$upd);
unset($_SESSION["rid"]);
unset($_SESSION["email"]);
unset($_SESSION["fullname"]);
session_destroy();
echo "<script>
alert('Your password changed successfully')
window.location='index.php';
</script>";
}
else 
{
echo "<script>
alert('Opass , Npass and confirmed password does not matched try again')
window.location='changepassword.php';
</script>";
}


}    
?>

<div class="w-1/2 mx-auto  mb-8">
<h1 class="text-3xl font-bold mt-8">Change Password</h1>
<div class="space-x-4 mt-3">
<!-- 2 Grid Layout -->
<div class="grid md:grid-cols-1 gap-6 w-full   shadow-lg p-5">
<form method="post">
<div class="form-group mt-2">
<label>Old Password</label>
<br>    
<input type="password" name="opass" placeholder="Enter Old password" class="p-2 w-full" />    
</div>

<div class="form-group mt-2">
<label>New Password</label>
<br>    
<input type="password" name="npass" placeholder="Enter New password" class="p-2 w-full" />    
</div>
<div class="form-group mt-2">
<label>Confirmed Password</label>
<br>    
<input type="password" name="cpass" placeholder="Enter Confirmed password" class="p-2 w-full" />    
</div>

<div class="form-group mt-2">
<input type="submit" name="change_pass" value="submit" placeholder="Enter Old password" class="p-2 bg-black text-white mt-5" />    
</div>


</form>
</div>
</div>
</div>
<!-- add modal here -->
<?php 
include_once("adduser.php");
?>
</body>
</html>