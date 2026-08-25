<?php 
include_once("config.php");
include_once("navigation.php");
if(!isset($_SESSION["rid"]))
{
 header("location:index.php");   
}
// delete data 
if(isset($_GET["deleteid"]))
{
 $deleteid=base64_decode($_GET["deleteid"]);
 $delete="delete from tbl_addusers where user_id='$deleteid'";
 $query=mysqli_query($con,$delete);
    if($query)
    {
     echo "<script>
     alert('data successfully deleted')
     window.location='./';
     </script>";
    }
    else 
    {

     echo "<script>
     alert('something went wrong while deleting data')
     window.location='./';
     </script>";
    }
}
?>
<!-- Hidden Checkbox for Modal -->
<input type="checkbox" id="modal-toggle" class="peer hidden">
<!-- Header -->
<div class="w-1/2 mx-auto  mb-8">
<h1 class="text-3xl font-bold mt-8">User Management(CRUD)</h1>

<div class="space-x-4 mt-3">
<!-- Add Users Button -->
<label for="modal-toggle"
class="cursor-pointer bg-blue-600 text-white px-5 py-2 rounded-lg
hover:bg-blue-700 transition-all duration-300 hover:scale-105">
Add Users 👤
</label>

<!-- Manage Users Button -->
<button
class="bg-green-600 text-white px-5 py-2 rounded-lg
hover:bg-green-700 transition-all duration-300 hover:scale-105">
Total Users <span class="bg-red-600 rounded-full p-1 ms-5">
<?php 
$rid=$_SESSION["rid"];
$select="select count(user_id) as totalusers from tbl_addusers where rid='$rid'";
$query=mysqli_query($con,$select);
$fetch=mysqli_fetch_array($query);   
echo $fetch["totalusers"];
?>    
</span>
</button>
</div>
</div>

<!-- 2 Grid Layout -->
<div class="grid md:grid-cols-2 gap-6 w-1/2 mx-auto  shadow-lg p-5">

<!-- User Card 1 -->
<?php 
//error_reporting(0);
$rid=$_SESSION["rid"];
$select="select * from tbl_addusers   where rid='$rid' order by user_id desc";
$query=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($query))
{    
?>
<div class="bg-white p-6 rounded-xl shadow-md
transition-all duration-300
hover:scale-105 hover:shadow-xl">
<h3 class="text-lg font-semibold"><?php echo $fetch["name"];?></h3>
<p class="text-gray-600 mb-4"><?php echo $fetch["email"];?></p>
<p class="text-gray-600 mb-4"><?php echo $fetch["phone"];?></p>

<div class="flex justify-between">
<a href='editdata.php?editid=<?php echo base64_encode($fetch["user_id"]);?>'<button class="text-blue-600 hover:underline" onclick="return confirm('Are you sure to edit data ?')">Edit</button>
<a href='index.php?deleteid=<?php echo base64_encode($fetch["user_id"]);?>'><button type="button" class="text-red-600 hover:underline" onclick="return confirm('Are you sure to delete data ?')">Delete</button></a>
</div>
</div>
<?php 
}
?>

</div>
<!-- add modal here -->
<?php 
include_once("adduser.php");
?>
</body>
</html>