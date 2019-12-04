<?php
  error_reporting(1);
  include ("../database/connection.php");
  include ("php_scripts/auth.php");
  include ("function.php");
  
  include ("layouts/css.php");
  include ("layouts/header.php");
  include ("layouts/side_bar.php");
  if(isset($_POST['add_slider_button'])){
	  
    addSlider();
  }
?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/admin/dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Add Slider</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
           <strong>Add Slider</strong>
        </div>
          <div class="card-body">
          
          
          
          <form method="POST" id="add_slider" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="name" class="form-control" placeholder="name" name="caption" autofocus="autofocus" required="required">
                  <label for="name">Caption</label>
                </div>
              </div>
            </div>
          </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-12">
                <div class="form-label-group">
                  <input type="file" id="photo" class="form-control" placeholder="Photo" name="photo" required="required">
                  <label for="photo">Photo</label>
                </div>
              </div>
            </div>
          </div>

         <div class="row d-flex justify-content-end">
             <div class="col-md-2">
                <a href="dashboard.php" class="btn btn-danger btn-block"> <i class="fas fa-times-circle"></i> Cancel</a>
             </div>
            <div class="col-md-2 ">
                <button type="submit" name="add_slider_button" value="submit" class="btn btn-primary btn-block"> <i class="fas fa-plus-circle    "></i> Add Slider</button>
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