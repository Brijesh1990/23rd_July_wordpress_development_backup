<?php 
require_once "config.php";
// create a function to fetch exp category inside of add category form
function getCategory()
{
global $conn;
$select="select * from tbl_expcategory";
$query=mysqli_query($conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;
}       
return $arr;
}
// create a count total added  expense 
function getTotalExpense()
{
global $conn;
$select="select count(expid) as total_expense from tbl_addexpense";
$query=mysqli_query($conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;
}       
return $arr;
}

// create a function for sum of  subtotal of expense 
function getSumExpense()
{
global $conn;
$select="select sum(ammount) as total_sum_expense from tbl_addexpense";
$query=mysqli_query($conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;
}       
return $arr;
}
//create a function for show all added expense 
function getExpenseData()
{
global $conn;
$select="select tbl_addexpense.*,categoryname from tbl_addexpense join tbl_expcategory on tbl_addexpense.catid=tbl_expcategory.catid";
$query=mysqli_query($conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;
}       
return $arr;
}
// create a function for add expense 
function addExpense($catname,$name,$desc,$ammount,$added_date)
{
global $conn;
$insert="insert into tbl_addexpense(name,catid,descriptions,ammount,added_date_time) values('$name','$catname','$desc','$ammount','$added_date')";
$query=mysqli_query($conn,$insert);
if($query)
{
return true;
}
else 
{
return false;
}
}

// create a function for delete expanse data 
function delExpenseData($id)
{
global $conn;
$id=$_GET["deleteid"];
$delete="delete from tbl_addexpense where expid='$id'";
$query=mysqli_query($conn,$delete);
if($query)
{
return true;
}
else 
{
return false;
}
}
// create a function for edit expanse data 
function editExpenseData($id)
{
global $conn;
$id=$_GET["editid"];
$edit="select tbl_addexpense.*,categoryname from tbl_addexpense join tbl_expcategory on tbl_addexpense.catid=tbl_expcategory.catid where expid='$id'";
$query=mysqli_query($conn,$edit);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;
}   
return $arr;
}

// create a function for update expanse data 
function updExpenseData($id,$name,$catname,$desc,$ammount,$added_date)
{
global $conn;
$id=$_GET["editid"];
$upd="update tbl_addexpense set name='$name',catid='$catname',descriptions='$desc',ammount='$ammount',added_date_time='$added_date' where expid='$id'";
$query=mysqli_query($conn,$upd);
if($query)
{
return true;
}
else 
{
return false;
}
}

// create a function for print bill 
function getBill()
{
global $conn;
$select="select * from tbl_addexpense";
$query=mysqli_query($conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;
}       
return $arr;
}

?>