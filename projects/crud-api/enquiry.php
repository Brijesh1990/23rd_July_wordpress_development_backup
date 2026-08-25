<?php 
include_once("config.php");
include_once("navigation.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(!isset($_SESSION["rid"]))
{
header("location:index.php");   
}
if(isset($_POST["enquiry_btn"]))
{
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
date_default_timezone_set("Asia/Calcutta");    
$fullname=$_POST["fullname"];
$em=$_POST["email"];
$ph=$_POST["phone"];
$sub=$_POST["subject"];
$msg=$_POST["message"];
$add_time=date("d/m/Y H:i:s a");
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
//Server settings
$mail->SMTPDebug = true;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = '';                     //SMTP username
$mail->Password   = '';                               
//SMTP password
$mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
$mail->Port       = 587;                 //TCP port to 
//Recipients
$mail->setFrom($_POST["email"], 'Mailer');
$mail->addAddress('brijeshpandey.tops@gmail.com', 'Enquiry details');     //Add a recipient           
$mail->isHTML(true);//Set email format to HTML
$mail->Subject = 'Enquiry customers details';
$mail->Body    = "<img src='https://miro.medium.com/0*OckilgOyByn-x242.gif'>"."<br>"."<div style='width:80%; height:auto; margin:0'>
<h3>fullname is : $fullname</h3>
<h3>Email  is : $em</h3>
<h3>Phone numbers  is : $ph</h3>
<h3>Subject is : $sub</h3>
<h3>Message is : $msg</h3>
</div>";
$mail->send();
$insert="insert into tbl_enquiry(fullname,email,phone,subject,message,added_date_time) values('$fullname','$em','$ph','$sub','$msg','$add_time')";
$query=mysqli_query($con,$insert);
echo "<script>
window.location='thanksenquiry.php'
</script>";
}
catch (Exception $e) 
{
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

?>

<div class="w-1/2 mx-auto mb-8">
<h1 class="text-3xl font-bold mt-8">Enquiry With Us</h1>

<div class="space-x-4 mt-3">
<div class="grid md:grid-cols-1 gap-6 w-full shadow-lg p-5">

<form method="post">

<div class="form-group mt-2">
<label>Full Name</label><br>
<input type="text" name="fullname" placeholder="Enter your Full name" class="p-2 w-full border" required>
</div>

<div class="form-group mt-2">
<label>Email Address</label><br>
<input type="email" name="email" placeholder="Enter your email" class="p-2 w-full border" required>
</div>

<div class="form-group mt-2">
<label>Phone Number</label><br>
<input type="text" name="phone" placeholder="Enter your phone number" class="p-2 w-full border" required>
</div>

<div class="form-group mt-2">
<label>Subject</label><br>
<input type="text" name="subject" placeholder="Enter subject" class="p-2 w-full border">
</div>

<div class="form-group mt-2">
<label>Your Message</label><br>
<textarea name="message" rows="4" placeholder="Write your enquiry..." class="p-2 w-full border"></textarea>
</div>

<div class="form-group mt-2">
<input type="submit" name="enquiry_btn" value="Submit" class="p-2 bg-black text-white mt-5  cursor-pointer w-20">

<input type="reset" name="reset" value="Reset" class="p-2 bg-red-600 text-white mt-5  cursor-pointer w-20 ms-15">
</div>

</form>

</div>
</div>
</div>
<!-- add modal here -->
<?php 
include_once("adduser.php");
?>
</body>
</html>