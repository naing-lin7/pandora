<?php
  include ("../database/connection.php");
  include ("php_scripts/auth.php");
 
  include ("layouts/css.php");
  include ("layouts/header.php");
  include ("layouts/side_bar.php");
  include ("function.php");
  $room_id  = $_GET['id'];
  $query    = "select * from room where id='$room_id'";
  $go_query = mysqli_query($connection,$query);
  $room = mysqli_fetch_assoc($go_query);
?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/admin/dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active"><?php echo $_GET['name']; ?></li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
           <strong><?php echo $_GET['name']; ?></strong>
           <a href='all_rooms.php?action=delete&id=<?php echo $room['id'];?>' onclick="return confirm('Are you sure?')"class="btn btn-danger btn-sm float-right ml-1"><i class="fas fa-trash"></i> Delete Room</a></td>
           <a href="update_room.php?id=<?php echo $room['id'];?>" class="btn btn-secondary btn-sm float-right ml-1"> <i class="fas fa-edit    "></i> Edit Room</a>
           <a href="add_rooms.php" class="btn btn-info btn-sm float-right"> <i class="fas fa-plus-circle    "></i> Add Room</a>
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
                    <th>Room Type</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Create at</th>
                  </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td><?php  echo $room['name']; ?></td>
                        <td><?php 
                            $type_id = $room['room_type'];
                            $get_room_cat = "select * from room_type where id='$type_id'";
                            $go_query = mysqli_query($connection,$get_room_cat);
                            $row_type = mysqli_fetch_assoc($go_query);
                            echo $row_type['type'];
                            ?>
                        </td>
                        <td><?php if($room["status"] == 1){echo "Availiable";}else{echo "Not Availiable"; } ?></td>
                        <td><?php echo $room["price"];?> MMK</td>
                        <td><?php echo date("d-M-Y", strtotime($room["create_at"]));?></td>
                    </tr>
                </tbody>
          </table>
          <br>
          <?php echo $room['room_detail'];?>

          <hr>
          <?php echo $room['facilities'];?>
          </div>
           <hr>
           <div class="row p-2">
            <div class="col-md-12">
            <h4>Room Gallery</h4>
            </div>
           <?php $gallery = $room['gallery'];
           foreach(explode(',',$gallery) as $name){
               ?>
                  <div class="col-md-3 mb-4">
                    <img src="<?php echo 'room_gallery/'.$name;?>" alt="" width="100%" class="room-image">  
                  </div>
               <?php
           }
           ?>
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