<?php
  error_reporting(1);
  include ("../database/connection.php");
  include ("php_scripts/auth.php");
  include ("function.php");
  
  include ("layouts/css.php");
  include ("layouts/header.php");
  include ("layouts/side_bar.php");

  if(updateRecentNews() == "success"){
    echo "<script> location.href='recent_news.php'; </script>";
    exit;
  }

  if(isset($_POST['update_recent_news'])){
  updateRecentNews();
  }
?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/admin/dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Update Recent News</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
           <strong>Update Recent News</strong>
        </div>
          <div class="card-body">
          
          <?php 
            $recent_news_id = $_GET['id'];
            $query = "select * from news_recent where id='$recent_news_id'";
            $run_query = mysqli_query($connection,$query);
            $row_recent_news  = mysqli_fetch_array($run_query);
          ?>

          <form method="POST" id="update_recent_news" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="name" class="form-control" placeholder="name" name="name" autofocus="autofocus" required="required" value="<?php echo $row_recent_news['name']; ?>">
                  <label for="name">Name</label>
               </div>
              </div>
              

              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="date" id="date" class="form-control" name="date" required="required" value="<?php echo $row_recent_news['date']; ?>">
                  <label for="date"></label>
                  </div>
              </div>
              </div>
              </div>
          
          <div class="form-group">
            <div class="form-row">
          <div class="col-md-12">
                <div class="form-label-group">
                  <input type="file" id="photo" class="form-control" placeholder="Photo" name="photo" required="required" value="<?php echo $row_recent_news['photo']['name']; ?>">
                  <label for="photo">Photo</label>
                  
                </div>
              </div>
            </div>
          </div>

                
         <div class="row d-flex justify-content-end">
             <div class="col-md-2">
                <a href="news.php" class="btn btn-danger btn-block"> <i class="fas fa-times-circle"></i> Cancel</a>
             </div>
            <div class="col-md-2 ">
                <button type="submit" name="update_recent_news" class="btn btn-primary btn-block"> <i class="fas fa-plus-circle    "></i> Update News</button>
            </div>
         </div>
        </form>
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