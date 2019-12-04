<?php
    include 'include/header.php';
  ?>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title"><?php echo $_GET['cat_name'];?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $_GET['cat_name'];?></li>
                            </ol>
                        </nav>
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
                    <?php 
                        $cat_id     = $_GET['cat_id'];
                        $query      = "select * from room where room_type='$cat_id'";
                        $get_room   = mysqli_query($connection,$query);
                        if(mysqli_num_rows($get_room) > 0){
                        while($room = mysqli_fetch_array($get_room)){     
                    ?>
                    <div class="col-md-6 col-lg-6">
                        <!-- Single Room Area -->
                        <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                            <!-- Room Thumbnail -->
                            <div class="room-thumbnail">
                                <?php
                                    $images = $room['gallery'];
                                ?>
                                <img src="admin/room_gallery/<?php echo explode(',',$images)[0];?>" alt="">
                            </div>
                            <!-- Room Content -->
                            <div class="room-content">
                                <h2><?php echo $room['name']; ?></h2>
                                <h4><?php echo number_format($room['price']); ?> MMK <span>/ Day</span></h4>
                                <div class="room-feature">
                                    <h6>Room Type <span><?php echo $_GET['cat_name']; ?> </span></h6>
                                    <h6></h6>
                                    <h6>Stauts: <span><?php echo $room['status'] ? "Avaliable" : "Not Avaliable"; ?></span></h6>
                                    <h6></h6>
                                </div>
                                <a href="room_detail.php?room_id=<?php echo $room['id'];?>" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                            }
                        }else{
                            echo "Room Not Found.";
                        }
                    ?>

                    <!-- Pagination -->
                    <!-- <nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="1000ms">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next <i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav> -->
                </div>

            </div>
        </div>
        <hr>
    </div>
    <!-- Rooms Area End -->

   
    <!-- Footer Area Start -->
       <?php
         include 'include/footer.php';
       ?>
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