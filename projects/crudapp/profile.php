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
$users=getProfile($rid);    
?>
<h3 class="text-success text-end">Welcome : <?php echo $_SESSION["name"];?></h3>
<!-- display profile -->
<h3 class="text-dark">Users Name : <?php echo $users["name"];?></h3>
<h3 class="text-dark">Users Email : <?php echo $users["email"];?></h3>
<h3 class="text-dark">Users Gender : <?php echo $users["gender"];?></h3>
<h3 class="text-dark">Users Phone : <?php echo $users["phone"];?></h3>
<a class="btn btn-primary" href="edit.php" onclick="return confirm('Are you sure to Edit Data ?')">Edit</a>
<a class="btn btn-danger" href="delete.php" onclick="return confirm('Are you sure to delete Data ?')">Delete</a>

</div>
<?php     
}     
require_once "footer.php";   
?>
