<?php
session_start();
include("./include/config.php");
?>
<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            
            <div class="d-sm-none d-lg-inline-block">Hi, <?php
                                if ($_SESSION['login'] && $_SESSION['login'] == true) {
                                    echo $_SESSION['email'];
                                } else{
                                  header("location:index.php");
                                }

                                ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
             
              <div class="dropdown-divider"></div>
              <?php
                                if ($_SESSION['login'] && $_SESSION['login'] == true) {
                                    echo '<form action="./include/login.php" method="post"><button class="sing-btn" name="logout" style="border:none;background:transparent;">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                  </a></button></form>';
                                } 
                ?>
             
            </div>
          </li>
        </ul>
      </nav>
      
