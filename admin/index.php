<?php 
    //for login
    include ("../database/connection.php");
    include ("php_scripts/login.php");

    include ("layouts/css.php");
    if(isset($_SESSION['member_success'])){
      echo "<script>window.history.back();</script>";
    }
?>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="POST">
            <?php 
                if($error3 != null){
            ?>
                <div class="alert alert-danger mt-1" role="alert">
                   <small><i class="fas fa-exclamation-triangle"></i> <?php echo $error3; ?></small>
                </div>
            <?php
                }
            ?>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email" id="inputEmail" class="form-control" value="<?php echo $email; ?>" placeholder="Email address" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
              <?php 
                if($error1 != null){
            ?>
                <div class="alert alert-danger mt-1" role="alert">
                   <small><i class="fas fa-exclamation-triangle"></i> <?php echo $error1; ?></small>
                </div>
            <?php
                }
          ?>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
              <label for="inputPassword">Password</label>
              <?php 
                if($error2 != null){
             ?>
                <div class="alert alert-danger mt-1" role="alert">
                   <small><i class="fas fa-exclamation-triangle"></i> <?php echo $error2; ?></small>
                </div>
            <?php
                }
            ?>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <button type="submit" name="login" value="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="../register.php">Register an Account</a>
          <!-- <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
        </div>
      </div>
    </div>
  </div>

<?php 
    include ("layouts/js.php");
?>


