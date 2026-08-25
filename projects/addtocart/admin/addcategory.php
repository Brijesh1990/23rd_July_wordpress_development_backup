<?php 
require_once("functions.php");
require_once("includes/header.php");
require_once("includes/sidebar.php");
// set session 
if(!isset($_SESSION["adminid"]))
{
header("location:index.php");
}  
// add category logic here
if(isset($_POST["btn_addcategory"]))
{
$catname=$_POST["catname"];
// array stored here
$data=array("categoryname"=>$catname);
if(insertalldata('tbl_addcategory',$data))
{
 echo "<script>
 alert('Category added successfully')
 window.location='addcategory.php';
 </script>";
}
}
?>
<!-- Content -->
<div class="content fade-in">
<h2 class="mb-4">Add Category</h2>
<!-- Cards -->
<div class="row p-5 shadow">
<form method="post">
<div class="form-group mt-3">
<input type="text" name="catname" placeholder="Enter categoryName *" required class="form-control w-50" />
<div>    


<div class="form-group mt-3">
<input type="submit" name="btn_addcategory"  class="btn btn-sm btn-dark text-white" value="Add Category" />
<div>    

</form>
</div>

<!-- Table -->
<div class="card mt-4 p-3 shadow">
<h5>Manage Category</h5>

<table class="table mt-3">
<tr>
<th>ID</th>
<th>CategoryName</th>
<th>Action</th>
</tr>
<?php 
//fetch all category data
$shwCategory=selectAllData('tbl_addcategory');
foreach($shwCategory as $row)
{    
?>
<tr>
<td><?php echo $row["catid"];?></td>
<td><?php echo $row["categoryname"];?></td>
<td><a href="addcategory.php?deletecatid=<?php echo $row["catid"];?>" class="btn btn-danger text-white">Delete</a>
|
<a href="editcategory.php?editcatid=<?php echo $row["catid"];?>" class="btn btn-success text-white">Edit</a></td>
</tr>
<?php 
}
?>
</table>

</div>
</div>
