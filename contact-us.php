<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Over Drive Car Rental Goa | Self Drive Cars & Airport Pickup</title>
<meta name="description" content="Over Drive Car Rental Goa offers clean self-drive cars with quick response, minimum 2-day booking and 24x7 airport pickup & drop service.
">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include('include/header.php');?>

<div class="bg-dark text-white py-5 text-center" style="background: url('https://images.pexels.com/photos/13641650/pexels-photo-13641650.jpeg') center/cover;">
    <h1 class="display-4 fw-bold">CONTACT US</h1>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-7">
            <h3 class="fw-bold mb-4">Send Us a Message</h3>
           <form id="whatsappForm">
    <div class="mb-3">
        <input type="text" id="fullName" class="form-control" placeholder="Full Name" required>
    </div>
    <div class="mb-3">
        <input type="email" id="emailId" class="form-control" placeholder="Email Address" required>
    </div>
    <div class="mb-3">
        <input type="text" id="phoneNumber" class="form-control" placeholder="Phone Number" required>
    </div>
    <div class="mb-3">
        <textarea id="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
    </div>
    <button type="submit" class="btn btn-warning w-100">Send Message</button>
</form>
        </div>
        <div class="col-md-5 ps-md-5">
            <h3 class="fw-bold mb-4">Contact Details</h3>
            <p><i class="fas fa-map-marker-alt text-warning"></i> House No.1411, Bardez, S.O 13, Aradi, Candolim, Goa 403515
</p>
            <p><i class="fas fa-phone text-warning"></i> +91 070666 61006</p>
            <p><i class="fas fa-envelope text-warning"></i> overdrivecarrentalgoa@gmail.com</p>
            <div class="mt-4">
                <iframe 
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.353381665646!2d73.9056345!3d18.5581143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c1d9d3706fd7%3A0xf362b5b103f41bdc!2sOverdrive%20Car%20Rental!5e0!3m2!1sen!2sin!4v1706025184234!5m2!1sen!2sin" 
  width="100%" 
  height="250" 
  style="border:0;" 
  allowfullscreen="" 
  loading="lazy" 
  referrerpolicy="no-referrer-when-downgrade">
</iframe>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php');?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.getElementById('whatsappForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevents the page from reloading

    // 1. Capture the values from the form
    const name = document.getElementById('fullName').value;
    const email = document.getElementById('emailId').value;
    const phone = document.getElementById('phoneNumber').value;
    const msg = document.getElementById('message').value;

    // 2. Set the target WhatsApp number (include country code, no spaces)
    const whatsappNumber = "917066661006"; 

    // 3. Format the message text
    const text = "New Inquiry Details:%0A" + 
                 "*Name:* " + encodeURIComponent(name) + "%0A" +
                 "*Email:* " + encodeURIComponent(email) + "%0A" +
                 "*Phone:* " + encodeURIComponent(phone) + "%0A" +
                 "*Message:* " + encodeURIComponent(msg);

    // 4. Construct the URL and open it
    const url = `https://wa.me/${whatsappNumber}?text=${text}`;
    window.open(url, '_blank').focus();
});

</script>
</body>
</html>