<?php
function admin_register(){
        global $connection;
        $user_name =$_POST['username'];
        $password=$_POST['password'];
        $cpass=$_POST['comfirmpassword'];
        if($password!=$cpass)
        {
            echo "<script>window.alert('Password and Comfirmpassword must be the same')</script>";
        }
        elseif($password!=""&& $user_name!="")
        {
            $query="select * from user where username='$user_name' and password ='$password'";
            $ch_query=mysqli_query($connection,$query);
			$count=mysqli_query($connection,$query);
            if ($count>0){
                echo "<script>window.alert('This User already exists')</script>";
            }
            else{
                $hashvalue=md5($password);
				$email=$_POST['email'];
				$address=$_POST['address'];
				$phone_number=$_POST['phone_number'];
                $user_role=$_POST['role'];
                $query="insert into users(user_name,email,phone_number,address,password,role)";
                $query.="value('$user_name','$email','$phone_number','$address','$hashvalue','$user_role')";
                $go_query=mysqli_query($connection,$query);
                if(!$go_query){
                    die("QUERY FAILED".mysqli_error($connection));
                }
                header("location:admin_register.php");
            }
        }
    }
   
?>