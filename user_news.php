
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
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/17.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Blog Left Sidebar</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Left Sidebar</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->


     <!-- Blog Area Start -->
    <div class="roberto-news-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">

                    <?php
                        global $connection;
                        $query      = "select * from news_table";
                        $get_news   = mysqli_query($connection,$query);
                        if(mysqli_num_rows($get_news) > 0){
                        while( $news = mysqli_fetch_array($get_news)){   
                          
                    ?>

                     <!-- Single Blog Post Area -->
                    <div class="single-blog-post d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                        <?php
                                    $images = $news['photo'];
                                ?>
                            <a href="#"><img src="admin/images/<?php echo explode(',',$images)[0];?>" alt=""></a>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a href="#" class="post-author"><?php echo $news['date']; ?></a>
                                <a href="#" class="post-tutorial">Event</a>
                            </div>
                            <!-- Post Title -->
                            <a href="#" class="post-title"><?php echo $news['name']; ?></a>
                            <p><?php echo $news['about']; ?></p>
                            
                        </div>
                    </div>

                    <?php
                            }
                        }else{
                            echo "News Not Found.";
                        }
                    ?>

                   

    <!-- Breadcrumb Area End -->

 <!-- Pagination -->
 <!--<nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="600ms">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next <i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>-->

                </div>

                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="roberto-sidebar-area pl-md-4">

                        <!-- Newsletter -->
                        <div class="single-widget-area mb-100">
                            <div class="newsletter-form">
                                <h5>Register</h5>
                                <p>Register to our website to be able to book online.</p>
                                
                                 
                                    <button type="submit" class="btn roberto-btn w-100"><a href='register.php'>Register</a></button>
                                
                            </div>
                        </div>

                        <!-- Recent Post -->
                        <div class="single-widget-area mb-100">
                            <h4 class="widget-title mb-30">Recent News</h4>

                        <?php
                        global $connection;
                        $query      = "select * from news_recent";
                        $get_recent_news   = mysqli_query($connection,$query);
                        if(mysqli_num_rows($get_recent_news) > 0){
                        while( $recent_news = mysqli_fetch_array($get_recent_news)){   
                          
                    ?>

                     <!-- Single Blog Post Area -->
                     <div class="single-recent-post d-flex">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                <?php
                                    $images = $recent_news['photo'];
                                ?>
                                    <a href="single-blog.html"><img src="admin/images/<?php echo explode(',',$images)[0];?>" alt=""></a>
                                </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a href="#" class="post-author"><?php echo $recent_news['date']; ?></a>
                                <a href="#" class="post-tutorial">Event</a>
                            </div>
                            <!-- Post Title -->
                            <a href="#" class="post-title"><?php echo $recent_news['name']; ?></a>
                            
                        </div>
                    </div>

                    <?php
                            }
                        }else{
                            echo "News Not Found.";
                        }
                    ?>      
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
               

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

