<?php  include('inc/first.php'); ?>
  <!-- Navigation-->
  <?php  
	if(isset($_POST['submit'])){
		
				$id=$_POST['id'];
				$slider_image = "../images/".$_FILES['slider_image']['name'];
					$slider_temp = $_FILES['slider_image']['tmp_name'];
			move_uploaded_file($slider_temp, $slider_image);
				$con->query("UPDATE sms_slider_images SET image='$slider_image' WHERE id='$id'");
				
		
		}?>
  <?php include('inc/navbar.php');  ?>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Form</li>
      </ol>
	<div class="card mb-3">
       <div class="card-header"><i class="fa fa-form"></i> My Form</div>
      <div class="card-body">
       <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>Slider Image</th>
				  <th></th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Serial No.</th>
                  <th>Slider Image</th>
				  <th></th>
                </tr>
              </tfoot>
              <tbody>
				<?php  $data=$con->query("SELECT * FROM sms_slider_images"); 
				$slno=1;
					while($row=$data->fetch_object()):
				  ?>
                <tr>
                  <td><?php  echo $slno++; ?></td>
                  <td>
				  <img src="<?php echo $row->image;  ?>" class="img-responsive" height="100px" width="300px"></td>
				  <td>
					<form method="post"  enctype="multipart/form-data">
					  <div class="form-group">
						<label>Cnange Slider Image</label>
						<input type="hidden" value="<?php  echo $row->id; ?>" name="id">
						<input type="file" name="slider_image" required>
						<button class="btn btn-primary" name="submit" type="submit">Change</button>
					  </div>          
					 </form>
					</td>
                </tr>
				<?php  endwhile; ?>
              </tbody>
            </table>
          </div>
	 </div>
    </div>        
   </div>	  
	   <!-- /.content-wrapper-->  
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?php  include('inc/footer.php'); ?>
   <?php  include('inc/last.php'); ?>
