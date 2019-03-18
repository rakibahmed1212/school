<?php  include('inc/first.php'); ?>
  <!-- Navigation-->
  <?php include('inc/navbar.php');  ?>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Class Routine</li>
      </ol>		  
	<div class="card mb-3">
       <div class="card-header"><i class="fa fa-form"></i> My Form</div>
      <div class="card-body">
       <div class="form-responsive">       	
        <form method="get" action="print_result.php" target="_blank">
          <div class="border bg-light" style="padding:10px;">
			<div class="card-header bg-secondary"><i class="fa fa-form"></i>Class Routine</div>
			  <div class="form-row">
			     <div class="col-md-2">
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
				  <div class="col-md-2">
					<label>Session</label>
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
				  <div class="col-md-2">
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
				  <div class="col-md-2">
					<label for="exampleInputName">Section</label>					 
					<select name="section" id="section" class="form-control">
					<option value="" hidden="">Select One</option>				
				    </select>
				  </div>
				  <div class="col-md-2">
					<label for="exampleInputName">Student</label>
					<select name="student" id="st_id" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sms_student');

					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->fname;?>&nbsp;<?php echo $row1->lname;?></option>
					<?php endwhile;?>
					
				</select>
				  </div>
				  <div class="col-md-2">
				  <label></label>
					<input type="submit" id="submit_id" class="btn btn-success btn-block" name="submit" value="submit">
				  </div>
			</div>
           </div>		
		</form>
	  </div>
    </div>
        
   </div>
   
	  <script>
	jQuery(document).ready(function() {
		jQuery("#shift_id").change(function(){
			//if($(this).val()=='') return;
			jQuery.get('address_info/section_info.php',{divid:jQuery(this).val()},function(data){jQuery("#section").html(data)});
		});
		jQuery("#class_id").change(function(){
			//if($(this).val()=='') return;
			jQuery.get('address_info/student_info.php',{divid:jQuery(this).val()},function(data){jQuery("#st_id").html(data)});
		});
	});
</script>
	   <!-- /.content-wrapper-->
  
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?php  include('inc/footer.php'); ?>
   <?php  include('inc/last.php'); ?>
