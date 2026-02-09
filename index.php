<!DOCTYPE html>
<html lang="en">

<head>

  <?php 
  include("./assets/head.php");
  ?>
  <!-- style sheet  -->
  <link rel="stylesheet" href="./css/main.css">

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MF6DVDT5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php include("./assets/header.php") ?>

    <section>
    <div class="slider">
      <div class="content">
        <h1>15 Years of Trust, Quality & Timely Delivery in Nagpur’s Skyline.</h1>
        <!--<p>Building more than homes we're building legacies.</p>-->
      </div>
       <div class="slider">
  <div class="slide_viewer">
    <div class="slide_group">
      <div class="slide">
        <!-- <div class="slide-content">
          <h1>Pyramid Amara</h1>
          <p>From Foundations to Dreams Your Future Starts with Pyramid Group</p>
        </div> -->
         <img src="./index-img/sliderup2.png" alt="">
      </div>
      <div class="slide">
         <img src="./index-img/sliderup1.png" alt="">
      </div>
      <div class="slide">
         <img src="./index-img/sliderup3.png" alt="">
      </div>
      <!--<div class="slide">-->
      <!--   <img src="./index-img/sliderup4.png" alt="">-->
      <!--</div>-->
    </div>
  </div>
</div><!-- End // .slider -->
<div class="box-container">
        <div class="box">
          <p>We build landmark homes and commercial spaces that reflect innovation and trust.
          </p>
        </div>
      </div>
<!-- <div class="slide_buttons">
</div> -->

<!--<div class="directional_nav">-->
<!--  <div class="previous_btn" title="Previous">-->
<!--    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="35px" height="35px" viewBox="-11 -11.5 65 66">-->
<!--      <g>-->
<!--        <g>-->
<!--          <path fill="#474544" d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118-->
<!--			c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z"/>-->
<!--          <path fill="#474544" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0	c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564	c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z"/>-->
<!--        </g>-->
<!--      </g>-->
<!--    </svg>-->
<!--  </div>-->
<!--  <div class="next_btn" title="Next">-->
<!--    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="35px" height="35px" viewBox="-11 -11.5 65 66">-->
<!--      <g>-->
<!--        <g>-->
<!--          <path fill="#474544" d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5	c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288	c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z"/>-->
<!--          <path fill="#474544" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035 			L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z"/>-->
<!--        </g>-->
<!--      </g>-->
<!--    </svg>-->
<!--  </div>-->
<!--</div><!-- End // .directional_nav -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $('.slider').each(function() {
  var $this = $(this);
  var $group = $this.find('.slide_group');
  var $slides = $this.find('.slide');
  var bulletArray = [];
  var currentIndex = 0;
  var timeout;
  
  function move(newIndex) {
    var animateLeft, slideLeft;
    
    advance();
    
    if ($group.is(':animated') || currentIndex === newIndex) {
      return;
    }
    
    bulletArray[currentIndex].removeClass('active');
    bulletArray[newIndex].addClass('active');
    
    if (newIndex > currentIndex) {
      slideLeft = '100%';
      animateLeft = '-100%';
    } else {
      slideLeft = '-100%';
      animateLeft = '100%';
    }
    
    $slides.eq(newIndex).css({
      display: 'block',
      left: slideLeft
    });
    $group.animate({
      left: animateLeft
    }, function() {
      $slides.eq(currentIndex).css({
        display: 'none'
      });
      $slides.eq(newIndex).css({
        left: 0
      });
      $group.css({
        left: 0
      });
      currentIndex = newIndex;
    });
  }
  
  function advance() {
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      if (currentIndex < ($slides.length - 1)) {
        move(currentIndex + 1);
      } else {
        move(0);
      }
    }, 4000);
  }
  
  $('.next_btn').on('click', function() {
    if (currentIndex < ($slides.length - 1)) {
      move(currentIndex + 1);
    } else {
      move(0);
    }
  });
  
  $('.previous_btn').on('click', function() {
    if (currentIndex !== 0) {
      move(currentIndex - 1);
    } else {
      move(3);
    }
  });
  
  $.each($slides, function(index) {
    var $button = $('<a class="slide_btn">&bull;</a>');
    
    if (index === currentIndex) {
      $button.addClass('active');
    }
    $button.on('click', function() {
      move(index);
    }).appendTo('.slide_buttons');
    bulletArray.push($button);
  });
  
  advance();
});
</script>

    </div>
  </section>

    <div class="features" id="about">
    <div class="feature-container">
      <div class="feature-row">
        <div class="feature-card">
          <div class="feature-icon">
            <img src="./index-img/icon2.png" alt="">

          </div>
          <h5>17 Years</h5>
          <p>In The Industry</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon">
            <img src="./index-img/icon4.png" alt="">

          </div>
          <h5>30 Lakhs SQ.FT. </h5>
          <p>Delivered Till Date</p>
        </div>

      </div>
      <div class="feature-row">
        <div class="feature-card">
          <div class="feature-icon">
            <img src="./index-img/icon1.png" alt="">

          </div>
          <h5>15 projects</h5>
          <p>Delivered On Time</p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <img src="./index-img/icon5.png" alt="">

          </div>
          <h5>20 Lakhs SQ.FT. Area</h5>
          <p>Under Construction</p>
        </div>
      </div>
      <div class="feature-row">
        <div class="feature-card">
          <div class="feature-icon">
            <img src="./index-img/icon3.png" alt="">

          </div>
          <h5>3000+</h5>
          <p>Happy Customers</p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <img src="./index-img/icon6.png" alt="">

          </div>
          <h5>Best Quality</h5>
          <p>Construction</p>
        </div>
      </div>

    </div>
  </div>

    <div class="ongoingsection">
        <div class="ongoingpro-heading">
            <h1>Ongoing Projects</h1>
            <p>Explore our current and upcoming real estate projects across Nagpur
                with attractive pre-launch offers and flexible payment plans. Whether you're
                investing or purchasing a home, we ensure a transparent and hassle-free
                experience.</p>
            </div>
            <div class="ongoingpro">
                <div class="ongoingpro-container">
                    <div class="ongoingpro-card">
                    <a href="elite.php"><img src="./index-img/ongoing1.png" alt="">   </a>
                        <h4>Pyramid Elite</h4>
                        <h5>4 BHK Luxury Row House </h5>
                        <h5>Pipla Nagpur</h5>
                         <a href="elite.php"><button>View Project</button></a>
                    </div>
                 
                    <div class="ongoingpro-card">
                    <a href="amara.php">
                        <img src="./index-img/ongoing2.png" alt=""> </a>
                        <h4>Pyramid Amara</h4>
                        <h5>3 & 4 BHK Luxury Flat</h5>
                        <h5>Besa Nagpur</h5>
                         <a href="amara.php"><button>View Project</button></a>
                    </div>
                   
                    <div class="ongoingpro-card">
                    <a href="gloria.php">
                        <img src="./index-img/ongoing3.png" alt="">  </a>
                        <h4>Pyramid Gloria</h4>
                        <h5>2 & 3 BHK Perium Flat</h5>
                        <h5>Pipla Nagpur</h5>
                        <a href="gloria.php"><button>View Project</button></a>
                    </div>
                  
            </div>
        </div>
    </div>
    
    <div class="ongoingsection">
        <div class="ongoingpro-heading">
            <h1>Completed Projects with possession</h1>
        </div>
        <div class="ongoingpro">
            <div class="ongoingpro-container">
                <div class="ongoingpro-card">
                    <img src="./index-img/completed1.png" alt="">
                    <h4>Pyramid Gold Besa</h4>
                     <!--<a href="completed.php"><button>View Project</button></a>-->
                </div>
                <div class="ongoingpro-card">
                    <img src="./index-img/compeleted2.png" alt="">
                    <h4>Pyramid city-iV</h4>
                   <!--<a href="completed.php"><button>View Project</button></a>-->
                </div>
                <div class="ongoingpro-card">
                    <img src="./index-img/completed3.png" alt="">
                    <h4>Pyramid City-vI</h4>
                     <!--<a href="completed.php"><button>View Project</button></a>-->
                </div>
            </div>
        </div>
            <a href="completed.php"><button class="viewmore">View More <i class="ri-arrow-right-double-fill"></i></button></a>
    </div>

    <section id="offer">
    <div class="offer">
      <div class="offer-heading">
        <h1>Our Offerings</h1>
        <h4>Residential Projects in Nagpur</h4>
        <p>Discover your perfect home in the heart of Nagpur. Pyramid Group offers a wide range of residential
          properties tailored to meet diverse lifestyle needs and budgets.</p>
      </div>
      <div class="offer-container">
        <div class="offer-card" id="offer1">
          <div class="offer-image">
            <img src="./index-img/offericon1.png" alt="">
          </div>
          <h4>2, 3 & 4 BHK Apartments</h4>
        </div>
        <div class="offer-card" id="offer2">
          <div class="offer-image">
            <img src="./index-img/offericon2.png" alt="">
          </div>
          <h4>Affordable Housing Projects</h4>
        </div>
        <div class="offer-card" id="offer3">
          <div class="offer-image">
            <img src="./index-img/offericon3.png" alt="">
          </div>
          <h4>Luxury <br> Residences with Modern Amenities</h4>
        </div>
        <div class="offer-card" id="offer4">
          <div class="offer-image">
            <img src="./index-img/offericon4.png" alt="">
          </div>
          <h4>Row Houses & Villas</h4>
        </div>
      </div>
    </div>
  </section>

    <section id="need">
    <div class="need">
      <div class="need-row">
        <div class="need-col">
          <h1>Why <br> <span>Pyramid Group?</span></h1>
          <div class="need-card">
            <div class="need-img" id="need1">
              <img src="./index-img/needpng1.png" alt="">
            </div>
            <div class="need-content">
              <h4>15+ Years of Expertise</h4>
              <p>We’ve delivered multiple landmark projects across Nagpur, earning the trust of thousands of families
                and investors.
              </p>
              <a href="about.php"><button>Learn More</button></a>
            </div>
          </div>
          <div class="need-card">
            <div class="need-img" id="need3">
              <img src="./index-img/need3.png" alt="">
            </div>
            <div class="need-content">
              <h4>Prime Locations</h4>
              <p>Every Pyramid property is strategically located for easy access to schools, hospitals, airports, metro
                stations, and workplaces. </p>
              <a href="about.php"><button>Learn More</button></a>
            </div>
          </div>
        </div>
        <div class="need-col">
          <div class="need-card">
            <div class="need-img" id="need2">
              <img src="./index-img/need2.png" alt="">
            </div>
            <div class="need-content">
              <h4>Quality Construction</h4>
              <p>Our projects are built with the finest materials, advanced techniques, & a strong focus on safety and
                durability.
              </p>
               <a href="about.php"><button>Learn More</button></a>
            </div>
          </div>
          <div class="need-card">
            <div class="need-img" id="need4">
              <img src="./index-img/need4.png" alt="">
            </div>
            <div class="need-content">
              <h4>Timely Deliver</h4>
              <p>We are committed to timely possession, with a strong track record of delivering projects within
                promised timelines.</p>
               <a href="about.php"><button>Learn More</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 

    <!-- background  -->
    <section id="bg">
    <div class="bg">
    </div>
  </section>

     <!-- contact form  -->
<section id="enquiry">
    <div class="enquiry">
      <div class="enquiry-container">
        <div class="enquiry-heading">
          <h1>Find Your Property Today</h1>
          <p>Ready to buy your dream home or invest in commercial real estate in Nagpur? Use our advanced property
            search to filter by location, budget, & project type. <br><br>  Whether you're searching for residential flats, plots, or commercial spaces, we make it easy to discover the right property for your needs</p>
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
 <script src="./animation/main.js"></script>
 <script>
       window.onload = function () {
         modal.style.display = "flex";
  };
 </script>
</html>