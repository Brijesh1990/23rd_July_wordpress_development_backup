<?php 
include_once("config.php");
// mailer 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
try {
//forget password  here 
if(isset($_POST["frg_password"]))
{
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$email=$_POST["email"];
$select="select password from tbl_register where email='$email'";
$query=mysqli_query($con,$select);
$fetch=mysqli_fetch_array($query);
$num_rows=mysqli_num_rows($query);    
//Server settings
$mail->SMTPDebug = false;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = '';                     //SMTP username
$mail->Password   = '';                               //SMTP password
$mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
//Recipients
$mail->setFrom($_POST["email"], 'Mailer');
$mail->addAddress($_POST["email"], 'received');     //Add a recipient
//Content
$pass=base64_decode($fetch["password"]);
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Get forget Password on email';
$mail->Body    = 'Your password is :</b>'.$pass;
$mail->send();
if($num_rows==1)
{
echo "<script>
alert('your password successfully send on your email checked email for Login')
window.location='index.php';
</script>";
}
else 
{
echo "<script>
alert('your email is not registered try again')
window.location='forgetpassword.php';
</script>";   
}
}
}
catch (Exception $e){
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
<script src="https://cdn.tailwindcss.com"></script>

<style>
/* simple floating animation */
@keyframes float {
0% { transform: translateY(0px); }
50% { transform: translateY(-10px); }
100% { transform: translateY(0px); }
}

.animate-float{
animation: float 4s ease-in-out infinite;
}
</style>

</head>

<body class="bg-slate-100 min-h-screen flex items-center justify-center p-6">

<div class="max-w-5xl w-full bg-white shadow-xl rounded-xl overflow-hidden grid md:grid-cols-2">

<!-- Left Grid -->
<div class="bg-gradient-to-br from-indigo-600 to-blue-500 text-white p-10 flex flex-col justify-center items-center">

<h1 class="text-4xl font-bold mb-4 animate-float">
Welcome Back
</h1>

<p class="text-center opacity-90 mb-6">
Manage users, roles and system settings from your admin dashboard.
</p>

<div class="w-40 h-40 bg-white/20 rounded-full flex items-center justify-center animate-float">
<svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" fill="none" viewBox="0 0 24 24" stroke="white">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M5.121 17.804A8 8 0 1118.364 4.56 8 8 0 015.12 17.804z"/>
</svg>
</div>
</div>
<!-- Right Grid (Login Form) -->
<div class="p-10 flex flex-col justify-center">
<h2 class="text-2xl font-bold text-gray-700 mb-6">
Forget your Password ?
</h2>
<form method="post" class="space-y-5">
<div>
<label class="block text-sm text-gray-600 mb-1">
Enter Email
</label>
<input type="email" name="email"
class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 outline-none"
placeholder="admin@email.com">
</div>
<div class="flex items-center justify-between text-sm">
</div>
<button type="submit" name="frg_password"
class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">
Submit
</button>
</form>
</div>
</div>
</body>
</html>
