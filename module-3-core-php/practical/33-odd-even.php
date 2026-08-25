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
// check numbers is odd or even
function display()
{
if(isset($_POST["chk"]))
{
$number=$_POST["number"];
if($number%2==0)
{  
echo "<h1 class='alert alert-success alert-md w-75 mx-auto'>Even Numbers</h1>";
}
else 
{
echo "<h1 class='alert alert-danger alert-md w-75 mx-auto'>Odd Numbers</h1>";
}
}
}
display();

?>
<div class="container w-25 p-2 mt-5 mx-auto shadow">
<form method="post">
Enter a Number : <input type="text" name="number" placeholder="Enter a Numbers " required class="form-control mt-3">
<br>
<input type="submit" name="chk" value="Submit" class="btn btn-md btn-info"> 
</form>
</div>

</body>
</html>