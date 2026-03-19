 <footer class="pyramid-footer">
     <div class="footer-logo">
         <img src="../ongoing-img/logo.png" alt="Pyramid Logo" class="pyramid-footer__logo" />
     </div>
     <div class="pyramid-footer__container">

         <div class="pyramid-footer__column pyramid-footer__contact">
             <div class="pyramid-footer__info">
                 <p>PYRAMID TAJSHREE LLP</p>
                 <strong class="pyramid-footer__heading">Address:</strong>
                 <p>SHOP NO. 1,2,3,4 & 5, Ground Floor Pyramid City-6, <br> Besa Pipla Road Hudkeshwar, <br>Nagpur,
                     Maharashtra,India</p>
                 <!--<strong class="pyramid-footer__heading">Office Hours:</strong>-->
                 <!--<p>Monday – Monday: 10:30 AM – 7:00 PM <br>Sunday: By Appointment Only</p>-->

                 <p>Email: info@pyramidgroup.net.in</p>
             </div>
         </div>

         <div class="pyramid-footer__column pyramid-footer__links">
             <strong class="pyramid-footer__heading">Quick Links</strong>
             <ul class="pyramid-footer__list">
                 <li><a href="about.php">About Us</a></li>
                 <li><a href="completed.php">Completed Projects</a></li>
                 <li><a href="ongoing.php">Ongoing Projects</a></li>
                 <li><a href="ongoing.php">Upcoming Projects</a></li>
                 <li><a href="contact.php">Contact Us</a></li>
                 <li><a href="#">Privacy Policy</a></li>
             </ul>
         </div>

         <div class="pyramid-footer__column pyramid-footer__social">
             <strong class="pyramid-footer__heading">Follow Us On</strong>
             <div class="pyramid-footer__icons">
                 <a href="https://www.facebook.com/share/1Fio2T2QJ5/?mibextid=wwXIfr"><i
                         class="ri-facebook-fill"></i></a>
                 <a href="#"><i class="ri-linkedin-box-fill"></i></a>
                 <a href="https://www.instagram.com/pyramid_groupp_nagpur?igsh=MTF4bGxzNnNqdDQzZA=="><i
                         class="ri-instagram-fill"></i></a>
                 <a href="#"><i class="ri-youtube-fill"></i></a>
             </div>

             <div class="pyramid-footer__newsletter">
                 <strong class="pyramid-footer__heading">Newsletter Signup</strong>
                 <button class="pyramid-footer__subscribe-btn">Subscribe to Our Newsletter</button>
             </div>
         </div>

     </div>
 </footer>
 <div class="footer-bottom">
     <h4>&copy; 2025 Pyramid Group | All Rights Reserved</h4>
     <p>Designed & Managed by <a href="https://theanalogdigital.in/" target="_blank">Analog Digital Solutions Pvt.
             Ltd.</a></p>
 </div>

 <a href="https://wa.link/cskg79" class="float" target="_blank">
     <i class="fa fa-whatsapp my-float"></i>
 </a>
 <div class="sticky-quote-cta">
     <button class="open-modal-btn">Enquire Now</button>
 </div>
 <!--<div id="modal" class="modal">-->
 <!--   <div class="modal-content">-->
 <!--     <span class="close-button">&times;</span>-->
 <!--     <div class="mform-container">-->
 <!--         <div class="form-box">-->
 <!--           <form action="./assets/insert.php" method="post">-->
 <!--             <input type="text" name="name" placeholder="Name" required>-->
 <!--             <input type="email" name="email" placeholder="Email" required>-->
 <!--             <input type="text" name="mobile" maxlength="10" placeholder="Mobile Number" required>-->
 <!--             <select name="project" id="" required>-->
 <!--               <option value="">Select Project</option>-->
 <!--               <option value="Pyramid Amara">Pyramid Amara</option>-->
 <!--               <option value="Pyramid Elite">Pyramid Elite</option>-->
 <!--               <option value="Pyramid Gloria">Pyramid Gloria</option>-->
 <!--             </select>-->
 <!--             <button name="submit">Submit</button>-->
 <!--           </form>-->
 <!--         </div>-->
 <!--       </div>-->
 <!--   </div>-->
 <!-- </div>-->

 <style>
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.modal-content {
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    max-width: 500px;
    width: 90%;
    text-align: center;
    position: relative;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    background: transparent;
    border: none;
    font-size: 20px;
    cursor: pointer;
}
 </style>
 <div class="modal" id="myModalwork">
     <div class="modal-content">
         <button class="close-btn">&times;</button>
         <div class="mform-container">
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
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"
     integrity="sha512-NcZdtrT77bJr4STcmsGAESr06BYGE8woZdSdEgqnpyqac7sugNO+Tr4bGwGF3MsnEkGKhU2KL2xh6Ec+BqsaHA=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"
     integrity="sha512-P2IDYZfqSwjcSjX0BKeNhwRUH8zRPGlgcWl5n6gBLzdi4Y5/0O4zaXrtO4K9TZK6Hn1BenYpKowuCavNandERg=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="./animation/include.js"></script>
 <script>
const modal = document.getElementById("myModalwork");
const openButtons = document.querySelectorAll(".open-modal-btn");
const closeButton = document.querySelector(".close-btn");

openButtons.forEach(btn => {
    btn.addEventListener("click", () => {
        modal.style.display = "flex";
    });
});

closeButton.addEventListener("click", () => {
    modal.style.display = "none";
});

// Optional: close modal when clicking outside
window.addEventListener("click", (e) => {
    if (e.target === modal) {
        modal.style.display = "none";
    }
});
 </script>