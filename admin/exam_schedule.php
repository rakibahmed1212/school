<?php  include('inc/first.php'); ?>
  <!-- Navigation-->
  <?php include('inc/navbar.php');  ?>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Result Entry Form</li>
      </ol>
	  
	   <?php  
if(isset($_POST['submit'])){
	if($_POST['class_name']=="" || $_POST['subject']==""){
		echo "<script>alert('Plese fill all the field')</script>";
	}else{			
		extract($_POST);
		$con->query("INSERT INTO sms_exam_schedule VALUES(NULL,'$exam_type','$class_name','$subject','$shift','$date','$start_time','$end_time',NULL,NULL)");		
	}
}
?>		  
	<div class="card mb-3">
       <div class="card-header"><i class="fa fa-form"></i> My Form</div>
      <div class="card-body">
       <div class="form-responsive">
        <form method="post">
          <div class="border bg-light" style="padding:10px;">
			<div class="card-header bg-secondary"><i class="fa fa-form"></i>Class Schedule Entry</div>
			  <div class="form-group">
				<label>Class</label>
                <select name="class_name"  class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sms_class');

					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->class_name;?></option>
					<?php endwhile;?>
					
				</select>
			  </div>
			  <div class="form-row">
			     <div class="col-md-6">
					<label>Subject</label>
                <select name="subject" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sms_subject');
					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->subject;?></option>
					<?php endwhile;?>
					
				</select>
				  </div>
				  <div class="col-md-6">
					<label for="exampleInputName">Shift</label>
					<select name="shift" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sms_shift');

					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->shift;?></option>
					<?php endwhile;?>
					
				</select>
				  </div>
				  <div class="col-md-6">
					<label for="exampleInputName">Date</label>					 
					<input type="date" class="form-control" name="date">
				  </div>
				  <div class="col-md-6">
					<label for="exampleInputName">Exam Type</label>
					 <select name="exam_type" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sms_exam_type');
					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->type;?></option>
					<?php endwhile;?>					
				</select>
				  </div>			  
				  <div class="col-md-6">
					<label for="exampleInputName">Start Time</label>
					 <input type="time" class="form-control" name="start_time">
				  </div>
				  <div class="col-md-6">
					<label for="exampleInputName">End Time</label>
					 <input type="time" class="form-control" name="end_time">
				  </div>
			</div>
           </div>		
          <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
		</form>
	  </div>
    </div>        
   </div>
	   <!-- /.content-wrapper-->
  
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?php  include('inc/footer.php'); ?>
   <?php  include('inc/last.php'); ?>
