<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include("./assets/head.php") ?>
    <!-- style sheet  -->
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/ongoing.css" />
  </head>

  <body>
          <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MF6DVDT5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php include("./assets/header.php") ?>



    <div class="ongoing-banner">
      <div class="ongoing-container">
        <div class="ongoing-heading">
          <h1>Ongoing Projects</h1>
          <h4>Pyramid Group – Premium Residential Projects in Nagpur</h4>
        </div>
        <div class="ongoing-img">
          <img src="./amara-img/amarabanner.png" alt="" />
        </div>
      </div>
    </div>

 
    <div class="ongoing-display">
      <div class="project-card">
        <div class="project-heading">
          <h1>Pyramid Amara – Besa, Nagpur</h1>
          <h4>(Luxurious Residential Project)</h4>
          <p>
            Pyramid Amara is a premium residential development located in the
            upscale neighborhood of Besa, Nagpur. Designed for those who seek a
            blend of elegance and comfort, Amara offers thoughtfully planned 2 &
            3 BHK residences with contemporary interiors and lifestyle
            amenities. From serene surroundings to excellent connectivity, every
            detail at Amara reflects luxury living at its finest. <br />
            <span
              >Experience elevated living in a space crafted for comfort,
              convenience, and class.</span
            >
          </p>
        </div>
        <div class="project-img">
          <img src="./ongoing-img/ongoingproject1.png" alt="" />
        </div>
        <div class="project-btn">
          <a href="./amara.php">   <button class="active">View Project</button></a>
          <button class="open-modal-btn download">Download Brochure</button>
        </div>
      </div>
      <div class="project-card">
        <div class="project-heading">
          <h1>Pyramid Gloria – Besa, Nagpur</h1>
          <!-- <h4>(Luxurious Residential Project)</h4> -->
          <p>
            A landmark residential township featuring spacious 2 & 3 BHK homes
            in a gated community. Located on the rapidly developing Besa,
            Pyramid Gloria offers top-notch amenities like landscaped gardens,
            children’s play areas, clubhouse, and 24x7 security. Ideal for
            families looking for peace, space, and connectivity. <br />
            <span
              >Live the lifestyle you deserve — in a space designed for comfort,
              safety, and future growth.</span
            >
          </p>
        </div>
        <div class="project-img">
          <img src="./ongoing-img/ongoingproject2.jpg" alt="" />
        </div>
        <div class="project-btn">
       <a href="./gloria.php">   <button class="active">View Project</button></a> 
          <button class="open-modal-btn download">Download Brochure</button>
        </div>
      </div>
      <div class="project-card">
        <div class="project-heading">
          <h1>Pyramid Elite – Besa, Nagpur </h1>
          <h4>(Luxurious Row Houses – Launching Soon)</h4>
          <p>
            Pyramid Elite brings you an exclusive collection of luxurious row
            houses in the prime locality of Besa, Nagpur. Thoughtfully designed
            for modern families, these spacious homes offer privacy, premium
            specifications, landscaped gardens, and private terraces. Located
            close to top schools, malls, and healthcare hubs, Pyramid Elite is a
            perfect blend of comfort, elegance, and convenience in a gated
            community setting <br />
            <span
              >Discover refined living in your own independent space — where
              every detail speaks of style & sophistication</span
            >
          </p>
        </div>
        <div class="project-img">
          <img src="./ongoing-img/ongoingproject3.jpg" alt="" />
        </div>
        <div class="project-btn">
         <a href="./elite.php">   <button class="active">View Project</button></a> 
          <button class="open-modal-btn download">Download Brochure</button>
        </div>
      </div>
    </div>

    <div class="choose">
      <div class="choose-container">
        <div class="choose-img">
          <img src="./ongoing-img/choose.png" alt="" />
        </div>
        <div class="choose-content">
          <h1>Why Choose Our Ongoing Projects?</h1>
          <ul>
            <li>RERA-Approved Projects with Clear Titles</li>
            <li>Prime Locations in Fast-Developing Areas of Nagpur</li>
            <li>Premium Construction Quality with Timely Delivery</li>
            <li>RHigh Appreciation Potential for Investors</li>
            <li>Thoughtful Amenities for Modern Urban Life</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="dream">
      <div class="dream-row">
        <div class="dream-content-container">
          <div class="dream-content">
            <!--<img src="./ongoing-img/logo.png" alt="" />-->
            <h1>Book Your <br> Dream Home Today</h1>
            <p>
              Whether you're a first-time buyer, a growing family, or a smart
              investor, our ongoing real estate projects in Nagpur are designed
              to meet your needs and exceed your expectations.Pyramid Group –
              Your Partner in Building a Better Tomorrow.
            </p>
          </div>
        </div>

        <div class="dream-img">
          <img src="./ongoing-img/dream.png" alt="" />
        </div>
      </div>
    </div>
      <section id="enquiry">
    <div class="enquiry">
      <div class="enquiry-container">
        <div class="enquiry-heading">
          <h1>Find Your Property Today</h1>
          <p>Ready to buy your dream home or invest in commercial real estate in Nagpur? Use our advanced property
            search to filter by location, budget, & project type.</p>
           <button class="open-modal-btn">Enquire Now</button>
        </div>
        <div class="form-container">
          <div class="form-box">
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
              <button name="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php include("./assets/footer.php") ?>
  </body>
   <script src="./animation/ongoing.js"></script>
</html>
