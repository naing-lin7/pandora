
   <?php include 'include/header.php' ;?> 
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
                                            $i++;
                                    ?>
                                    <div class="carousel-item <?php if($i == 1){  echo 'active';}?>">
                                        <img src="admin/room_gallery/<?php echo $image;?>" class="d-block w-100" alt="">
                                    </div>
                                    <?php } ?>
                                   
                                </div>

                                <ol class="carousel-indicators">
                                    <?php 
                                        $room_id = $_GET['room_id'];
                                        $query = "select * from room where id='$room_id'";
                                        $get_gallery = mysqli_query($connection,$query);
                                        $gallery = explode(',',mysqli_fetch_assoc($get_gallery)['gallery']);
                                        $i = 0;
                                        foreach($gallery as $image){
                                    ?>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="<?php echo $i++;?>" class="<?php if($i == 1){  echo 'active';}?>">
                                        <img src="admin/room_gallery/<?php echo $image;?>" class="d-block w-100" alt="">
                                    </li>
                                    <?php } ?>
                                    
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
                            <h6>Status: <span><?php echo $room['status'] ? "Avaliable" : "Not Avaliable" ?></span></h6>
                            <h6>Services: <span>Wifi, television ...</span></h6>
                        </div>
                    </div>
                    
                </div>

                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area -->
                    <div class="hotel-reservation--area mb-100">
                        <form action="#" method="post">
                            <div class="form-group mb-30">
                                <label for="checkInDate">Date</label>
                                <div class="input-daterange" id="datepicker">
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <input type="text" class="input-small form-control" name="checkInDate" id="checkInDate" placeholder="Check In">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="input-small form-control" name="checkOutDate" placeholder="Check Out">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <label for="guests">Guests</label>
                                <div class="row">
                                    <div class="col-6">
                                        <select name="adults" id="guests" class="form-control">
                                            <option value="adults">Adults</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <select name="children" id="children" class="form-control">
                                            <option value="children">Children</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-50">
                                <div class="slider-range">
                                    <div class="range-price">Max Price: $0 - $3000</div>
                                    <div data-min="0" data-max="3000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="0" data-value-max="3000" data-label-result="Max Price: ">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn roberto-btn w-100">Check Available</button>
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