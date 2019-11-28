<?php
  error_reporting(1);
  include ("../database/connection.php");
  include ("php_scripts/auth.php");
  include ("function.php");
  
  include ("layouts/css.php");
  include ("layouts/header.php");
  include ("layouts/side_bar.php");

  if(addRoom() == "success"){
    echo "<script> location.href='all_rooms.php'; </script>";
    exit;
  }
  addRoom();
?>

    <div id="content-wrapper">

    <div class="container-fluid">

<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="/admin/dashboard.php">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Add Room</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
   <strong>Add Room</strong>
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
          <input type="text" id="room_name" class="form-control" placeholder="room_name" name="room_name" autofocus="autofocus" value="<?php if(!empty($room_name)){ echo $room_name; } ?>">
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
            <option value="<?php echo $row_cat['id']; ?>" <?php if($row_cat['id'] == $room_category){ echo "selected='true'";}  ?>><?php echo $row_cat['type']; ?></option>
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
          <input type="number" id="price" class="form-control" placeholder="price" name="price" value="<?php if(!empty($price)){ echo $price; } ?>">
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
            <option value="1" <?php if($status == 1){ echo "selected='true'"; } ?>>Avaliable</option>
            <option value="0" <?php if($status == 0){ echo "selected='true'"; } ?>>Not Avaliable</option>
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
          <textarea class="form-control summernote" placeholder="Room Detail" name="room_detail" rows="4"><?php if(!empty($room_detail)){ echo $room_detail; } ?></textarea>
        </div>
      </div>
  </div>
  <div class="form-group mt-3">
    <label for="">Room Facilities</label>
    <div class="form-row">
    <div class="col-md-12">
        <div class="form-label-group">
          <textarea class="form-control summernote" placeholder="Facilities" name="room_facilities" rows="4"><?php if(!empty($room_facilities)){ echo $room_facilities; } ?></textarea>
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
 <div class="row d-flex justify-content-end">
     <div class="col-md-2">
        <a href="all_rooms.php" class="btn btn-danger btn-block"> <i class="fas fa-times-circle"></i> Cancel</a>
     </div>
    <div class="col-md-2 ">
        <button type="submit" name="add_room" class="btn btn-primary btn-block"> <i class="fas fa-plus-circle    "></i> Add Room</button>
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