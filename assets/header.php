 
 <header>
  <div class="navbar">
    <div class="logo"><img width="100px" src="./ongoing-img/logo.png" alt=""></div>
    <div class="hamburger" onclick="toggleMenu()">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <ul class="menu" id="menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li onclick="toggleDropdown(event)">
        <a href="#">Projects <i class="ri-arrow-down-s-line"></i></a>
        <ul class="dropdown">
          <li onclick="toggleSubDropdown(event)">
            <a href="#">Onoging Projects <i class="ri-arrow-down-s-line"></i></a>
            <ul class="dropdown-sub">
              <li><a href="ongoing.php">All Projects</a></li>
              <li><a href="amara.php">Pyramid Amara</a></li>
              <li><a href="elite.php">Pyramid Elite</a></li>
              <li><a href="gloria.php">Pyramid Gloria</a></li>
            </ul>
          </li>
          <!--<li><a href="ongoing.php">Ongoing Projects</a></li>-->
          <li><a href="completed.php">Completed Projects</a></li>
        </ul>
      </li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
</header>
<script>
  function toggleMenu() {
    document.getElementById("menu").classList.toggle("active");
  }

  function toggleDropdown(e) {
    if (window.innerWidth <= 768) {
      e.stopPropagation();
      const parent = e.currentTarget;
      parent.classList.toggle("show");
    }
  }

  function toggleSubDropdown(e) {
    if (window.innerWidth <= 768) {
      e.stopPropagation();
      const parent = e.currentTarget;
      parent.classList.toggle("show");
    }
  }

  // Close all dropdowns on outside click
  document.addEventListener("click", () => {
    if (window.innerWidth <= 768) {
      document.querySelectorAll(".menu li").forEach(li => li.classList.remove("show"));
      document.querySelectorAll(".dropdown li").forEach(li => li.classList.remove("show"));
    }
  });
</script>
 <!--<header class="header">-->
 <!--     <nav>-->
 <!--       <div class="logo">-->
 <!--         <a href="index.php"><img src="./ongoing-img/logo.png" alt="" /></a>-->
 <!--       </div>-->
 <!--       <input type="checkbox" id="menu-toggle" />-->
 <!--       <label for="menu-toggle" class="menu-icon">&#9776;</label>-->
 <!--       <ul class="menu">-->
 <!--         <li><a href="index.php">Home</a></li>-->
 <!--         <li><a href="about.php">About Us</a></li>-->
 <!--         <li>-->
 <!--           <a href="#">Ongoing Projects <i class="ri-arrow-down-s-line"></i></a>-->
 <!--           <ul>-->
 <!--                <li><a href="ongoing.php">All Projects</a></li>-->
 <!--                <li><a href="amara.php">Pyramid Amara</a></li>-->
 <!--                 <li><a href="gloria.php">Pyramid Gloria</a></li>-->
 <!--                 <li><a href="elite.php">Pyramid Elite</a></li>-->
 <!--             <li>-->
 <!--               <a href="ongoing.php">Ongoing Projects <i class="ri-arrow-down-s-line"></i></a>-->
 <!--               <ul>-->
 <!--                 <li><a href="amara.php">Pyramid Amara</a></li>-->
 <!--                 <li><a href="gloria.php">Pyramid Gloria</a></li>-->
 <!--                 <li><a href="elite.php">Pyramid Elite</a></li>-->
 <!--               </ul>-->
 <!--             </li>-->
 <!--           </ul>-->
 <!--         </li>-->
 <!--           <li><a href="completed.php">Completed Projects</a></li>-->
 <!--         <li><a href="gallery.php">Gallery</a></li>-->
 <!--         <li><a href="blog.php">Blog</a></li>-->
 <!--         <li><a href="contact.php">Contact Us</a></li>-->
 <!--       </ul>-->
 <!--     </nav>-->
 <!--   </header>-->
