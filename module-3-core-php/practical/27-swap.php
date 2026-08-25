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
<!-- isset: set button name  values on server  
     post :This is a form method that can be send form data on server 
          1. it is secured 
          2. is is send max data on server
          3. its is also used to encrypt data and not show on url
          4. it used for send senstive data

     get  : This is a form method that can be send form data on server by default method get
          1. it is not secured 
          2. is is send min data on server
          3. its show all data information URL
          

      $_POST:This is a super global variable and it is globally stored form data and used anywhere

      $_GET[]:This is a super global variable and it is globally stored form data and used anywhere
          
-->
<?php 
if(isset($_POST["swp"]))
{
    $a=$_POST["a"];
    $b=$_POST["b"];
    // swap two numbers 
    $a=$a+$b; //30
    $b=$a-$b; //10
    $a=$a-$b; //20

    echo "<div class='alert alert-success p-2 w-25 mx-auto mt-5'>"."after swap a is :".$a."and after swap b is:".$b."
    </div>";
}
?>
<div class="container w-25 p-5 mt-5 bg-white">
<h1>Swap</h1>
<form method="post">
<div class="form-group mt-2">
<input type="text" name="a" placeholder="a values" class="form-control">
</div>

<div class="form-group mt-2">
<input type="text" name="b" placeholder="b values" class="form-control">
</div>

<div class="form-group mt-2">
<input type="submit" name="swp" placeholder="a values" class="btn btn-md btn-primary">
</div>

</form>
</div>


</body>
</html>