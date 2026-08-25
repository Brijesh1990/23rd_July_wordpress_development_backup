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
?>
<h1>Welcome To:Dashboard</h1>
<h3 class="text-success text-end">Welcome : <?php echo $_SESSION["name"];?></h3>
<a class="btn btn-success" href="profile.php">Manage Profile</a>
<a class="btn btn-danger" href="logout.php?logout=1" onclick="return confirm('are you sure to Logout ?')">Logout ?</a>
</div>
<?php     
}     
require_once "footer.php";   
?>
