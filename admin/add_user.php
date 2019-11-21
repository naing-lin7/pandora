<?php
  error_reporting(1);
  include ("../database/connection.php");
  include ("php_scripts/auth.php");
  include ("function.php");
  
  include ("layouts/css.php");
  include ("layouts/header.php");
  include ("layouts/side_bar.php");

  if(addUser() == "success"){
    echo "<script> location.href='users.php'; </script>";
    exit;
  }
  addUser();
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
           <strong>Add Users</strong>
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
          <form method="POST" id="add_user">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="name" class="form-control" placeholder="name" name="name" autofocus="autofocus" value="<?php if(!empty($name)){ echo $name; } ?>">
                  <label for="name">Name</label>
                  <?php if($name_err != Null){ ?>
                    <small class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo $name_err;?> </small>
                  <?php  } ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="email" id="email" class="form-control" placeholder="email" name="email" value="<?php if(!empty($email)){ echo $email; } ?>">
                  <label for="email">Email</label>
                  <?php if($email_err != Null){ ?>
                    <small class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo $email_err;?> </small>
                  <?php  } ?>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="number" id="phone" class="form-control" placeholder="phone" name="phone" value="<?php if(!empty($phone)){ echo $phone; } ?>">
                  <label for="phone">Phone</label>
                  <?php if($phone_err != Null){ ?>
                    <small class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo $phone_err;?> </small>
                  <?php  } ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <select id="" class="form-control select-input" name="role" >
                    <option value="">Select Role</option>
                    <option value="admin" <?php if($role == "admin"){ echo "selected='true'"; } ?>>Admin</option>
                    <option value="member" <?php if($role == "member"){ echo "selected='true'"; } ?>>Member</option>
                  </select>
                  <?php if($role_err != Null){ ?>
                    <small class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo $role_err;?> </small>
                  <?php  } ?>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
            <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password"  value="<?php if(!empty($password)){ echo $password; } ?>" id="password" class="form-control" placeholder="password" name="password">
                  <label for="password">Password</label>
                  <?php if($password_err != Null){ ?>
                    <small class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo $password_err;?> </small>
                  <?php  } ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password"  value="<?php if(!empty($con_password)){ echo $con_password; } ?>" id="con_password" class="form-control" placeholder="confirm password" name="con_password">
                  <label for="con_password">Comfirm Password</label>
                  <?php if($con_pass_err != Null){ ?>
                    <small class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo $con_pass_err;?> </small>
                  <?php  } ?>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
            <div class="col-md-12">
                <div class="form-label-group">
                  <textarea class="form-control" placeholder="Address" name="address" rows="4"><?php if(!empty($address)){ echo $address; } ?></textarea>
                </div>
              </div>
            </div>
          </div>
         <div class="row d-flex justify-content-end">
             <div class="col-md-2">
                <a href="users.php" class="btn btn-danger btn-block"> <i class="fas fa-times-circle"></i> Cancel</a>
             </div>
            <div class="col-md-2 ">
                <button type="submit" name="add_user" class="btn btn-primary btn-block"> <i class="fas fa-plus-circle    "></i> Add User</button>
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