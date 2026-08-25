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
$year=$_POST["year"];
if($year%4==0)
{  
echo "<h5 class='alert alert-success alert-md w-25 mx-auto text-center'>This is a Leap year</h5>";
}
else 
{
echo "<h5 class='alert alert-danger alert-md w-25 mx-auto text-center'>This is a Not Leap year</h5>";
}
}
}
display();

?>
<div class="container w-25 p-2 mt-5 mx-auto shadow">
<form method="post">
Enter a Years : <input type="text" name="year" placeholder="Enter a Years " required class="form-control mt-3">
<br>
<input type="submit" name="chk" value="Submit" class="btn btn-md btn-info"> 
</form>
</div>

</body>
</html>