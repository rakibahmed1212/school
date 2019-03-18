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
	if($_POST['teacher_name']=="" || $_POST['subject']==""){
		echo "<script>alert('Plese fill all the field')</script>";
	}else{			
		extract($_POST);
		$con->query("INSERT INTO sms_class_schedule VALUES(NULL,'$class_name','$teacher_name','$shift','$section','$subject','$day','$class_room','$class_time',NULL,NULL)");		
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
					<label>Teacher Name</label>
                <select name="teacher_name" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sms_teacher');
					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->fname;?>&nbsp;<?php echo $row1->lname;?></option>
					<?php endwhile;?>
					
				</select>
				  </div>
				  <div class="col-md-6">
					<label for="exampleInputName">Shift</label>
					<select name="shift" id="shift_id" class="form-control">
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
					<label for="exampleInputName">Section</label>					 
					<select name="section" id="section" class="form-control">
					<option value="" hidden="">Select One</option>				
				    </select>
				  </div>
				  <div class="col-md-6">
					<label for="exampleInputName">Subject</label>
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
					<label for="exampleInputName">Day</label>
					 <select name="day" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sms_day_of_week');
					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->day;?></option>
					<?php endwhile;?>					
				</select>
				  </div>
				  <div class="col-md-6">
					<label for="exampleInputName">Class Room</label>
					 <select name="class_room" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sms_room');
					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->room_no;?>&nbsp;<?php echo $row1->purpose;?></option>
					<?php endwhile;?>					
				</select>
				  </div>
				  <div class="col-md-6">
					<label for="exampleInputName">Class Time</label>
					 <select name="class_time" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sms_class_time');
					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->class_time;?></option>
					<?php endwhile;?>					
				</select>
				  </div>
			</div>
           </div>		
          <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
		</form>
	  </div>
    </div>
        
   </div>
	  <script>
	$(document).ready(function() {
		$("#shift_id").change(function(){
			//if($(this).val()=='') return;
			$.get('address_info/section_info.php',{divid:$(this).val()},function(data){$("#section").html(data)});
		});		
	});
</script>
	   <!-- /.content-wrapper-->
  
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?php  include('inc/footer.php'); ?>
   <?php  include('inc/last.php'); ?>
