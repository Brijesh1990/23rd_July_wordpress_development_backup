<?php 
include("header.php");
if(isset($_POST["login_btn"]))
    {
        $email=$_POST["email"];
        $password=$_POST["password"];
        if($email=='govind@gmail.com' && $password=='g$$123')
            {
               //set session 
               $_SESSION["email"]=$_POST["email"];
               $_SESSION["date"]=date("d/m/Y");

               echo "<h2>you are Logged in successfully</h2>";
               header("refresh:3,profile.php");
            }
            else 
                {
               echo "<h2 align='center'>your email and password are incorrect try again</h2>";
               header("refresh:3,index.php");
                }
    }

?>

<!-- Background Floating Logos (Demo Text) -->
<div class="inset-0 opacity-10 text-4xl font-bold text-gray-700 pointer-events-none select-none">
<span class="absolute top-10 left-10 rotate-12">Google</span>
<span class="absolute bottom-20 left-20 -rotate-12">Amazon</span>
<span class="absolute top-32 right-20 rotate-6">Infosys</span>
<span class="absolute bottom-32 right-10 -rotate-6">TCS</span>
<span class="absolute top-1/2 left-1/3 rotate-12">Deloitte</span>
</div>

<!-- Login Card -->
<div class="w-full mx-auto mt-5  max-w-md  bg-white/90 backdrop-blur-md shadow-2xl rounded-2xl border border-blue-200 p-8 md:p-10 z-10">
<!-- Logo / Title -->
<div class="text-center mb-8">
<h1 class="text-2xl md:text-3xl font-bold text-blue-600 tracking-wide">
TOPS
</h1>
<h2 class="text-lg md:text-xl font-semibold text-gray-700 mt-2">
Career Center Login
</h2>
</div>

<!-- Form -->
<form method="post" class="space-y-6">

<!-- Mobile Number -->
<div>
<label class="block text-sm font-medium text-gray-600 mb-2">
Mobile Number
</label>
<input 
type="email" 
placeholder="Enter email" name="email"
class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
/>
</div>

<!-- Password -->
<div>
<label class="block text-sm font-medium text-gray-600 mb-2">
Password
</label>
<input 
type="password"  name="password"
placeholder="Enter your password"
class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
/>
</div>

<!-- Forgot Password -->
<div class="text-right">
<a href="#" class="text-sm text-blue-600 hover:underline">
Forgot Password?
</a>
</div>

<!-- Login Button -->
<button 
type="submit" name="login_btn"
class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-semibold py-3 rounded-lg shadow-md hover:from-blue-600 hover:to-indigo-700 transition duration-300"
>
Login
</button>
</form>

</div>

</body>
</html>