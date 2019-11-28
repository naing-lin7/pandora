<?php
 session_start();
 include 'include/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>pandora - Hotel &amp; Resort HTML Template</title>

    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/custom.css">

</head>

<body>
 <!-- Header Area Start -->
    <header class="header-area">
        <!-- Search Form -->
        <div class="search-form d-flex align-items-center">
            <div class="container">
                <form action="index.html" method="get">
                    <input type="search" name="search-form-input" id="searchFormInput" placeholder="Type your keyword ...">
                    <button type="submit"><i class="icon_search"></i></button>
                </form>
            </div>
        </div>

        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="icon_phone"></i> <span>(123) 456-789-1230</span></a>
                            <a href="#"><i class="icon_mail"></i> <span>info.colorlib@gmail.com</span></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="top-header-content">
                            <!-- Top Social Area -->
                            <div class="top-social-area ml-auto">
                                <!-- <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> -->
                                <?php if(isset($_SESSION['member_success']) || isset($_SESSION['auth_success'])){?>                                }
                                    <?php if(isset($_SESSION['member_success'])){ ?>
                                        <a class="text-white mr-3"><i class="fas fa-user-circle"></i> <?php echo $_SESSION['member_success']['name'];?></a>
                                    <?php }elseif(isset($_SESSION['auth_success'])){ ?>
                                        <a class="text-white mr-3"><i class="fas fa-user-circle"></i> <?php echo $_SESSION['auth_success']['name'];?></a>
                                    <?php } ?>
                                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                <?php }else{ ?>
                                    <a href="admin/index.php"><i class="fas fa-sign-in-alt"></i> Login</a>
                                    <a href="../register.php">Register</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.php"><img src="./img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="./index.php">Home</a></li>
                                    <li><a href="#">Rooms</a>
                                        <ul class="dropdown">
                                            <?php
                                                global $connection;
                                                $query="select * from room_type";
                                                $go_query=mysqli_query($connection,$query);
                                                while ($out=mysqli_fetch_array($go_query)){
                                                    $db_room_id=$out['id'];
                                                    $db_room_type=$out['type'];
                                            ?>
                                            <li> <a href="rooms.php?cat_id=<?php echo $db_room_id;?>&cat_name=<?php echo $db_room_type;?>"> <?php echo $db_room_type;?></a></li>
                                            <?php
                                                }
                                            ?>
                                         </ul>
                                    </li>
                                    <li><a href="./about.php">About Us</a></li>
                                    <li><a href="./blog.php">News</a></li>
                                    <li><a href="./contact.php">Contact</a></li>
                                </ul>

                                <!-- Search -->
                                <div class="search-btn ml-4">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                                <!-- Book Now -->
                                <div class="book-now-btn ml-3 ml-lg-5">
                                    <a href="#">Book Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->