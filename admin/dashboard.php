<?php
  include ("../database/connection.php");
  include ("php_scripts/auth.php");
  
  include ("layouts/css.php");
  include ("layouts/header.php");
  include ("layouts/side_bar.php");
?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/admin/dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-users"></i>
                </div>
                <div class="mr-5">All Users</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="users.php">
                <span class="float-left">View users</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">All Room Type</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="room_type.php">
                <span class="float-left">View room type</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                <i class="far fa-newspaper"></i>
                </div>
                <div class="mr-5">News</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="news.php">
                <span class="float-left">View News</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                <i class="fas fa-address-book"></i>
                </div>
                <div class="mr-5">All Booking</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="all_booking.php">
                <span class="float-left">View Booking</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-12">
            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header">
              <strong>Daily Booking</strong>
            </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Day</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Day</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    <?php 
                      $query          = "select * from booking where DATE(checkin)=DATE(NOW())";
                      $get_booking      = mysqli_query($connection,$query);
                      $number = 1;
                        while($booking = mysqli_fetch_array($get_booking)){
                    ?>
                      <tr>
                        <td><?php echo $number++; ?></td>
                        <td><?php echo $booking['name']; ?></td>
                        <td><?php echo $booking["email"]; ?></td>
                        <td><?php echo $booking["phone"];?></td>
                        <td><?php echo date("d-M-Y", strtotime($booking["checkin"]));?></td>
                        <td><?php echo date("d-M-Y", strtotime($booking["checkout"]));?></td>
                        <td><?php echo $booking["day"];?></td>
                        <td class="text-center">
                            <a href="booking_detail.php?booking_id=<?php echo $booking['id'];?>&url=<?php echo urlencode($_SERVER['REQUEST_URI']);?>" class="text-info mr-2"><i class="fas fa-info-circle"></i></a>
                            <a href='all_booking.php?action=delete&id=<?php echo $booking['id'];?>' onclick="return confirm('Are you sure?')" class="text-danger"><i class="fas fa-trash"></i></a></td>
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
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>

  <!-- Bootstrap core JavaScript-->
 <?php
  include ("layouts/footer.php"); 
  include ("layouts/js.php");
 ?>