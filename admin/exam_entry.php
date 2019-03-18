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
		  if($_POST['st_name']==""||$_POST['exm_name']==""||$_POST['sub_name']==""||$_POST['tech_name']==""||$_POST['result']==""){
			  echo "<script>alert('Please fill all the field')</script>";
		  }else{
			  $st_name=$_POST['st_name'];
			  $exm_name=$_POST['exm_name'];
			  $sub_name=$_POST['sub_name'];
			  $result=$_POST['result'];
			  $tech_name=$_POST['tech_name'];
			  $done= $con->query("INSERT INTO exam_table VALUE(null,'$exm_name','$sub_name','$st_name','$result','$tech_name')");
			 if($done){ echo "<script>alert('Result Successfully Inserted')</script>";}
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
                <label>Exam Name</label>
                <input class="form-control" type="text" name="exm_name">
              </div>
              <div class="col-md-6">
                <label>Subject</label>
                <select name="sub_name" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sub_withclass');

					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->subject_name;?>&nbsp;<?php echo $row1->class_name;?></option>
					<?php endwhile;?>
					
				</select>
              </div>
              <div class="col-md-6">
                <label>Student</label>
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
                <label>Result</label>
                <input class="form-control" type="text" name="result">
              </div>
			  <div class="col-md-6">
                <label>Teacher's Name</label>
                <select name="tech_name" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM teachers_table');

					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->teachers_name;?></option>
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
