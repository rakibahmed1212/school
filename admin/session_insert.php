<?php  include('inc/first.php'); ?>
  <!-- Navigation-->
  <?php include('inc/navbar.php');  ?>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Session</li>
      </ol>
	  
	  <?php  if(isset($_POST['submit'])){
		  if($_POST['sess_year']==""||$_POST['sess_start']==""||$_POST['sess_end']==""){
			  echo "<script>alert('Please fill all the field')</script>";
		  }else{
			  $sess_year=$_POST['sess_year'];
			  $sess_start=$_POST['sess_start'];
			  $sess_end=$_POST['sess_end'];
			  $done= $con->query("INSERT INTO session_table VALUE(null,'$sess_year','$sess_start','$sess_end')");
			 if($done){ echo "<script>alert('Section Successfully Inserted')</script>";}
		  }
		  
		  
	  } ?>
	<div class="card mb-3">
       <div class="card-header"><i class="fa fa-form"></i>Session</div>
      <div class="card-body">
       <div class="form-responsive">
        <form method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label>session Year</label>
                <input class="form-control" type="text" name="sess_year">
              </div>
              <div class="col-md-6">
                <label>Start Date</label>
                <input class="form-control" type="date" name="sess_start">
              </div>
			  <div class="col-md-6">
                <label>End Date</label>
                <input class="form-control" type="date" name="sess_end">
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
