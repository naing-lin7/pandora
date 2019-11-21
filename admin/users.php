<?php
include ("../database/connection.php");
  include ("php_scripts/auth.php");
  
  include ("layouts/css.php");
  include ("layouts/header.php");
  include ("layouts/side_bar.php");
?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/admin/dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Users</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
           <strong>All Users</strong>
           <a href="add_user.php" class="btn btn-info btn-sm float-right"> <i class="fas fa-plus-circle    "></i> Add User</a>
        </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Role</th>
                    <th>Register Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Role</th>
                    <th>Register Date</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php 
                   $query          = "select * from users";
                   $get_users      = mysqli_query($connection,$query);
                    while($user = mysqli_fetch_array($get_users)){
                ?>
                  <tr>
                    <td><?php echo $user["user_name"]; ?></td>
                    <td><?php echo $user["email"]; ?></td>
                    <td><?php echo $user["phone_number"];?></td>
                    <td><?php echo $user["address"];?></td>
                    <td><?php echo $user["role"];?></td>
                    <td><?php echo date("d-M-Y", strtotime($user["create_at"]));?></td>
                    <td class="text-center"><a href="#" class="mr-2 text-info"><i class="fas fa-user-edit    "></i></a> <a href="#" class="text-danger"><i class="fas fa-trash"></i></a></td>
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