<?php 
require_once 'functions.php';
require_once 'header.php';
// create an logic to insert data into database when user click on register button
if(isset($_POST['register']))
{
    // call a function to insert data into database
    if(registerApp($_POST["name"],$_POST["email"],$_POST["password"],$_POST["confirm_password"],$_POST["gender"],$_POST["phone"]))
    {
        echo "<script>
        alert('Registration successful');
        window.location='login.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('password does not matched try again');
        window.location='register.php';
        </script>";
  }
}
  
?>
<form method="post">
<div class="form-group">
<label for="name">Name</label>
<input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
</div>

<div class="form-group">
<label for="email">Email</label>
<input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
</div>

<div class="form-group">
<label for="password">Password</label>
<input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
</div>
<div class="form-group">
<label for="confirm_password">Confirm Password</label>
<input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm your password">
</div>

<div class="form-group">
<label for="gender">Gender</label>
Male :<input type="radio" name="gender" value="male">
Female :<input type="radio" name="gender" value="female">
Other :<input type="radio" name="gender" value="other">

</div>
<div class="form-group">
<label for="phone">Phone</label>
<input type="text" name="phone" id="phone" class="form-control" placeholder="Enter your phone number">
</div>
<div class="form-group">
<button type="submit" name="register" class="btn btn-primary mt-3">Register</button>
</div>
</form>
<?php
require_once 'footer.php';
?>
