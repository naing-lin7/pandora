<?php
 include 'include/connection.php';
 include 'include/function.php';
 if(isset($_POST['register'])){
	$user__name=$_POST['username'];
	$password=$_POST['password'];
	$comfirm_password=$_POST['con_password'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
		$address=$_POST['address'];
		$errors=array(
		'username'=>'',
		'password'=>'',
		'confirm_password'=>'',
		'match_password'=>'',
		'email'=>'',
		'phone'=>'',
		'address'=>'',
		);
		if ($user__name==''){
			$errors['username']='User Name must be enter';
		}else
		
		
		
		
		{
			if(strlen($user__name)<3){
				$errors['username']='User Name need to be longer';
			}
		}
		
		
		
		
		
		if($comfirm_password==''){
			$errors['confirm_password']='This Field could not be empty';
			}else
			
			
			
			
			
			{
				if($password!=$comfirm_password){
			$errors['$match_password']='Password Do not match';
				}
			}
			if($password==''){
				$errors['password']='This field could not be empty';
			}else{
				if(strlen($password)<3){
					$errors['password']='Password need to be longer';
				}
			}
			
			
			
			
			
			if($email==''){
				$errors['email']='This field could not be empty';
			}
			
			
			
			
			
			
			
			if($phone==''){
				$errors['phone']='This field could not be empty';
			}
			
			
			
			
			
			if($address==''){
				$errors['address']='This field could not be empty';
			}
			
			
			
			
			
			foreach($errors as $key=>$value){
				if(empty($value)){
					unset($errors[$key]);
				}
			}
			
			
			
			if(empty($errors)){
				//echo"<h3>Registration Success</h3>";
				create_accu();
			}
}
?>
		<?php
            include 'include/header.php';
		?>
		<!--end of header-->
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->
        <!--header-->
        
        
        <center>
        <div class="container">
        <?php
            include 'include/registration.php';
        ?>
        </div>
        </center>
        
        <!-- Footer Area Start -->
        <div class="container-fluid" style="margin-top: 100px;">
        <?php
            include 'include/footer.php'
        ?>
        </div>  
        <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>