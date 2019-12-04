
   <?php    
        error_reporting(1);
        include 'include/header.php';
        include 'include/function.php' ;
        $checkin 	= date('Y-m-d', time());

    ?> 
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <?php 
        $room_id    = $_GET['room_id'];
        $query      = "select * from room where id='$room_id'";
        $get_room   = mysqli_query($connection,$query);
        $room       = mysqli_fetch_assoc($get_room);
        $room_id = $room['id'];
        $booking_query = "select * from booking where room_id='$room_id'";
        $get_booking  = mysqli_query($connection,$booking_query);
        $booking_array = mysqli_fetch_assoc($get_booking);
        $book_checkin = date('Y-m-d',strtotime($booking_array['checkin']));
        $book_checkout = date('Y-m-d',strtotime($booking_array['checkout']));
        $status        = "";
        if($checkin >= $book_checkin && $checkin <= $book_checkout){
            $status =  "Not Avaliable";
        }else{
            $status = "Avaliable";
        }

        if(isset($_POST['booknow'])){
            if(createBooking() == 'success'){
                echo "<script>alert('Booking is successfully, Thank you for your booking.');window.location.href='/';</script>";
            }else{
                echo "<script>alert('Fail Booking! Sorry, Please contact our customer service (+95 123 123 123).');</script>";
            }
        }

    ?>

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcrumb-content d-flex align-items-center justify-content-between pb-5">
                        <h2 class="room-title"><?php echo $room['name']; ?></h2>
                        <h2 class="room-price"><?php echo number_format($room['price']); ?> MMK <span>/ Per Night</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <!-- Room Thumbnail Slides -->
                        <div class="room-thumbnail-slides mb-50">
                            <div id="room-thumbnail--slide" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <?php 
                                        $room_id = $_GET['room_id'];
                                        $query = "select * from room where id='$room_id'";
                                        $get_gallery = mysqli_query($connection,$query);
                                        $gallery = explode(',',mysqli_fetch_assoc($get_gallery)['gallery']);
                                        $i = 0;
                                        foreach($gallery as $image){
                                            if($image != NULL){
                                            $i++;
                                    ?>
                                    <div class="carousel-item <?php if($i == 1){  echo 'active';}?>">
                                        <img src="admin/room_gallery/<?php echo $image;?>" class="d-block w-100" alt="">
                                    </div>
                                    <?php }} ?>
                                   
                                </div>

                                <ol class="carousel-indicators">
                                    <?php 
                                        $room_id = $_GET['room_id'];
                                        $query = "select * from room where id='$room_id'";
                                        $get_gallery = mysqli_query($connection,$query);
                                        $gallery = explode(',',mysqli_fetch_assoc($get_gallery)['gallery']);
                                        $i = 0;
                                        foreach($gallery as $image){
                                            if($image != NULL){
                                    ?>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="<?php echo $i++;?>" class="<?php if($i == 1){  echo 'active';}?>">
                                        <img src="admin/room_gallery/<?php echo $image;?>" class="d-block w-100" alt="">
                                    </li>
                                    <?php }} ?>
                                    
                                </ol>
                            </div>
                        </div>

                        <!-- Room Features -->
                        <div class="room-features-area d-flex flex-wrap mb-50">
                            <h6>Room Type: <span><?php
                                $type_id = $room['room_type'];
                                $query="select * from room_type where id='$type_id'";
                                $go_query=mysqli_query($connection,$query);
                                echo mysqli_fetch_assoc($go_query)['type'];
                            ?></span></h6>
                            <h6>Price: <span><?php echo number_format($room['price']);?> MMK</span></h6>
                            <h6>Status: <span><?php echo $status; ?></span></h6>
                            <h6>Services: <span>Wifi, television ...</span></h6>
                        </div>
                    </div>
                    
                </div>

                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area -->
                    <div class="hotel-reservation--area mb-100">
                        <form method="post" autocomplete="off">
                            <h3>Booking Form</h3>
                            <?php 
                                if(isset($_SESSION['member_success']) || isset($_SESSION['auth_success'])){
                                    error_reporting(1);
                                    $user_id    = $_SESSION['member_success'] ? $_SESSION['member_success']['id'] : $_SESSION['auth_success']['id'];
                                    $query      = "select * from users where id='$user_id'";
                                    $get_user   = mysqli_query($connection,$query);
                                    $row_user   = mysqli_fetch_assoc($get_user);
                            ?>
                                <input type="hidden" value="<?php echo $user_id; ?>" name="user_id">
                                <input type="hidden" value="<?php echo $room['id']; ?>" name="room_id">
                                <input type="hidden" value="<?php echo $room['price']; ?>" name="price">
                                <div class="form-group mb-30">
                                <label for="name">Customer Information</label>
                                <div class="row no-gutters">
                                    <div class="col-6">
                                        <input type="text" class="input-small form-control" value="<?php if($oldData['name'] != ''){echo $oldData['name'];}else{echo $row_user['user_name'];} ?>" name="name" id="name" placeholder="Name">
                                        <?php if($error['name'] != ""){?>
                                            <small class="text-danger"><i class="fas fa-exclamation-triangle    "></i> <?php echo $error['name'];?></small>
                                        <?php } ?>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="input-small form-control" value="<?php if($oldData['email'] != ''){echo $oldData['email'];}else{echo $row_user['email'];} ?>" name="email" placeholder="Email">
                                        <?php if($error['email'] != ""){?>
                                            <small class="text-danger"><i class="fas fa-exclamation-triangle    "></i> <?php echo $error['email'];?></small>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <input type="number" name="phone" value="<?php if($oldData['phone'] != ''){echo $oldData['phone'];}else{echo $row_user['phone_number'];} ?>" placeholder="Phone" class="form-control">
                                        <?php if($error['phone'] != ""){?>
                                            <small class="text-danger"><i class="fas fa-exclamation-triangle    "></i> <?php echo $error['phone'];?></small>
                                        <?php } ?>
                                    </div>
                                </div>
                                </div>
                            <?php
                                }
                            ?>
                            <div class="form-group mb-30">
                                <label for="checkInDate">Date</label>
                                <div class="input-daterange" id="datepicker">
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <input type="text" class="input-small form-control" value="<?php if($oldData['checkin'] != ''){echo $oldData['checkin'];} ?>" name="checkin" id="checkInDate" placeholder="Check In">
                                            <?php if($error['checkin'] != ""){?>
                                            <small class="text-danger"><i class="fas fa-exclamation-triangle    "></i> <?php echo $error['checkin'];?></small>
                                        <?php } ?>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="input-small form-control" value="<?php if($oldData['checkout'] != ''){echo $oldData['checkout'];} ?>" name="checkout" placeholder="Check Out">
                                            <?php if($error['checkout'] != ""){?>
                                            <small class="text-danger"><i class="fas fa-exclamation-triangle    "></i> <?php echo $error['checkout'];?></small>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <textarea name="message" class="form-control pt-2" placeholder="Message" id="" rows="10" style="height: 127px;"><?php if($oldData['message'] != ''){echo $oldData['message'];} ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php 
                                    if(isset($_SESSION['member_success']) || isset($_SESSION['auth_success'])){
                                        if($room['status'] == 1 && $status =="Avaliable" ){
                                ?>
                                    <input type="submit" name="booknow" value="submit" class="btn roberto-btn w-100" onclick="return confirm('Are you sure? Do you want to booking?')" value="Book Now">
                                <?php }else{
                                ?>
                                    <button type="button" name="booknow" class="btn roberto-btn w-100" onclick="return alert('Sorry! This room is not avaliable.')">Book Now</button>
                                <?php
                                    } }
                                    else{
                                ?>
                                  <button type="button" class="btn roberto-btn w-100" data-toggle="modal" data-target="#loginModal">Book Now</button>
                                <?php
                                    }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <!-- <hr> -->
                <?php echo $room['room_detail']; ?>
                <hr>
                <?php echo $room['facilities']; ?>
                <hr>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->

    <!-- Footer Area Start -->
    
    <?php
           include 'include/footer.php'
       ?>

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