<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Create an instance; passing `true` enables exceptions
if(isset($_POST["send_contact"]))
{    
require_once("PHPMailer.php");
require_once("Exception.php");
require_once("SMTP.php");    
$mail = new PHPMailer(true);
try {
//Server settings
$fnm=$_POST["fname"];
$lnm=$_POST["lname"];
$email=$_POST["email"];
$subj=$_POST["subj"];
$phone=$_POST["phone"];
$msg=$_POST["msg"];

$mail->SMTPDebug = 1;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'brijeshdeveloper36@gmail.com';                     //SMTP username
$mail->Password   = 'your email website password here';                               //SMTP password
$mail->SMTPSecure = 'TLS';            //Enable implicit TLS encryption
$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail->setFrom($_POST["email"], 'contact us form');
$mail->addAddress('brijeshdeveloper36@gmail.com', 'Joe User');     //Add a 
$mail->addReplyTo($email, $fnm.' '.$lnm);
//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'contact us form details';

// $mail->Body    = "<h2>FirstName is :".$fnm."<br>"."LastName is :".$lnm."</h2>"."<br>"."<h2>Email is :". $email."</h2>"."<br>"."<h2>Subject is :". $subj."</h2>"."<br>"."<h2>Phone is :". $phone."</h2>"."<br>"."<h2>Message is :". $msg."</h2>"."<br>";
$mail->Body = '
<h2 style="color:#333;">New Contact Form Submission</h2>

<table style="width:100%; border-collapse:collapse; font-family:Arial, sans-serif;">
<tr>
<td style="padding:8px; font-weight:bold;">First Name:</td>
<td style="padding:8px;">'.$fnm.'</td>
</tr>
<tr>
<td style="padding:8px; font-weight:bold;">Last Name:</td>
<td style="padding:8px;">'.$lnm.'</td>
</tr>
<tr>
<td style="padding:8px; font-weight:bold;">Email:</td>
<td style="padding:8px;">'.$email.'</td>
</tr>
<tr>
<td style="padding:8px; font-weight:bold;">Phone:</td>
<td style="padding:8px;">'.$phone.'</td>
</tr>
<tr>
<td style="padding:8px; font-weight:bold;">Subject:</td>
<td style="padding:8px;">'.$subj.'</td>
</tr>
<tr>
<td style="padding:8px; font-weight:bold; vertical-align:top;">Message:</td>
<td style="padding:8px;">'.nl2br($msg).'</td>
</tr>
</table>

<p style="margin-top:20px; font-size:12px; color:#777;">
This email was generated automatically from your website contact form.
</p>
';


// sender recieved a thanks messages 

$mail->send();
// database insert query here 
echo "<script>
alert('Thanks for contact us Our one of Admin will contact with you Soon')
window.location='contact-us-form.php';
</script>";

if($mail->send()) {
$mail->clearAddresses(); // Remove your admin email
$mail->addAddress($_POST['email'], $_POST['fname']); // Send to the user's email

$mail->Subject = "Thank you for contacting us!";
$mail->isHTML(true);
$mail->Body    = "<h1>Hi {$_POST['fname']},</h1><p>We received your message and will respond soon!</p>";

$mail->send();  
}

} catch (Exception $e) {

echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}
}