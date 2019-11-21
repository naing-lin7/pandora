<?php
  error_reporting(1);
  include ("../database/connection.php");
  include ("php_scripts/auth.php");
  include ("function.php");
  
  include ("layouts/css.php");
  include ("layouts/header.php");
  include ("layouts/side_bar.php");

  if(updateRoom() == "success"){
    echo "<script> location.href='room_type.php'; </script>";
    exit;
  }
  updateRoom();
?>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/admin/dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Update Room</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
           <strong>Update Room</strong>
        </div>
          <div class="card-body">
          <?php  
            if($create_message != Null){
              ?>
              <div class="alert alert-success" role="alert">
                <?php echo $create_message; ?>
              </div>
          <?php
            }
          ?>
           <?php
			if(isset($_GET['action'])&&$_GET['action']=='delete'){
				del_room();
			}
			if(isset($_POST['update_room']))
			
			{
				updateRoom();
			}
        ?>
          <form method="POST" id="add_room">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <?php
                    $r_id = $_GET['r_id'];
                    $query = "select * from room_type where id='$r_id'";
                    $run_query = mysqli_query($connection,$query);
                    $row_query = mysqli_fetch_array($run_query);
                  ?>
                  <input type="text" id="name" class="form-control"  name="room_type" autofocus="autofocus" value="<?php echo $row_query['type']; ?>">
                  <label for="name">Room Type</label>
                  <?php if($name_err != ""){ ?>
                    <small class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo $name_err;?> </small>
                  <?php  } ?>
                </div>
              </div>
            </div>
          </div>
         <div class="row d-flex justify-content-end">
             <div class="col-md-2">
                <a href="room_type.php" class="btn btn-danger btn-block"> <i class="fas fa-times-circle"></i> Cancel</a>
             </div>
            <div class="col-md-2 ">
            <button type="submit" name="update_room" class="btn btn-primary btn-block"><i class="fas fa-plus-circle    "></i> Update</button>
            </div>
         </div>
        </form>
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