<?php 
include_once("config.php");
include_once("navigation.php");
if(!isset($_SESSION["rid"]))
{
 header("location:index.php");   
}
// manage profile
$rid=$_SESSION["rid"];
$select="select * from tbl_register where rid='$rid'";
$query=mysqli_query($con,$select);
$fetch=mysqli_fetch_array($query);    
// update profile
if(isset($_POST["update_profile"]))
{
// upload a file or images
$rid=$_SESSION["rid"];
$tmp_name=$_FILES["photo"]["tmp_name"];
$size=$_FILES["photo"]["size"]/1024;
$type=$_FILES["photo"]["type"];
$photo="uploads/customers/".$_FILES["photo"]["name"];
move_uploaded_file($tmp_name,$photo);
$fullname=$_POST["fullname"];
$email=$_POST["email"];
// update query 
$upd="update tbl_register set photo='$photo', fullname='$fullname',email='$email' where rid='$rid'";
$query=mysqli_query($con,$upd);
echo "<script>
alert('You profile are successfully Updated')
window.location='manageprofile.php';
</script>";
}
?>
<div class="w-1/2 mx-auto  mb-8">
<h1 class="text-3xl font-bold mt-8">Manage Profile</h1>
<div class="space-x-4 mt-3">
<!-- 2 Grid Layout -->
<div class="grid md:grid-cols-1 gap-6 w-full   shadow-lg p-5">
<form method="post" enctype="multipart/form-data">
<div class="form-group mt-2">
<label><img src="<?php echo $fetch["photo"];?>" alt="photo"  class="rounded-full w-36"/></label>
<br>    
<input type="file" name="photo" class="p-2 w-full" />    
</div>
<div class="form-group mt-2">
<label>Edit fullName *</label>
<br>    
<input type="text" name="fullname" value="<?php echo $fetch["fullname"];?>" placeholder="Enter New password" class="p-2 w-full" />    
</div>
<div class="form-group mt-2">
<label>Edit email</label>
<br>    
<input type="text" name="email" value="<?php echo $fetch["email"];?>"  class="p-2 w-full" />    
</div>
<div class="form-group mt-2">
<input type="submit" name="update_profile" value="Update Profile" class="p-2 bg-black text-white mt-5" />    
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