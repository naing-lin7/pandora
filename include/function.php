<?php 
 function create_accu(){
	global $connection;
	  global $user_name;
		global $password;
		  global $email;
			global $phone;
			  global $address;
			   $hpass=md5($password);
			  $query="select * from users where user_name='$user_name' and password='$hpass'";
			  $user_query=mysqli_query($connection,$query);
			  $count=mysqli_num_rows($user_query);
			  if($count>0){
				  echo "<script>window.alert('already exists')</script>";
			  }
			  else{
				  $query="insert into users (user_name,password,email,phone_number,address,role)";
				   $query.="values('$user_name','$hpass','$email','$phone','$address','member')";
					$go_query=mysqli_query($connection,$query);
					if(!$go_query){
						die("QUERY FAILED".mysqli_error($connection));
					}
					else
					{
						echo "<script>window.alert('you successfully created an account')</script>";
					}
			  }header("location:index.php");
}