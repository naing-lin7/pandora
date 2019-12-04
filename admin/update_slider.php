<?php
  error_reporting(1);
  include ("../database/connection.php");
  include ("php_scripts/auth.php");
  include ("function.php");
  
  include ("layouts/css.php");
  include ("layouts/header.php");
  include ("layouts/side_bar.php");

  if(isset($_POST['update_slider'])){
    updateSlider();
  }
?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/admin/dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Update Slider</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
           <strong>Update Slider</strong>
        </div>
          <div class="card-body">
          
          <?php 
            $slider_id        = $_GET['id'];
            $query          = "select * from slider where id='$slider_id'";
            $run_query      = mysqli_query($connection,$query);
            $row_slider     = mysqli_fetch_assoc($run_query);
          ?>

        <form method="POST" id="add_slider" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="name" class="form-control" placeholder="name" name="caption" autofocus="autofocus" required="required" value="<?php echo $row_slider['caption']; ?>">
                  <label for="name">Caption</label>
               </div>
              </div>
            </div>
          </div>
            <div class="form-group">
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-label-group">
                        <input type="file" id="photo" class="form-control" placeholder="Photo" name="photo">
                        <label for="photo">Photo</label>
                    </div>
              </div>
            </div>
            </div>
          </div>

                
         <div class="row d-flex justify-content-end mb-2 mr-2">
             <div class="col-md-2">
                <a href="all_slider.php" class="btn btn-danger btn-block"> <i class="fas fa-times-circle"></i> Cancel</a>
             </div>
            <div class="col-md-2 ">
                <button type="submit" name="update_slider" value="submit" class="btn btn-primary btn-block"> <i class="fas fa-plus-circle    "></i> Update Slider</button>
            </div>
         </div>
        </form>
          </div>
        </div>


 <?php
  include ("layouts/footer.php"); 
  include ("layouts/js.php");
 ?>