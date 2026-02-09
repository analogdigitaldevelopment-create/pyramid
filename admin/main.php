<?php 
include("./include/config.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include("./include/head.php") ?> 
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
     <?php 
     include("./include/header.php");
     include("./include/sidebar.php");
    ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
          <div class="col-12 mb-4">
                <div class="hero bg-primary text-white">
                  <div class="hero-inner">
                    <h2>Welcome Back, <?php
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
                ?></h2>
                  </div>
                </div>
              </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Enquiry</h4>
                  </div>
                  <div class="card-body">
                  <?php 
                    $news = "SELECT * FROM enquiry";
                    $result = mysqli_query($con,$news);
                    $row=mysqli_num_rows($result);
                    echo $row;
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Contact </h4>
                  </div>
                  <div class="card-body">
                  <?php 
                    $news = "SELECT * FROM contact";
                    $result = mysqli_query($con,$news);
                    $row=mysqli_num_rows($result);
                    echo $row;
                    ?>
                  </div>
                </div>
              </div>
            </div>
                             
          </div>
        </section>
      </div>
      <?php include("./include/footer.php") ?>
    </div>
  </div>

<?php include("./include/footerhead.php") ?>
</body>
</html>