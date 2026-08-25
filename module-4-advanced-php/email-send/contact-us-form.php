<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>

<!-- Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.contact-section {
padding: 60px 0;
background: #f8f9fa;
}
.contact-box {
background: #fff;
padding: 30px;
border-radius: 10px;
box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}
.contact-info i {
font-size: 20px;
margin-right: 10px;
color: #0d6efd;
}
</style>
</head>
<body>
<section class="contact-section">
<div class="container">
<div class="row g-4">
<!-- Contact Form -->
<div class="col-lg-6 col-md-12">
<div class="contact-box">
<h3 class="mb-4">Send Us a Message</h3>
<form method="post" action="send.php">
<div class="row">
<div class="col-md-6 mb-3">
<input type="text" class="form-control" name="fname" placeholder="First Name" required>
</div>
<div class="col-md-6 mb-3">
<input type="text" class="form-control" name="lname" placeholder="Last Name" required>
</div>
</div>

<div class="mb-3">
<input type="email" class="form-control" name="email" placeholder="Email Address" required>
</div>

<div class="mb-3">
<input type="text" class="form-control" name="subj" placeholder="Subject">
</div>

<div class="mb-3">
<input type="text" class="form-control" name="phone" placeholder="phone">
</div>

<div class="mb-3">
<textarea class="form-control" name="msg" rows="5" placeholder="Your Message" required></textarea>
</div>

<button type="submit" name="send_contact" class="btn btn-primary w-100">Send Message</button>
</form>
</div>
</div>

<!-- Contact Info -->
<div class="col-lg-6 col-md-12">
<div class="contact-box">
<h3 class="mb-4">Contact Information</h3>

<p class="contact-info">
<strong>Address:</strong><br>
123 Business Street,<br>
Ahmedabad, Gujarat, India
</p>

<p class="contact-info">
<strong>Email:</strong><br>
info@example.com
</p>

<p class="contact-info">
<strong>Phone:</strong><br>
+91 98765 43210
</p>

<hr>

<h5>Working Hours</h5>
<p>Mon - Fri: 9:00 AM - 6:00 PM</p>
<p>Sat: 10:00 AM - 4:00 PM</p>
<p>Sun: Closed</p>
</div>
</div>

</div>
</div>
</section>

</body>
</html>