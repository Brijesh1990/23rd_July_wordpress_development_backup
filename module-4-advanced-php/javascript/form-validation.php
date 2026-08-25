<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />

  <link rel="stylesheet" href="css/app.css" />
  <script src="js/valid.js"></script>
</head>

<body>

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-10">

        <div class="contact-box">
          <h2 class="text-center form-title">Contact Us</h2>

          <form method="post" name="frm" action="welcome.php" onsubmit="return validation(this.value)">

            <!-- 2 Grid Row -->
            <div class="row">

              <!-- First Name -->
              <div class="col-md-6 mb-3">
                <label class="form-label">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  name="fname"
                  placeholder="Enter first name"
                  
                />
              </div>

              <!-- Last Name -->
              <div class="col-md-6 mb-3">
                <label class="form-label">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  name="lname"
                  placeholder="Enter last name"
                  
                />
              </div>

              <!-- Email -->
              <div class="col-md-6 mb-3">
                <label class="form-label">Email</label>
                <input
                  type="text"
                  class="form-control"
                  name="email"
                  placeholder="Enter email"
                 
                />
              </div>

              <!-- Phone -->
              <div class="col-md-6 mb-3">
                <label class="form-label">Phone</label>
                <input
                  type="tel"
                  class="form-control"
                  name="phone"
                  placeholder="Enter phone number"
                />
              </div>

              <!-- Subject -->
              <div class="col-12 mb-3">
                <label class="form-label">Subject</label>
                <input
                  type="text"
                  class="form-control"
                  name="subject"
                  placeholder="Enter subject"
                />
              </div>

              <!-- Message -->
              <div class="col-12 mb-4">
                <label class="form-label">Message</label>
                <textarea
                  class="form-control"
                  name="message"
                  rows="5"
                  placeholder="Write your message here..."
                ></textarea>
              </div>

              <!-- Button -->
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary px-5">
                  Send Message
                </button>
              </div>

            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>