<?php 
 function addUser(){
    global $name;global $email;global $phone;global $role;global $password;global $con_password; global $address;global $connection;
    global $name_err;global $email_err;global $role_err;global $phone_err;global $password_err;global $con_pass_err;global $create_message;
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
function updateType(){
	global $connection;global $row_query;global $name_err;
	$room_type=$_POST['room_type'];
    $room_id=$_GET['r_id'];
    $name_err = "";
    if(isset($_POST['update_room'])){
        if(empty($room_type)){
            $name_err = "Please fill room name";
        }else{
            $query="update room_type set type='$room_type' where id='$room_id'";
            $go_query=mysqli_query($connection,$query);
            if(!$go_query)
            {
                die("QUERY FAILED".mysqli_error($connection));
            }
                return "success";
            }
        }
}

function updateUser(){
    global $name;global $email;global $phone;global $role; global $address;global $connection;
    global $name_err;global $email_err;global $role_err;global $phone_err;global $create_message;
    $name           = $_POST['name'];
    $email          = $_POST['email'];
    $phone          = $_POST['phone'];
    $role           = $_POST['role'];
    $address        = $_POST['address'];
    $name_err       = "";
    $email_err      = "";
    $role_err       = "";
    $phone_err      = "";
    $create_message = "";
    $user_id        = $_GET["id"];
    
    if(isset($_POST['update_user'])){
        if(empty($name)){
            $name_err = "Please fill name.";
        }elseif (empty($email)) {
            $email_err = "Please fill email.";
        }elseif (empty($phone)) {
            $phone_err = "Please fill phone.";
        }elseif (empty($role)) {
            $role_err = "Please select role.";
        }else{
            $query = "update users set user_name='$name',email='$email',phone_number='$phone',address='$address',role='$role' where id='$user_id'";
            $run_query = mysqli_query($connection,$query);
            if($run_query){
               return "success";
            }else{
                $create_message = "Fail to update user.";
            }
        }
    }

    
}
function delUser(){
    global $connection;
    $user_id=$_GET['id'];
    $query="delete from users where id='$user_id'";
    $go_query=mysqli_query($connection,$query);

}

function addRoom(){
    global $connection;global $room_name;global $room_category;global $price;global $status;

    global $room_name_err;global $room_category_err;global $price_err;global $status_err;global $create_message;

    $room_name          = $_POST['room_name'];
    $room_category      = $_POST['room_category'];
    $price              = $_POST['price'];
    $status             = $_POST['status'];
    $room_detail        = $_POST['room_detail'];
    $room_facilities    = $_POST['room_facilities'];
    $gallery            = $_FILES['gallery']['name'];
    $room_name_err      = "";
    $room_category_err  = "";
    $price_err          = "";
    $status_err         = "";
    $create_message     = "";

    if(isset($_POST['add_room'])){
        if(empty($room_name)){
            $room_name_err = "Please fill room name.";
        }elseif (empty($room_category)) {
            $room_category_err = "Please choose room category.";
        }elseif (empty($price)) {
            $price_err = "Pleae fill price.";
        }elseif ($status == NULL) {
            $status_err = "Please choose status.";
        }else{
            // Count total files
            $countfiles = count($_FILES['gallery']['name']);
            if($countfiles > 0){
                $gallery_name = "";
                $uniquesavename=time().'_'.uniqid(rand());
                
                // Looping all files
                for($i=0;$i<$countfiles;$i++){
                $filename = $uniquesavename.'_'.$_FILES['gallery']['name'][$i];
                
                // Upload file
                move_uploaded_file($_FILES['gallery']['tmp_name'][$i],'room_gallery/'.$filename);
                $gallery_name .= $filename.",";
            }
            }else{
                $gallery_name = "";
            }
            $current_date   = date('Y-m-d h:i:s', time());
            $query          = "insert into room(name,room_detail,gallery,facilities,room_type,status,price,create_at)";
            $query         .= "values('$room_name','$room_detail','$gallery_name','$room_facilities','$room_category','$status','$price','$current_date')";
            $go_query       = mysqli_query($connection,$query);
            if($go_query){
                return "success";
             }else{
                 $create_message = "Fail to added room.";
             }
        }
    }

}
function updateRoom(){
    global $connection;global $room_name;global $room_category;global $price;global $status;

    global $room_name_err;global $room_category_err;global $price_err;global $status_err;global $create_message;

    $room_name          = $_POST['room_name'];
    $room_category      = $_POST['room_category'];
    $price              = $_POST['price'];
    $status             = $_POST['status'];
    $room_detail        = $_POST['room_detail'];
    $room_facilities    = $_POST['room_facilities'];
    $gallery            = $_FILES['gallery']['name'];
    $room_name_err      = "";
    $room_category_err  = "";
    $price_err          = "";
    $status_err         = "";
    $create_message     = "";
    $id                 = $_GET['id'];

    if(isset($_POST['update_room'])){
        if(empty($room_name)){
            $room_name_err = "Please fill room name.";
        }elseif (empty($room_category)) {
            $room_category_err = "Please choose room category.";
        }elseif (empty($price)) {
            $price_err = "Pleae fill price.";
        }elseif ($status == NULL) {
            $status_err = "Please choose status.";
        }else{
            // Count total files
            if(!empty($_FILES['gallery']['name'][0])){
            $countfiles = count($_FILES['gallery']['name']);
            if($countfiles > 0){
                $gallery_query  = "select * from room where id='$id'";
                $get_gallery    = mysqli_query($connection,$gallery_query);
                $gallery_data   = mysqli_fetch_assoc($get_gallery);
                if($gallery_data['gallery'] != NULL){
                    $gallery = $gallery_data['gallery'];
                    $gallery_toarray = explode(',',$gallery);
                    foreach($gallery_toarray as $name){
                        $image = "room_gallery/".$name;
                        if (file_exists($image)) {
                            unlink($image);
                        }
                    }
                }
                $gallery_name = "";
                $uniquesavename=time().'_'.uniqid(rand());
                
                // Looping all files
                for($i=0;$i<$countfiles;$i++){
                    $filename = $uniquesavename.'_'.$_FILES['gallery']['name'][$i];
                    
                    // Upload file
                    move_uploaded_file($_FILES['gallery']['tmp_name'][$i],'room_gallery/'.$filename);
                    $gallery_name .= $filename.",";
                    }
                }
            }else{
                $gallery_query  = "select * from room where id='$id'";
                $get_gallery    = mysqli_query($connection,$gallery_query);
                $gallery_data   = mysqli_fetch_assoc($get_gallery);
                $gallery_name = $gallery_data['gallery'];
            }
            
            $current_date   = date('Y-m-d h:i:s', time());
            $query          = "update room set name='$room_name',room_detail='$room_detail',gallery='$gallery_name',facilities='$room_facilities',room_type='$room_category',status='$status',price='$price' where id='$id'";
            $go_query       = mysqli_query($connection,$query);
            if($go_query){
                return "success";
             }else{
                 $create_message = "Fail to update room.";
             }
        }
    }

}
function delRoom(){
    global $connection;
    $id=$_GET['id'];
    $gallery_query  = "select * from room where id='$id'";
    $get_gallery    = mysqli_query($connection,$gallery_query);
    $gallery_data   = mysqli_fetch_assoc($get_gallery);
    if($gallery_data['gallery'] != NULL){
        $gallery = $gallery_data['gallery'];
        $gallery_toarray = explode(',',$gallery);
        foreach($gallery_toarray as $name){
            $image = "room_gallery/".$name;
            if (file_exists($image)) {
                unlink($image);
             }
        }
    }
    $del_query="delete from room where id='$id'";
    $go_query=mysqli_query($connection,$del_query);
}

function addNews(){
    global $connection;
    $news_name=$_POST['name'];
    $news_about=$_POST['about'];
    $news_date=$_POST['date'];
    $news_photo=$_FILES['photo']['name'];
    $news_name_err='';
    $news_date_err='';
    $news_about_err='';
    $news_photo_err='';
    if(empty($news_name))
    {
    $news_name_err = "Please fill name.";
    }
    elseif (empty($news_about)) 
    {
        $news_about_err = "Please fill about.";
    }

    elseif (empty($news_date)) 
    {
        $news_date_err = "Please fill date.";
    }

    elseif($news_photo==""){
    echo "<script>window.alert('Choose Image')</script>";
    }
    else{
    $query="insert into news_table(name,about,date,photo) values('$news_name','$news_about','$news_date','$news_photo')";
            $go_query=mysqli_query($connection,$query);
        if(!$go_query){
            die("QUERY FAILED".mysqli_error($connection));   
        }
        else{
            echo "<script language=\"javascript\">window.alert('successfully inserted')</script>";
            move_uploaded_file($_FILES['photo']['name'],'../images/'.$news_photo);
            echo "<script> location.href='news.php'; </script>";
                
        }
        
    }
 
}


function delNews(){
    global $connection;
    $news_id=$_GET['id'];
    $query="delete from news_table where id='$news_id'";
    $go_query=mysqli_query($connection,$query);

}

function delBooking(){
    global $connection;
    $booking_id=$_GET['id'];
    $query="delete from booking where id='$booking_id'";
    $go_query=mysqli_query($connection,$query);
    if($go_query){
        return "success";
    }
}

function updateNews(){
    global $connection;
            $news_name=$_POST['name'];
            $news_about=$_POST['about'];
			$news_date=$_POST['date'];
			$news_photo=$_FILES['photo']['name'];
			$news_name_err='';
			$news_date_err='';
			$news_about_err='';
			$news_photo_err='';
            $news_id       = $_GET["id"];
    
    if(isset($_POST['update_news'])){
        if(empty($news_name))
            {
            $news_name_err = "Please fill name.";
            }
        elseif (empty($news_about)) 
        {
            $news_about_err = "Please fill about.";
        }

        elseif (empty($news_date)) 
        {
            $news_date_err = "Please fill date.";
        }
        
	 elseif($news_photo==""){
		  echo "<script>window.alert('Choose Image')</script>";
	 }
	 else{ $query = "update news_table set name='$news_name',about='$news_about',date='$news_date',photo='$news_photo' where id='$news_id'";
        $run_query = mysqli_query($connection,$query);
        if($run_query){
           return "success";
		   move_uploaded_file($_FILES['photo']['name'],'../images/'.$news_photo);
        }else{
            $create_message = "Fail to update news.";
				   
					
			   }
			 
		 }
		 
        }
    }

function addSlider(){
        global $connection;
        $slider_caption         = $_POST['caption'];
        $slider_photo           = $_FILES['photo']['name'];
        $slider_caption_err     = '';
        $slider_photo_err       = '';
        if(empty($slider_caption))
        {
            $slider_caption_err = "Please fill caption.";
        }elseif($slider_photo==""){
            echo "<script>window.alert('Choose Image')</script>";
        }
    else{
        $query="insert into slider(caption,image) values('$slider_caption','$slider_photo')";
        $go_query=mysqli_query($connection,$query);
           if(!$go_query){
            die("QUERY FAILED".mysqli_error($connection));   
           }
           else{
               echo "<script language=\"javascript\">window.alert('successfully inserted')</script>";
               move_uploaded_file($_FILES['photo']['tmp_name'],'slide_image/'.$slider_photo);
               echo "<script> location.href='all_slider.php'; </script>";
                
           }
         
     }
     
    }

function delSlider(){
        global $connection;
        $slider_id=$_GET['id'];
        $old_img = "select * from slider where id='$slider_id'";
        $get_oldimg = mysqli_query($connection,$old_img);
        $old_img_array = mysqli_fetch_assoc($get_oldimg);
        $image = "slide_image/".$old_img_array['image'];
            if (file_exists($image)) {
                unlink($image);
             }
        $query="delete from slider where id='$slider_id'";
        $go_query=mysqli_query($connection,$query);
    
    }

function updateSlider(){
        global $connection;
                $slider_caption         = $_POST['caption'];
                $slider_photo           = $_FILES['photo']['name'];
                $slider_caption_err     = '';
                $slider_photo_err       = '';
                $slider_id              = $_GET["id"];
        
        if(isset($_POST['update_slider'])){
            if(empty($slider_caption)){
                $slider_caption_err = "Please fill caption.";
            }else{
                        $old_img = "select * from slider where id='$slider_id'";
                        $get_oldimg = mysqli_query($connection,$old_img);
                        $old_img_array = mysqli_fetch_assoc($get_oldimg);
                        if($slider_photo == ""){
                            $image_name = $old_img_array['image'];
                        }else{
                            $image = "slide_image/".$old_img_array['image'];
                            if (file_exists($image)) {
                                unlink($image);
                             }
                            $image_name = $slider_photo;
                            move_uploaded_file($_FILES['photo']['tmp_name'],'slide_image/'.$image_name);
                        }
                        $query = "update slider set caption='$slider_caption',image='$image_name' where id='$slider_id'";
                        $run_query = mysqli_query($connection,$query);
                        if($run_query){
                        echo "<script language=\"javascript\">window.alert('successfully inserted')</script>";
                        echo "<script> location.href='all_slider.php'; </script>";
                        }else{
                            $create_message = "Fail to update slider.";
                       
                        
                   }
                 
             }
             
            }
}
    