<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' media='screen' href='main.css'>
<script src='main.js'></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head> 
<body class="bg-primary">
<?php 
if(isset($_POST["login"]))
{
    $email=$_POST["email"];
    $pass=$_POST["password"];
    if($email==='admin@gmail.com' && $pass==='123')
    {    
    header("location:welcome.php");
    }
    else 
    {
    echo "<h1 class='alert alert-danger p-2 text-center'>Your email and password are incorrect</h1>";
    header("refresh:4,login_auth.php");
    }
}
?>
<div class="container w-25 p-5 mt-5 bg-white">

<form method="post">
<div class="form-group mt-2">
<input type="text" name="email" placeholder="Enter Email *" class="form-control">
</div>

<div class="form-group mt-2">
<input type="password" name="password" placeholder="Enter Password *" class="form-control">
</div>

<div class="form-group mt-2">
<input type="submit" name="login" value="Login"  class="btn btn-md btn-primary">
</div>

</form>
</div>
</body>
</html>