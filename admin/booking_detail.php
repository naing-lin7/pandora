<?php
  include ("../database/connection.php");
  include ("php_scripts/auth.php");
 
  include ("layouts/css.php");
  include ("layouts/header.php");
  include ("layouts/side_bar.php");
  include ("function.php");
  $booking_id  = $_GET['booking_id'];
  $query       = "select * from booking where id='$booking_id'";
  $go_query    = mysqli_query($connection,$query);
  $booking        = mysqli_fetch_assoc($go_query);
  $user_id  = $booking['user_id'];
  $get_user = "select * from users where id='$user_id'";
  $go_query = mysqli_query($connection,$get_user);
  $row_user = mysqli_fetch_assoc($go_query);
  $room_id  = $booking['room_id'];
  $get_room = "select * from room where id='$room_id'";
  $get_rooms = mysqli_query($connection,$get_room);
  $room = mysqli_fetch_assoc($get_rooms);
?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/admin/dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Booking Detail</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
           <strong>Booking Detail</strong>
           <a href='all_booking.php?action=delete&id=<?php echo $booking['id'];?>' class="btn btn-sm btn-danger float-right" onclick="return confirm('Are you sure?')"class="text-danger"><i class="fas fa-trash"></i> Delete</a>
           <?php 
              if(isset($_GET['url'])){
            ?>
              <a href="<?php echo urldecode($_GET['url']); ?>" class="btn btn-success btn-sm float-right mr-2"> <i class="fas fa-arrow-left    "></i> Back</a>
            <?php
              }
           ?>
        </div>
          <div class="card-body">
          <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Total Price</th>
                    <th>Booking Date</th>
                    <th>Room</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $row_user['user_name']; ?></td>
                        <td><?php echo $row_user["email"]; ?></td>
                        <td><?php echo $row_user["phone_number"];?></td>
                        <td><?php echo date("d-M-Y", strtotime($booking["checkin"]));?></td>
                        <td><?php echo date("d-M-Y", strtotime($booking["checkout"]));?></td>
                        <td><?php echo number_format($booking["total_price"]);?> MMK </td>
                        <td><?php echo date("d-M-Y", strtotime($booking["create_at"]));?></td>
                        <td><a href="room_detail.php?id=<?php echo $booking['room_id'];?>&name=<?php echo $room['name'];?>&url=<?php echo urlencode($_SERVER['REQUEST_URI']);?>" class="btn btn-sm btn-success"><i class="fas fa-eye    "></i> View Room</a></td>
                    </tr>
                </tbody>
          </table>
          <br>
          <div class="card">
            <div class="card-header">
                Message
            </div>
            <div class="card-body">
               <p><?php echo $booking['message']; ?></p>
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