<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>odd | even</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php 
// leap years
function display()
{
if(isset($_POST["chk"]))
{
$age=$_POST["age"];
if($age>=18)
{  
echo "<h5 class='alert alert-success alert-md w-25 mx-auto text-center'>You are adult</h5>";
header("location:welcome.php");
}
else 
{
echo "<h5 class='alert alert-danger alert-md w-25 mx-auto text-center'>You are child</h5>";
// message is not pass if condition is true or false 
header("refresh:3,36-age-check-via-date.php");
}
}
}
display();

?>
<div class="container w-25 p-2 mt-5 mx-auto shadow">
<form method="post">
Enter your age : <input type="date" name="age" placeholder="Enter a age" required class="form-control mt-3">
<br>
<input type="submit" name="chk" value="Submit" class="btn btn-md btn-info"> 
</form>
</div>

</body>
</html>