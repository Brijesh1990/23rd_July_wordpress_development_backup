<?php 
require_once "functions.php"; 
if(!isset($_SESSION["r_id"]))
{
require_once "header.php"; 
header("location:login.php");   
}
else 
{
require_once "header_top.php";       
$rid=$_SESSION["r_id"];     
$edProfile=getProfile($rid);    
} 

// update logic for profile data
if(isset($_POST["update_profile"]))
{
    $rid=$_SESSION["r_id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $phone=$_POST["phone"];
    if(updateProfile($rid,$name,$email,$gender,$phone))
    {
        echo "<div class='alert alert-success'>
        <span class='text-white text-center fs-5'>Your data updated successfully!</span>
        </div>";
        header('refresh:2,profile.php');
    }
    else 
        {
            echo "<div class='alert alert-danger'>
            <span class='text-white text-center fs-5'>Something went wrong while updated</span>
            </div>";
        }
}    
?>
<div class="container mt-5 mx-auto">
<h3 class="text-success text-end">Welcome : <?php echo $_SESSION["name"];?></h3>
<!-- display profile -->
<form method="post"> 
<div class="mb-3"> 
<h3 class="text-dark">Edit Name : <input type="text" name="name" value="<?php echo $edProfile["name"];?>"></h3>
</div>
<div class="mb-3">
<h3 class="text-dark">Edit Email : <input type="email" name="email" value="<?php echo $edProfile["email"];?>"></h3>
</div>
<div class="mb-3">
<h3 class="text-dark">Edit Gender : <input type="text" name="gender" value="<?php echo $edProfile["gender"];?>"></h3>
<h3 class="text-dark">Edit Phone : <input type="text" name="phone" value="<?php echo $edProfile["phone"];?>"></h3>
</div>
<button type="submit" name="update_profile" class="btn btn-primary">
Update profile
</button>
</div>
</form>
<?php     
require_once "footer.php";   
?>
