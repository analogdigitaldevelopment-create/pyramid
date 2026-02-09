<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("./assets/head.php") ?>
    <!-- style sheet  -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/contact.css">

</head>

<body>
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MF6DVDT5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
   
  <?php include("./assets/header.php") ?>

    <section>
        <div class="contact-banner">
            <div class="contactbanner-container">
                <div class="contactbanner-heading">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="description">
        <div class="description-container">
                    <h1>We’re Here to Help You Find Your Perfect Space</h1>
        <p>Whether you're looking for your dream home, a high-value investment, or simply want to know more about our projects — we're just a message away. At Pyramid Group, we believe in transparent communication and quick support to ensure your property journey is seamless.</p>
        </div>
    </div>

   

    <div class="contact-form">
        <div class="contact-container">
            <div class="map">
                <iframe width="450" height="600" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.7455182095764!2d79.10431277471586!3d21.08282388592056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4bf8dba66c283%3A0x31d466b845d9cd3b!2sPyramid%20City%206!5e0!3m2!1sen!2sin!4v1749200380343!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="form-layout">
                <div class="form-heading">
                    <h1>Get in Touch</h1>
                    <p>Have questions about our ongoing or upcoming projects? Fill out the form below and our sales team will contact you shortly.</p>
                    <h5>Contact Form</h5>
                </div>
               <form action="./assets/insert.php" method="post">
              <input type="text" name="name" placeholder="Name" required>
              <input type="email" name="email" placeholder="Email" required>
              <input type="text" name="mobile" maxlength="10" placeholder="Mobile Number" required>
              <select name="project" id="" required>
                <option value="">Select Project</option>
                <option value="Pyramid Amara">Pyramid Amara</option>
                <option value="Pyramid Elite">Pyramid Elite</option>
                <option value="Pyramid Gloria">Pyramid Gloria</option>
              </select>
                    <textarea name="message" id="" cols="30" rows="10"></textarea>
              <button name="contact">Submit Enquiry</button>
            </form>
            </div>
        </div>
    </div>
    
     <div class="office">
        <div class="office-heading">
            <h1>Our Head Office</h1>
            <p>Pyramid Group</p>
        </div>
        <div class="office-info">
            <div class="info-row">
<div class="address">
                <h4>Pyramid City-6, Besa-Pipla Road
Besa, Nagpur, Maharashtra – 440037</h4>
            </div>
            <div class="phone">
                <h4>+91 998 226 6586</h4>
            </div>
            </div>
            <div class="info-row">
 <div class="time">
                <h4>Mon – Mon: 10:30 AM – 7:00 PM
<br>Sun: By Appointment Only</h4>
            </div>
            <div class="mail">
                <h4>info@pyramidgroupnagpur.comn</h4>
            </div>
            </div>
           
        </div>
    </div>

 

<?php include("./assets/footer.php") ?>
</body>
 <script src="./animation/contact.js"></script>

</html>