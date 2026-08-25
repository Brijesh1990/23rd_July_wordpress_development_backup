<?php 
require_once("config.php");
// create a function for admin login
function admin_login($email,$password)
{
global $conn;
$select="select * from tbl_admin where email='$email' and password='$password'";
$query=mysqli_query($conn,$select);
$num_rows=mysqli_num_rows($query);
$fetch=mysqli_fetch_array($query);
if($num_rows==1)
{
//session
$_SESSION["adminid"]=$fetch["adminid"];
$_SESSION["admin_email"]=$fetch["email"]; 
return true; 
}   
else 
{
return false;
}
}


// create a function for customer login
function customer_login($email,$password)
{
global $conn;
$select="select * from tbl_customers where email='$email'";
$query=mysqli_query($conn,$select);
$num_rows=mysqli_num_rows($query);
if($num_rows==1)
{
$fetch=mysqli_fetch_array($query);
if(password_verify($password,$fetch["password"]))
{    
//session
$_SESSION["customer_id"]=$fetch["customer_id"];
$_SESSION["email"]=$fetch["email"]; 
return true; 
}
}   
else 
{
return false;
}
}

// create a function for insert all data 
function insertalldata($table,$data)
{
global $conn;
// convert array keys 
$column=array_keys($data);
$column1=implode(",",$column);

$values=array_values($data);
$values1=implode("','",$values);

$insert="insert into $table($column1) values ('$values1')";
$query=mysqli_query($conn,$insert);
return $query;

}

// create a function for display all data
function selectAllData($table)
{
global $conn;
$select="select * from $table";
$query=mysqli_query($conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;
}
return $arr;

}

// create a function for join all data
function selectJoinData($table,$table1,$catid,$columnname)
{
global $conn;
$select="select $table.*,$columnname from $table join $table1 on $table.$catid=$table1.$catid";
$query=mysqli_query($conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;
}
return $arr;

}

// create a function for display all data select its id
function selectAllDataId($table,$table1,$columnname,$catid,$id)
{
global $conn;
$select="select $table.*,$columnname from $table join $table1 on $table.$catid=$table1.$catid where $table.$catid='$id'";
$query=mysqli_query($conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;
}
return $arr;

}


function selectAllDataId1($table,$table1,$columnname,$catid,$pid,$id)
{
global $conn;
$select="select $table.*,$columnname from $table join $table1 on $table.$catid=$table1.$catid where $table.$pid='$id'";
$query=mysqli_query($conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;
}
return $arr;

}

// create a function to join cart | customers | products
function managecart($table,$table1,$col1,$col2,$col3,$pid,$custid,$customer_id)
{
global $conn;
$select="select $table.*,$col1,$col2,$col3 from $table join $table1 on $table.$pid=$table1.$pid where $custid='$customer_id'";
$query=mysqli_query($conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;
}
return $arr;

}

// create a function for count cart 
function selectCountData($table,$col,$col1,$customer_id)
{
global $conn;
$select="select count($col) as total from $table where $col1='$customer_id'";
$query=mysqli_query($conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;
}
return $arr;

}
// create a function for manageorder
function manageorders($table,$col1,$col2,$customer_id)
{
global $conn;
$select="select * from $table where $col1='$customer_id' and $col2='Paid'";
$query=mysqli_query($conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;
}
return $arr;
}

// create a function for logout admin 
function logout_admin()
{

unset($_SESSION["adminid"]);
unset($_SESSION["admin_email"]);
session_destroy();
return true;    
}

// create a function for logout admin 
function logout_customers()
{
unset($_SESSION["customer_id"]);
unset($_SESSION["email"]);
session_destroy();
return true;    
}
?>