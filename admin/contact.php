<!DOCTYPE html>
<html lang="en">
<head>
 <?php include("./include/head.php") ?>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <?php 
      include("./include/header.php");
      include("./include/sidebar.php")
      ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>DataTables</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Contact Section</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">DataTables</h2>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Basic DataTables</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile No.</th>
                            <th>Project</th>
                            <th>Message</th>
                          </tr>
                        </thead>
                        <tbody>  
                          <?php
                                                      include("./include/config.php");
                                                      $selectquery = 'SELECT * FROM `contact`';
                              
                                                      $query = mysqli_query($con, $selectquery);
                                                      $i = 1;
                                                      while ($result = mysqli_fetch_array($query)) {
                                       
                          ?>                               
                          <tr>
                            <td>
                              <?php echo $i++ ?>
                            </td>
                            <td><?php echo $result['name'] ?></td>
                            <td><?php echo $result['email'] ?></td>
                            <td><?php echo $result['mobile'] ?></td>
                            <td><?php echo $result['project'] ?></td>
                            <td><?php echo $result['message'] ?></td>
                            <!-- <td><a href="#" class="btn btn-secondary">Detail</a></td> -->
                          </tr>
                        
                          <?php 
                           }
                          ?>
                        </tbody>
                      </table>
                    </div>
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

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="assets/modules/datatables/datatables.min.js"></script>
  <script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/modules-datatables.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>