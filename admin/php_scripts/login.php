<?php 
  error_reporting(1);
  session_start();
  if(isset($_SESSION['auth_success'])){
    header('location: dashboard.php');
  }
  $email     = $_POST["email"];
  $password  = $_POST["password"];
  $error1     = "";
  $error2     = "";
  $error3     = "";
  if(isset($_POST["login"])){
     if(empty($email)){
         $error1     = "Plese fill your email address.";
     }elseif(empty($password)){
         $error2     = "Please fill your password.";
     }else{
        $query      = "select * from users where email='$email'";
        $user       = mysqli_query($connection,$query);
        $user_row   = mysqli_fetch_array($user);
        if($user_row != null){
            if($user_row['password'] == md5($password)){
                $_SESSION["auth_success"] = ["name" => $user_row['user_name'],"email" => $user_row['email']];
                header("location: dashboard.php ");
            }else {
                $error3 = "Login fail: Wrong email or password.";
            }
        }else {
            $error3 = "Login fail: Wrong email or password.";
        }
     }
  }