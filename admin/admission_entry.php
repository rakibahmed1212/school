<?php  include('inc/first.php'); ?>
  <!-- Navigation-->
  <?php include('inc/navbar.php');  ?>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Admission</li>
      </ol>	  
	  <?php  if(isset($_POST['submit'])){
		  if($_POST['st_name']==""||$_POST['session_year']==""||$_POST['section_name']==""||$_POST['admission_fee']==""||$_POST['ad_date']==""){
			  echo "<script>alert('Please fill all the field')</script>";
		  }else{
			  $st_name=$_POST['st_name'];
			  $session_year=$_POST['session_year'];
			  $section_name=$_POST['section_name'];
			  $admission_fee=$_POST['admission_fee'];
			  $ad_date=$_POST['ad_date'];
			  $done= $con->query("INSERT INTO admission VALUE(null,'$st_name','$session_year','$section_name','$admission_fee','$ad_date')");
			 if($done){ echo "<script>alert('Admission Success')</script>";}
		  }		  
	  } ?>
	<div class="card mb-3">
       <div class="card-header"><i class="fa fa-form"></i>Admission</div>
      <div class="card-body">
       <div class="form-responsive"> 
        <form method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label>Student Name</label>
                <select name="st_name" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM student_list');

					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->fname;?>&nbsp;<?php echo $row1->lname;?></option>
					<?php endwhile;?>
					
				</select>
              </div>
              <div class="col-md-6">
                <label>Session</label>
                <select name="session_year" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM session_table');

					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->session_year;?></option>
					<?php endwhile;?>
					
				</select>
              </div>
			  <div class="col-md-6">
                <label>Section</label>
                <select name="section_name" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM section_table');

					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->section_name;?></option>
					<?php endwhile;?>
					
				</select>
              </div>
			  <div class="col-md-6">
                <label>Admission Fee</label>
                <input class="form-control" type="text" name="admission_fee">
              </div>
			  <div class="col-md-6">
                <label>Admission Date</label>
                <input class="form-control" type="date" name="ad_date">
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
