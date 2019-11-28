<?php
include ("../database/connection.php");
  include ("php_scripts/auth.php");
  
  include ("layouts/css.php");
  include ("layouts/header.php");
  include ("layouts/side_bar.php");
  include ("function.php");

  if(isset($_GET['action']) =='delete'){
    delUser();
  }
?>

    

  </div>
  <!-- Bootstrap core JavaScript-->
 <?php
  include ("layouts/footer.php"); 
  include ("layouts/js.php");
 ?>