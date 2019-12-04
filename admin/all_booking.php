<?php
include ("../database/connection.php");
  include ("php_scripts/auth.php");
  
  include ("layouts/css.php");
  include ("layouts/header.php");
  include ("layouts/side_bar.php");
  include ("function.php");

  if(isset($_GET['action']) =='delete'){
     delBooking();
     if(delBooking() == "success"){
      echo "<script>alert('Successfully deleted.');window.location.href='/admin/all_booking.php';</script>";
     }
 }
?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/admin/dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Booking</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
           <strong>All Booking</strong>
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
                   $query          = "select * from booking";
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