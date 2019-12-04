 <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
        <?php
                include ("include/connection.php"); 
                $query  = "select * from slider";
                $get_slider = mysqli_query($connection,$query);
                while ($slide = mysqli_fetch_array($get_slider)){
        ?>
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(admin/slide_image/<?php echo $slide['image'];?>);" data-img-url="admin/slide_image/<?php echo $slide['image'];?>">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms">Hotel Booking</h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms"><?php echo $slide['caption'];?></h2>
                                    <a href="#" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <?php } ?>
        </div>
    </section>
    <!-- Welcome Area End -->