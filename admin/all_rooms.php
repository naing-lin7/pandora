<?php
error_reporting(1);
include ("../database/connection.php");
  include ("php_scripts/auth.php");
  
  include ("layouts/css.php");
  include ("layouts/header.php");
  include ("layouts/side_bar.php");
  include ("function.php");

  if(isset($_GET['action']) =='delete'){
    delRoom();
  }
?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/admin/dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Rooms</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
           <strong>All Rooms</strong>
           <a href="add_rooms.php" class="btn btn-info btn-sm float-right"> <i class="fas fa-plus-circle    "></i> Add Room</a>
        </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Room Type</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Create at</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Room Type</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Create at</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php 
                   $query         = "select * from room";
                   $get_room      = mysqli_query($connection,$query);
                   $number        = 1;
                    while($room = mysqli_fetch_array($get_room)){
                ?>
                  <tr>
                    <td><?php echo $number++; ?></td>
                    <td><?php echo $room["name"]; ?></td>
                    <td><?php 
                      $type_id = $room['room_type'];
                      $get_room_cat = "select * from room_type where id='$type_id'";
                      $go_query = mysqli_query($connection,$get_room_cat);
                      $row_type = mysqli_fetch_assoc($go_query);
                      echo $row_type['type'];
                    ?></td>
                    <td><?php if($room["status"] == 1){echo "Availiable";}else{echo "Not Availiable"; } ?></td>
                    <td><?php echo $room["price"];?> MMK</td>
                    <td><?php echo date("d-M-Y", strtotime($room["create_at"]));?></td>
                    <td class="text-center">
                      <a href="update_room.php?id=<?php echo $room['id'];?>" class="mr-2 text-info"><i class='fas fa-edit    '></i></a> 
                      <a href="room_detail.php?id=<?php echo $room['id'];?>&name=<?php echo $room['name'];?>" class="mr-2 text-secondary"><i class="fas fa-info-circle"></i></a> 
                      <a href='all_rooms.php?action=delete&id=<?php echo $room['id'];?>' onclick="return confirm('Are you sure?')"class="text-danger"><i class="fas fa-trash"></i></a></td>
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