<?php 
// connection are required in this file to perform database operations
require_once 'config.php';
// create a function to insert data into database
function registerApp($name,$email,$password,$cpassword,$gender,$phone)
{
global $conn;
// check password and confirmed password are matched or not
if($password==$cpassword)
{
$insert="insert into tbl_register(name,email,password,gender,phone) values('$name','$email','$password','$gender','$phone')";
$query=mysqli_query($conn,$insert);    
return true;
}
else
{
return false;
}
}

//create a login function to check email and password are correct or not
function loginApp($email,$password)
{
global $conn;
// create a select email and password query
$select="select * from tbl_register where email='$email' and password='$password'";
$query=mysqli_query($conn,$select);
$fetch=mysqli_fetch_array($query);
$num_rows=mysqli_num_rows($query);
if($num_rows>0)
{
$_SESSION["r_id"]=$fetch["rid"];
$_SESSION["name"]=$fetch["name"];
$_SESSION["email"]=$fetch["email"];    
return true;
}
else 
{
return false;
}
}

// create a function to display profile loggedIn users
function getProfile($rid)
{
 global $conn;   
 $rid=$_SESSION["r_id"];   
 $select="select * from tbl_register where rid='$rid'";
 $query=mysqli_query($conn,$select);
 $fetch=mysqli_fetch_array($query);
 return $fetch;
}
// create a function delete users data 
function delProfile($rid)
{
 global $conn;
 $rid=$_SESSION["r_id"]; 
 $delete="delete from tbl_register where rid='$rid'";
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
// create a function to update users data
function updateProfile($rid,$name,$email,$gender,$phone)
{
   global $conn;
   $rid=$_SESSION["r_id"];
   $upd="update tbl_register set name='$name',email='$email',gender='$gender',phone='$phone' where rid='$rid'";
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
// create a function for logout 
function logoutUsers()
{
    unset($_SESSION["r_id"]);
    unset($_SESSION["name"]);
    unset($_SESSION["email"]);
    session_destroy();
    return true;
}


?>