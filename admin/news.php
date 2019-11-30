<?php
include ("../database/connection.php");
  include ("php_scripts/auth.php");
  
  include ("layouts/css.php");
  include ("layouts/header.php");
  include ("layouts/side_bar.php");
  include ("function.php");

  if(isset($_GET['action']) =='delete'){
    delNews();
  }
?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/admin/dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All News</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
           <strong>All News</strong>
           <a href="add_news.php" class="btn btn-info btn-sm float-right"> <i class="fas fa-plus-circle    "></i> Add News</a>
        </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>About</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>About</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <body>
                <?php 
                   $query          = "select * from news_table";
                   $get_news       = mysqli_query($connection,$query);
                    while($news = mysqli_fetch_array($get_news)){
						$news_photo=$news["photo"];
                ?>
                  <tr>
                  	<td><?php echo $news["name"]; ?></td>
                    <td><?php echo $news["date"]; ?></td>
                    <td><?php echo $news["about"];?></td>
                    <td><?php echo "<img src='images/{$news_photo}' width='100' height='100'>"; ?></td>
                    
                    <td class="text-center">
                    <a href="update_news.php?id=<?php echo $news['id'];?>" class="mr-2 text-info"><i class="fas fa-user-edit    "></i></a> 
                      <a href='news.php?action=delete&id=<?php echo $news['id'];?>' onclick="return confirm('Are you sure?')"class="text-danger"><i class="fas fa-trash"></i></a></td>
                  </tr>
                <?php 
                        }
                ?>
                </body>
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