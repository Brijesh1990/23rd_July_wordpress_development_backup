<?php 
require_once "functions.php";
// edit expense 
if(isset($_GET["editid"]))
{
$id=$_GET["editid"];
$editdata=editExpenseData($id);
}
// update logic here
if(isset($_POST["upd_exp"]))
{
$id=$_GET["editid"];    
$catname=$_POST["catname"];
$name=$_POST["expname"];
$desc=$_POST["desc"];
$ammount=$_POST["ammount"];
$added_date=$_POST["added_date"];
// call a function for update
$updExp=updExpenseData($id,$name,$catname,$desc,$ammount,$added_date);
if($updExp)
{
echo "<script>
alert('expense updated successfully')
window.location='index.php';
</script>";
}
else
{
echo "<script>
alert('something went wrong')
window.location='index.php';
</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Expense Tracker</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen p-4">
<div class="max-w-5xl mx-auto space-y-8">
<!-- Header -->
<div class="flex justify-between items-center">
<h1 class="text-2xl font-bold text-gray-800">Expense Tracker</h1>
<!-- Total Category Button (UI only) -->
<button class="px-4 py-2 rounded-xl bg-indigo-600 text-white shadow-md hover:bg-indigo-700 transition-all duration-300 hover:scale-105 active:scale-95">
Total Expense <span class="bg-white text-black rounded-full p-1"> 
<?php 
$total_exp=getTotalExpense();
echo $total_exp[0]["total_expense"]; 
?>
</span>
</button>
</div>
<div class="bg-white rounded-2xl shadow-lg p-6">
<h2 class="text-lg font-semibold mb-4 text-gray-700">Edit Expense</h2>
<form class="grid grid-cols-1 md:grid-cols-2 gap-4" method="post">
<!-- Category -->
<select name="catname" class="p-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-400 outline-none">
<option>Select Category</option>
<!-- fetch category here -->
<?php 
$arr=getCategory();
foreach($arr as $value)
{
if($editdata[0]['catid']==$value["catid"])
    {
?>
<option value="<?php echo $editdata[0]["catid"];?>"  selected='selected'><?php echo $editdata[0]["categoryname"];?></option>


<?php 
}
else 
    {
?>

<option value="<?php echo $value["catid"];?>"><?php echo $value["categoryname"];?></option>
<?php
}
}
?>
</select>
<!-- Name -->
<input type="text" name="expname" value="<?php echo $editdata[0]["name"];?>" placeholder="Expense Name"
class="p-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-400 outline-none" />
<!-- Description -->
<input type="text" name="desc" placeholder="Description" value="<?php echo $editdata[0]["descriptions"];?>"
class="p-3 rounded-xl border border-gray-300 md:col-span-2 focus:ring-2 focus:ring-indigo-400 outline-none" />

<!-- Amount -->
<input type="number" name="ammount" placeholder="Amount" value="<?php echo $editdata[0]["ammount"];?>"
class="p-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-400 outline-none" />

<!-- Date -->
<input type="date" name="added_date" value="<?php echo $editdata[0]["added_date_time"];?>"
class="p-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-400 outline-none" />

<!-- Submit Button -->
<div class="md:col-span-2">
<button type="submit" name="upd_exp"
class="w-full py-3 rounded-xl bg-indigo-600 text-white font-semibold shadow-md 
transition-all duration-300 hover:bg-indigo-700 hover:shadow-xl 
hover:scale-[1.02] active:scale-95 relative overflow-hidden">
<span class="relative z-10">Update Expense</span>
<!-- Animated shine effect -->
<span class="absolute inset-0 bg-white opacity-10 blur-xl transform -translate-x-full hover:translate-x-full transition-all duration-700"></span>
</button>
</div>
</form>
</div>
