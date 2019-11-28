<?php
  error_reporting(1);
  include ("../database/connection.php");
  include ("php_scripts/auth.php");
  include ("function.php");
  
  include ("layouts/css.php");
  include ("layouts/header.php");
  include ("layouts/side_bar.php");

  if(updateRoom() == "success"){
    echo "<script> location.href='all_rooms.php'; </script>";
    exit;
  }
  updateRoom();
 $id = $_GET['id'];
 $query        = "select * from room where id='$id'";
 $get_roomdata = mysqli_query($connection,$query);
 $room         = mysqli_fetch_assoc($get_roomdata);

?>

    <div id="content-wrapper">

    <div class="container-fluid">

<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="/admin/dashboard.php">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Edit Room</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
   <strong>Edit Room</strong>
</div>
  <div class="card-body">
  <?php  
    if($create_message != Null){
      ?>
      <div class="alert alert-success" role="alert">
        <?php echo $create_message; ?>
      </div>
  <?php
    }
  ?>
  <form method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" id="room_name" class="form-control" placeholder="room_name" name="room_name" autofocus="autofocus" value="<?php if(!empty($room['name'])){ echo $room['name']; } ?>">
          <label for="room_name">Room Name</label>
          <?php if($room_name_err != Null){ ?>
            <small class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo $room_name_err;?> </small>
          <?php  } ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-label-group">
          <select id="" class="form-control select-input" name="room_category" >
          <option value="">Choose Room Category</option>
            <?php 
            $query          = "select * from room_type";
            $get_category   = mysqli_query($connection,$query);
            while($row_cat = mysqli_fetch_array($get_category)){        
            ?>
            <option value="<?php echo $row_cat['id']; ?>" <?php if($row_cat['id'] == $room['room_type']){ echo "selected='true'";}  ?>><?php echo $row_cat['type']; ?></option>
            <?php } ?>
          </select>
          <?php if($room_category_err != Null){ ?>
            <small class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo $room_category_err;?> </small>
          <?php  } ?>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="number" id="price" class="form-control" placeholder="price" name="price" value="<?php if(!empty($room['price'])){ echo $room['price']; } ?>">
          <label for="price">Price</label>
          <?php if($price_err != Null){ ?>
            <small class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo $price_err;?> </small>
          <?php  } ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-label-group">
          <select id="" class="form-control select-input" name="status" >
            <option value="">Choose Status</option>
            <option value="1" <?php if($room['status'] == 1){ echo "selected='true'"; } ?>>Avaliable</option>
            <option value="0" <?php if($room['status'] == 0){ echo "selected='true'"; } ?>>Not Avaliable</option>
          </select>
          <?php if($status_err != Null){ ?>
            <small class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo $status_err;?> </small>
          <?php  } ?>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="">Room Detail</label>
    <div class="form-row">
    <div class="col-md-12">
        <div class="form-label-group">
          <textarea class="form-control summernote" placeholder="Room Detail" name="room_detail" rows="4"><?php if(!empty($room['room_detail'])){ echo $room['room_detail']; } ?></textarea>
        </div>
      </div>
  </div>
  <div class="form-group mt-3">
    <label for="">Room Facilities</label>
    <div class="form-row">
    <div class="col-md-12">
        <div class="form-label-group">
          <textarea class="form-control summernote" placeholder="Facilities" name="room_facilities" rows="4"><?php if(!empty($room['facilities'])){ echo $room['facilities']; } ?></textarea>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-row">
      <div class="col-md-12">
        <div class="form-label-group">
          <input type="file" id="gallery" class="form-control" placeholder="Gallery" multiple accept=".jpg,.png,.jpeg,.gif" name="gallery[]">
          <label for="gallery">Gallery</label>
        </div>
      </div>
    </div>
  </div>
  <div class="row p-2">
            <div class="col-md-12">
            <h5>Room Gallery</h5>
            </div>
           <?php $gallery = $room['gallery'];
           foreach(explode(',',$gallery) as $name){
               ?>
                  <div class="col-md-2 mb-3">
                    <img src="<?php echo 'room_gallery/'.$name;?>" alt="" width="100%" class="room-image">  
                  </div>
               <?php
           }
           ?>
           </div>
 <div class="row d-flex justify-content-end">
     <div class="col-md-2">
        <a href="all_rooms.php" class="btn btn-danger btn-block"> <i class="fas fa-times-circle"></i> Cancel</a>
     </div>
    <div class="col-md-2 ">
        <button type="submit" name="update_room" class="btn btn-primary btn-block"> <i class="fas fa-plus-circle    "></i> Update Room</button>
    </div>
 </div>
</form>
  </div>
</div>

</div>
<!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- Bootstrap core JavaScript-->
 <?php
  include ("layouts/footer.php"); 
  include ("layouts/js.php");
  ?>