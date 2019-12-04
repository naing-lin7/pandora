<?php 
 function create_accu(){
	global $connection;
	  global $user__name;
		global $password;
		  global $email;
			global $phone;
			  global $address;
			   $hpass=md5($password);
			  $query="select * from users where user_name='$user__name' and password='$hpass'";
			  $user_query=mysqli_query($connection,$query);
			  $count=mysqli_num_rows($user_query);
			  if($count>0){
				  echo "<script>window.alert('already exists')</script>";
			  }
			  else{
				  $query="insert into users (user_name,password,email,phone_number,address,role)";
				   $query.="values('$user__name','$hpass','$email','$phone','$address','member')";
					$go_query=mysqli_query($connection,$query);
					if(!$go_query){
						die("QUERY FAILED".mysqli_error($connection));
					}
					else
					{
						echo "<script>window.alert('you successfully created an account')</script>";
					}
			  }header("location:admin/index.php");
}

function createBooking(){
	global $connection;global $error;global $oldData;
	$user_name		= $_POST['name'];
	$email			= $_POST['email'];
	$phone			= $_POST['phone'];
	$user_id		= $_POST['user_id'];
	$room_id		= $_POST['room_id'];
	$price			= $_POST['price'];
	$checkin		= $_POST['checkin'];
	$checkout		= $_POST['checkout'];
	$first_date		= new DateTime($checkin);
	$second_date	= new DateTime($checkout);
	$get_day		= $first_date->diff($second_date)->format('%R%a days');
	$total_price	= $price*$get_day;
	$message		= $_POST['message'];
	$oldData			= [
		'name' => $user_name,
		'email'		=> $email,
		'phone'		=> $phone,
		'checkin'	=> $checkin,
		'checkout'	=> $checkout,
		'message'	=> $message
	];
	$error			= [
		'name' => '',
		'email'		=> '',
		'phone'		=> '',
		'checkin'	=> '',
		'checkout'	=> ''
	];
	if(isset($_POST['booknow'])){
		if(empty($user_name)){
			$error['name'] = "Please fill name.";
		}elseif (empty($email)) {
			$error['email'] = "Please fill email.";
		}elseif(empty($phone)){
			$error['phone'] = "Please fill phone.";
		}elseif(empty($checkin)){
			$error['checkin'] = "Choose checkin date.";
		}elseif(empty($checkout)){
			$error['checkout'] = "Choose checkout date.";
		}else{
			$current_date   = date('Y-m-d h:i:s', time());
			$query	 	= "insert into booking (name,email,phone,room_id,user_id,checkin,checkout,day,message,total_price,create_at)";
			$query	   .= "values('$user_name','$email','$phone','$room_id','$user_id','$checkin','$checkout','$get_day','$message','$total_price','$current_date')";
			$go_query	= mysqli_query($connection,$query);
			if($go_query){
				return "success";
			}else{
				return "fail";
			}
		}
	}
}