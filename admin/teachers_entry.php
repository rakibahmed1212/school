<?php  include('inc/first.php'); ?>
  <!-- Navigation-->
  <?php include('inc/navbar.php');  ?>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Teachers</li>
      </ol>	  
	  <?php  if(isset($_POST['submit'])){
		  if($_POST['tech_name']==""||$_POST['tech_phone']==""||$_POST['tech_address']==""||$_POST['tech_email']==""||$_POST['tech_pass']==""||$_POST['sub_name']==""||$_POST['sec_name']==""){
			  echo "<script>alert('Please fill all the field')</script>";
		  }else{
			  $tech_name=$_POST['tech_name'];
			  $tech_phone=$_POST['tech_phone'];
			  $tech_address=$_POST['tech_address'];
			  $tech_email=$_POST['tech_email'];
			  $tech_pass=$_POST['tech_pass'];
			  $sub_name=$_POST['sub_name'];
			  $sec_name=$_POST['sec_name'];
			  $done= $con->query("INSERT INTO teachers_table VALUE(null,'$tech_name','$sub_name','$sec_name','$tech_phone','$tech_address','$tech_email','$tech_pass')");
			 if($done){ echo "<script>alert('Teachers Successfully Registered')</script>";}
		  }		  
	  } ?>
	<div class="card mb-3">
       <div class="card-header"><i class="fa fa-form"></i>Teachers</div>
      <div class="card-body">
       <div class="form-responsive"> 
        <form method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Teachers Name</label>
                <input class="form-control" type="text" name="tech_name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Teachers Phone</label>
                <input class="form-control" type="text" name="tech_phone">
              </div>
			  <div class="col-md-6">
                <label for="exampleInputLastName">Teachers Full Address</label>
                <textarea class="form-control" type="text" name="tech_address"></textarea>
              </div>
			  <div class="col-md-6">
                <label for="exampleInputLastName">Teachers Email</label>
                <input class="form-control" type="text" name="tech_email">
              </div>
			  <div class="col-md-6">
                <label for="exampleInputLastName">Password</label>
                <input class="form-control" type="password" name="tech_pass">
              </div>
			  <div class="col-md-6">
                <label>Subject</label>
                <select name="sub_name" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sub_withclass');

					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->class_name;?>&nbsp;&nbsp;&nbsp;<?php echo $row1->subject_name;?></option>
					<?php endwhile;?>
					
				</select>
              </div>
			  <div class="col-md-6">
                <label>Section</label>
                <select name="sec_name" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM section_table');

					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->section_name;?></option>
					<?php endwhile;?>
					
				</select>
              </div>
            </div>
          </div>
          <button name="submit" class="btn btn-primary btn-block" type="submit">Register</button>
        </form>
      </div>
	 </div>
    </div>
        
   </div>
	  
	   <!-- /.content-wrapper-->
  
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?php  include('inc/footer.php'); ?>
   <?php  include('inc/last.php'); ?>
