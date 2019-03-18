<?php  include('inc/first.php'); ?>
  <!-- Navigation-->
  <?php include('inc/navbar.php');  ?>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Notice</li>
      </ol>
	  <?php  if(isset($_POST['submit'])){
		  if($_POST['notice_title']==""){
			  echo "<script>alert('Please Type a Notice title')</script>";
		  }else{
			  $title=$_POST['notice_title'];
			  $desc=$_POST['noticedes'];
			  $notice_type=$_POST['notice_type'];
			 $done= $con->query("INSERT INTO sms_notice VALUE(null,'$notice_type','$title','$desc',null,null)");
			 if($done){ echo "<script>alert('Notice Successfully Submited')</script>";}
		  }		  
	  } ?>
	<div class="card mb-3">
       <div class="card-header"><i class="fa fa-form"></i>Notice Published Form</div>
      <div class="card-body">
       <div class="form-responsive">
        <form method="post">          
          <div class="form-group">
            <label>Notice Title</label>
            <input class="form-control" type="text" name="notice_title">
          </div>
		  <div class="form-group">
            <label for="exampleInputEmail1">Notice Descreption</label>
            <textarea class="form-control" name="noticedes"></textarea>
          </div>
		  <div class="form-group">
            <label for="exampleInputEmail1">Notice Type</label>
            <select name="notice_type" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sms_notice_type');
					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->type;?></option>
					<?php endwhile;?>					
				</select>
          </div>
          <button type="submit" name="submit" class="btn btn-primary btn-block">Published Notice</button>
        </form>
      </div>
	 </div>
    </div>
	  
	   <!-- /.content-wrapper-->
  
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?php  include('inc/footer.php'); ?>
   <?php  include('inc/last.php'); ?>
