<?php 
require_once("config.php");
// edit data for update 
if(isset($_GET["editid"]))
{
$editid=base64_decode($_GET["editid"]);
$select="select * from tbl_addusers where user_id='$editid'";
$query=mysqli_query($con,$select);
$fetch=mysqli_fetch_array($query);
}
// update users data 
if(isset($_POST["upd_users"]))
{
date_default_timezone_set("Asia/Calcutta");      
$editid=base64_decode($_GET["editid"]);
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"]; 
$date_time=date("d/m/Y H:i:s a");
$upd="update tbl_addusers set name='$name',email='$email',phone='$phone',added_date_time='$date_time' where user_id='$editid'"; 
$query=mysqli_query($con,$upd);
  if($query)
    {
     echo "<script>
     alert('data updated successfully')
     window.location='./';
     </script>";
    }
    else 
    {

     echo "<script>
     alert('something went wrong while updating data')
     window.location='./';
     </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Tailwind CRUD UI</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen p-8">

<div class="fixed inset-0 bg-black/40 flex items-center justify-center

peer-checked:opacity-100 peer-checked:visible
transition-all duration-300">
<div class="bg-white p-6 rounded-xl w-96
scale-95 peer-checked:scale-100
transition-all duration-300">

<h2 class="text-xl font-semibold mb-4">Edit User data</h2>
<form method="post">
<label class='text-green-500'>Edit Name *</label>    
<input type="text" name="name" placeholder="Name" value="<?php echo $fetch["name"];?>"
class="w-full mb-3 p-2 border rounded-md
focus:ring-2 focus:ring-blue-400 outline-none" required>


<label class='text-green-500'>Edit Email *</label>
<input type="email" name="email" placeholder="Email" value="<?php echo $fetch["email"];?>"
class="w-full mb-4 p-2 border rounded-md
focus:ring-2 focus:ring-blue-400 outline-none" required>


<label class='text-green-500'>Edit Phone *</label>
<input type="text" name="phone" placeholder="Phone" value="<?php echo $fetch["phone"];?>"
class="w-full mb-4 p-2 border rounded-md
focus:ring-2 focus:ring-blue-400 outline-none" required>

<div class="flex justify-end space-x-3">

<button type="submit" name="upd_users" 
class="px-4 py-2 bg-blue-600 text-white rounded-md
hover:bg-blue-700 transition">
Update
</button>
</div>
</div>
</div>
<body>
<html>    