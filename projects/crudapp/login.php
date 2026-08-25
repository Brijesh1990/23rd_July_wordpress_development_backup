<?php 
require_once 'functions.php';
require_once 'header.php';
// create an logic to login as users
if(isset($_POST['login']))
{
 $email=$_POST["email"];
 $password=$_POST["password"];
 if(loginApp($email,$password))
 {
  echo "<div class='alert alert-success'>
        <span class='text-dark text-center fs-5'>You are Logged In successfully!</span>
        </div>";
    header('refresh:2,dashboard.php');    
 }  
 else 
 {

  echo "<div class='alert alert-danger'>
        <span class='text-white text-center fs-5'>Your email and password are Incorrect try again!</span>
        </div>";
    header('refresh:2,login.php');
 } 
   
}
  
?>
<form method="post">
<div class="form-group">
<label for="email">Email</label>
<input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
</div>

<div class="form-group">
<label for="password">Password</label>
<input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
</div>

<div class="form-group">
<button type="submit" name="login" class="btn btn-primary mt-3">Login</button>
</div>
</form>
<?php
require_once 'footer.php';
?>
