<?php  include('inc/first.php'); ?>
  <!-- Navigation-->
  <?php include('inc/navbar.php');  ?>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Student Entry Form</li>
      </ol>
	  
	   <?php  
if(isset($_POST['submit'])){
	if($_POST['fname']=="" || $_POST['lname']==""){
		echo "<script>alert('Plese fill all the field')</script>";
	}else{		
		extract ($_POST);		
		$con->query("INSERT INTO sms_teacher VALUES(NULL,'$fname','$lname','$sex','$dob','$nationality','$division','$district','$thana','$address','$national_id','$brth_id','$passport_no','$shift','$sub_one','$sub_two','$sub_three','$sub_four','$sub_five',NULL,NULL)");
		
	}
}
?>	  
	  
	<div class="card mb-3">
       <div class="card-header"><i class="fa fa-form"></i> My Form</div>
      <div class="card-body">
       <div class="form-responsive">
       <form method="post">
      <div class="border bg-light" style="padding:10px;">
		<div class="card-header bg-secondary"><i class="fa fa-form"></i> Persional Information</div>
          <div class="form-group">		  
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input class="form-control" name="fname" type="text" placeholder="Enter first name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" name="lname" type="text" placeholder="Enter last name">
              </div>
            </div>
          </div>
		   <div class="form-group">		  
            <div class="form-row">
              <div class="col-md-6">
                <label>Gender</label>
                <p>Male&nbsp;<input name="sex" type="radio" value="male">
				Female&nbsp;<input name="sex" type="radio" value="female"></p>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Date of Birth</label>
                <input class="form-control" name="dob" type="date">
              </div>
            </div>
          </div>
		   <div class="form-group">		  
            <div class="form-row">
              <div class="col-md-6">
                <label>Nationality</label>
                <input class="form-control" name="nationality" type="text">
              </div>
            </div>
          </div>
		  </div>
		<div class="border bg-light" style="padding:10px;">
		<div class="card-header bg-secondary"><i class="fa fa-form"></i>Contact Information</div>		  
		  <div class="form-group">		  
            <div class="form-row">
              <div class="col-md-6">
                <label>Division </label>
                <select name="division" id="divi" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sms_division');
					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->name;?></option>
					<?php endwhile;?>					
				</select>
              </div>
               <div class="col-md-6">
                <label>District </label>
                <select name="district" id="dis" class="form-control">
					<option value="" hidden="">Select One</option>				
				</select>
              </div>
            </div>
			</div>
			<div class="form-group">		  
            <div class="form-row">
              <div class="col-md-6">
                <label>Thana</label>
                <select name="thana" id="thn" class="form-control">
					<option value="" hidden="">Select One</option>
				</select>
              </div>
               <div class="col-md-6">
                <label>Address </label>
                <textarea name="address" class="form-control"></textarea>
              </div>
            </div>
          </div>
		  <div class="form-group">		  
            <div class="form-row">
              <div class="col-md-6">
                <label>National Id</label>
                <input class="form-control" name="national_id" type="text">
              </div>
			   <div class="col-md-6">
                <label>Birth Register Id</label>
                <input class="form-control" name="brth_id" type="text">
              </div>
			   <div class="col-md-6">
                <label>Passport No</label>
                <input class="form-control" name="passport_no" type="text">
              </div>
            </div>
          </div>
		  </div>
		  <div class="border bg-light" style="padding:10px;">
		<div class="card-header bg-secondary"><i class="fa fa-form"></i>Others Information</div>				
		  <div class="form-group">		  
            <div class="form-row">
              <div class="col-md-6">
                <label>Shift</label>
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
                <label>Subject One</label>
                <select name="sub_one" class="form-control">
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
                <label>Subject Two</label>
                <select name="sub_two" class="form-control">
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
                <label>Subject Three</label>
                <select name="sub_three" class="form-control">
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
                <label>Subject Four</label>
                <select name="sub_four" class="form-control">
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
                <label>Subject Five</label>
                <select name="sub_five" class="form-control">
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
		  </div>
          <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
		</form>
	  </div>
    </div>
        
   </div>
	  <script>
	$(document).ready(function() {
		$("#divi").change(function(){
			//if($(this).val()=='') return;
			$.get('address_info/district.php',{divid:$(this).val()},function(data){$("#dis").html(data)});
		});
		
		$("#dis").change(function(){
			//if($(this).val()=='') return;
			$.get('address_info/thana.php',{dist_id:$(this).val()},function(data){$("#thn").html(data)});
		});
		
		$("#class_id").change(function(){
			//if($(this).val()=='') return;
			$.get('address_info/subject_list.php',{sub_id:$(this).val()},function(data){$("#sub_stage").html(data)});
		});
	});
</script>
	   <!-- /.content-wrapper-->
  
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?php  include('inc/footer.php'); ?>
   <?php  include('inc/last.php'); ?>
