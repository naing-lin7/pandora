<?php
 session_start();
 
 include '../include/connection.php';
 include '../include/function.php';

 ?>
        <!--  /*Update Button Click*/  -->  
        <?php
			if(isset($_GET['action'])&&$_GET['action']=='delete'){
				del_room();
			}
			if(isset($_POST['update_room']))
 			{
				update_room();
			}
        ?>
        <!--  /*Update Button Click */  -->
 
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../assets/bootstrap.min.css">
<script type="text/javascript" src="../assets/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/jquery.js"></script>

</style>
</head>

<body>
<!--  /* header */  -->
<?php
   
?>
  <div class="container top">
  <div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="page-header">
       <h2>Welcome to Admin
       <span class="text-danger">
       
       <?php
	   if(isset($_SESSION['admin'])){
		   echo $_SESSION['admin'];
		   
	   }
	   else{
		   $_SESSION['admin']='';
	   }
	   ?></span></h2>
      </div>
    </div>
  <!--  /* header */  -->  
  <?php
  		if(isset($_POST['add_room']))
		{
			insert_room();
		}
  ?>
  
          <div class="row">
          
          			<div class="col-md-6">
                    	<form method="post">
                        		<div class="form-group">
                                	<label>Add Room</label>
                                    <input type="text" name="room_type" class="form-control">
                                </div>
                                <button type="submit" name="add_room" class="btn btn-primary">
                                Add Room
                                </button>
                        </form>
                        <hr/>
                          <!--  /* Update Category*/  --> 
                          <?php if(isset($_GET['action'])&&$_GET['action']=='edit'){
						  	
								$room_id=$_GET['r_id'];
								$query="select * from room_type where id='$room_id'";
								$go_query=mysqli_query($connection,$query);
								while
								($out=mysqli_fetch_array($go_query))
								{
									$room_name=$out['type'];
									?>
                            
                        
                        <form method="post">
                        		<div class="form-group">
                                	<label>Update Category</label>
                                    <input type="text" name="room_name" class="form-control" value="<?php echo $room_name ?>">
                                </div>
                                <button type="submit" name="update_room" class="btn btn-primary">
                                Update Category
                                </button>
                        </form>
                        <?php
								}
							}
							?>
                        
                        <!--  /* Update Category*/  --> 
                        
                    </div>
                    
                    <div class="col-md-6">
                    	<table class="table table-hover" >
                        	<tr>
                            	<th>ID</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                            <!--  /* Table call ID Name Edit*/  --> 
                            
                            	<?php
										$query="select*from room_type";
										$go_query=mysqli_query($connection,$query);
										while($row=mysqli_fetch_array($go_query))
											{
												$room_id=$row['id'];
												$room_type=$row['type'];
												echo"<tr>";
												echo"<td>{$room_id}</td>";
												echo"<td>{$room_type}</td>";
												echo"<td><a href='room_type.php?action=delete&r_id={$room_id}'
												onclick=\"return confirm('Are you sure?')\")>X</a>||
												<a href='room_type.php?action=edit&r_id={$room_id}'>Edit</a></td>";
												echo"</tr?>";
												
											}
								?>
                            
                            <!--  /* Table call*/  --> 
                        		
                        </table>
                    
                    </div>
          </div> 
   <!--  /* end of row */  -->        

</body>
</html>