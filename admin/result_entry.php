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
	if($_POST['teacher_name']=="" || $_POST['writen']==""){
		echo "<script>alert('Plese fill all the field')</script>";
	}else{			
		extract($_POST);
		$con->query("INSERT INTO sms_result VALUES(NULL,'$session_name','$exam_name','$subject','$teacher_name','$class_name','$shift','$roll','$writen','$mcq','$practical','$viba',NULL,NULL)");		
	}
}
?>		  
	<div class="card mb-3">
       <div class="card-header"><i class="fa fa-form"></i> My Form</div>
      <div class="card-body">
       <div class="form-responsive">
        <form method="post">
          <div class="border bg-light" style="padding:10px;">
			<div class="card-header bg-secondary"><i class="fa fa-form"></i>Result Entry</div>
			  <div class="form-group">
				<label>Teachers Name</label>
                <select name="teacher_name"  class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sms_teacher');

					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->fname;?>&nbsp;<?php echo $row1->lname;?></option>
					<?php endwhile;?>
					
				</select>
			  </div>
			  <div class="form-row">
			     <div class="col-md-6">
					<label>Select Class</label>
                <select name="class_name" id="class_id" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sms_class');

					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->class_name;?></option>
					<?php endwhile;?>
					
				</select>
				  </div>
				  <div class="col-md-6">
					<label for="exampleInputName">Exam Name</label>
					<select name="exam_name" id="class_id" class="form-control">
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
					<label for="exampleInputName">Section</label>
					 <select name="shift" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sms_section');
					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->section;?></option>
					<?php endwhile;?>					
				</select>
				  </div>
				  <div class="col-md-6">
					<label for="exampleInputName">Session</label>
					 <select name="session_name" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sms_session');
					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->session;?></option>
					<?php endwhile;?>					
				</select>
				  </div>
			</div>
           </div>
		<div class="border bg-light" style="padding:10px;">
		<div class="card-header bg-secondary"><i class="fa fa-form"></i>Result Information</div>
          <div class="form-group">		  
            <div class="form-row">
              <div class="col-md-6">
					<label for="exampleInputName">Student Roll No</label>
					<select name="roll" id="student_roll" class="form-control">
					<option value="" hidden="">Select One</option>				
				</select>
			</div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Subject</label>
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
            </div>
          </div>
		   <div class="form-group">		  
            <div class="form-row">
              <div class="col-md-6">
                <label>Mcq Marks</label>
                <input class="form-control" name="mcq" type="text">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Writen Marks</label>
                <input class="form-control" name="writen" type="text">
              </div>
            </div>
          </div>
		   <div class="form-group">		  
            <div class="form-row">
              <div class="col-md-6">
                <label>Practical Marks</label>
                <input class="form-control" name="practical" type="text">
              </div>
			  <div class="col-md-6">
                <label>Viba Marks</label>
                <input class="form-control" name="viba" type="text">
              </div>
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
		$("#class_id").change(function(){
			//if($(this).val()=='') return;
			$.get('address_info/student_info.php',{divid:$(this).val()},function(data){$("#student_roll").html(data)});
		});		
	});
</script>
	   <!-- /.content-wrapper-->
  
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?php  include('inc/footer.php'); ?>
   <?php  include('inc/last.php'); ?>
