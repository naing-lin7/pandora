<?php 
 function addUser(){
    global $name;global $email;global $phone;global $role;global $password;global $con_password; global $address;global $connection;
    global $name_err;global $email_err;global $role_err;global $phone_err;global $password_err;global $con_pass_err;global $create_message;global $status;
    $name           = $_POST['name'];
    $email          = $_POST['email'];
    $phone          = $_POST['phone'];
    $role           = $_POST['role'];
    $password       = $_POST['password'];
    $con_password   = $_POST['con_password'];
    $address        = $_POST['address'];
    $name_err       = "";
    $email_err      = "";
    $role_err       = "";
    $phone_err      = "";
    $password_err   = "";
    $con_pass_err   = "";
    $create_message = "";
    $status         = "";
    
    if(isset($_POST['add_user'])){
        if(empty($name)){
            $name_err = "Please fill name.";
        }elseif (empty($email)) {
            $email_err = "Please fill email.";
        }elseif (empty($phone)) {
            $phone_err = "Please fill phone.";
        }elseif (empty($role)) {
            $role_err = "Please select role.";
        }elseif (empty($password)) {
            $password_err = "Please fill password.";
        }elseif (strlen($password) < 6) {
            $password_err = "Password must be as least 6 charactor.";
        }elseif (strlen($password) > 12 ) {
            $password_err = "Password must be as most 12 charactor.";
        }elseif(empty($con_password)){
            $con_pass_err = "Please fill confirm password.";
        }elseif ($password != $con_password) {
           $con_pass_err = "Please password is wrong.";
        }else{
            $md5_pass       = md5($password);
            $current_date   = date('Y-m-d h:i:s', time());
            $query = "insert into users(user_name,email,phone_number,address,password,role,create_at)";
            $query .= "values ('$name','$email','$phone','$address','$md5_pass','$role','$current_date')";
            $run_query = mysqli_query($connection,$query);
            if($run_query){
               return "success";
            }else{
                $create_message = "Fail to added user.";
            }
        }
    }
}

function insertRoom(){	  
    global $connection;global $name_err;
     $room_type     = $_POST['room_type'];
     $name_err      = "";
     if(isset($_POST['add_room'])){
        if($room_type==""){
                $name_err = "Please fill room name.";
            }
        elseif($room_type!=""){
                $query="select * from room_type where type='$room_type'";
                $ch_query=mysqli_query($connection,$query);
                $count=mysqli_num_rows($ch_query);
                    if($count>0){
                        $name_err = "This room is already exist.";
                    }
                    else{
                        $query="insert into room_type(type)values('$room_type')";
                        $go_query=mysqli_query($connection,$query);
                        if(!$go_query){
                            die("QUERY FAILED".mysqli_error($connection));}
                            else{
                                return "success";
                        }
                    }
        }
     }
}
function del_room(){
    global $connection;
    $room_id=$_GET['r_id'];
    $query="delete from room_type where id='$room_id'";
    $go_query=mysqli_query($connection,$query);

}
function update_room(){
	global $connection;
	$room_type=$_POST['room_type'];
	$room_id=$_GET['r_id'];
	$query="update room_type set type='$room_type' where id='$room_id'";
	$go_query=mysqli_query($connection,$query);
	if(!$go_query)
	{
		die("QUERY FAILED".mysqli_error($connection));
	}
 		header("location:room_type.php");
}