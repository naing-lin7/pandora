<?php 
error_reporting(1);
include 'include/function.php';
?>

<link rel="stylesheet" href="../css/custom.css">

<section class="roberto-about-area section-padding-100-0">
        <!-- Hotel Search Form Area -->
        <div class="hotel-search-form-area">
            <div class="container-fluid">
                <div class="hotel-search-form"  id="check_form">
                    <form method="get" action="check_room.php">
                        <div class="row justify-content-between align-items-end">
                        <div class="input-daterange" id="datepicker">
                            <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <label for="checkIn">Check In </label> <br>
                                <?php 
                                    if($error['checkin'] != Null)
                                         {   
                                    ?>
                                       <small class="text-danger checkin-error"><i class="fas fa-exclamation-triangle"></i> <?php echo $error['checkin'];?></small>
                                <?php
                                        }
                                ?>
                                <input type="text" class="form-control text-left" id="checkIn" name="checkin" placeholder="Check-In" value="<?php echo date('Y-m-d', time()); ?>" required>
                                
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <label for="checkOut">Check Out</label><br>
                                <?php 
                                    if($error['checkout'] != Null)
                                         {   
                                    ?>
                                        <small class="text-danger checkout-error"><i class="fas fa-exclamation-triangle"></i> <?php echo $error['checkout'];?></small>
                                <?php
                                        }
                                ?>
                                <input type="text" class="form-control text-left" id="checkOut" name="checkout" placeholder="Check-Out" value="<?php echo date('Y-m-d', time()); ?>" required>
                            </div>
                            </div>
                        </div>
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="room">Room Type</label>
                                <select name="room_type" id="room" class="form-control">
                                <?php
                                    $query="select * from room_type";
                                    $go_query=mysqli_query($connection,$query);
                                    while ($out=mysqli_fetch_array($go_query)){
                                        $db_room_id=$out['id'];
                                        $db_room_type=$out['type'];
                                ?>
                                    <option value="<?php echo $db_room_id;?>"><?php echo $db_room_type;?></option>
                                <?php 
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="col-12 col-md-3">
                                <button type="submit" name="check_room" value="submit" class="form-control btn roberto-btn w-100">Check Availability</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>