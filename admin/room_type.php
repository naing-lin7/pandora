<?php
  include ("../database/connection.php");
  include ("php_scripts/auth.php");
 
  include ("layouts/css.php");
  include ("layouts/header.php");
  include ("layouts/side_bar.php");
  include ("function.php");
?>
 <?php
			if(isset($_GET['action'])&&$_GET['action']=='delete'){
				del_room();
			}
			if(isset($_POST['update_room']))
			
			{
				update_room();
			}
  ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/admin/dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Room</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
           <strong>All Room</strong>
           <a href="add_room.php" class="btn btn-info btn-sm float-right"> <i class="fas fa-plus-circle    "></i> Add Room</a>
        </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <?php
										$query="select*from room_type";
										$go_query=mysqli_query($connection,$query);
										while($row=mysqli_fetch_array($go_query))
											{
												$room_id=$row['id'];
												$room_type=$row['type'];
												echo"<tr>";
												echo"<td>{$room_id}</td>";
												echo"<td>{$room_type}</td>";
												echo"<td><a href='room_type.php?action=delete&r_id={$room_id}'
												onclick=\"return confirm('Are you sure?')\")>X</a>||
												<a href='update_room.php?action=edit&r_id={$room_id}'>Edit</a></td>";
												echo"</tr?>";
                      }?>          
                <tfoot>
                  <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                 
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