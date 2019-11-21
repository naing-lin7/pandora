<?php
  error_reporting(1);
  include ("../database/connection.php");
  include ("php_scripts/auth.php");
  include ("function.php");
  
  include ("layouts/css.php");
  include ("layouts/header.php");
  include ("layouts/side_bar.php");

  if(insertRoom() == "success"){
    echo "<script> location.href='room_type.php'; </script>";
    exit;
  }
  insertRoom();
?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/admin/dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Add Users</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
           <strong>Add Room</strong>
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
          <form method="POST" id="add_room">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="name" class="form-control" placeholder="Room Type" name="room_type" autofocus="autofocus" value="<?php if(!empty($name)){ echo $name; } ?>">
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
                <button type="submit" name="add_room" class="btn btn-primary btn-block"> <i class="fas fa-plus-circle    "></i> Add Room</button>
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