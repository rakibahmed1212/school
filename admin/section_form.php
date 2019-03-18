<?php  include('inc/first.php'); ?>
  <!-- Navigation-->
  <?php include('inc/navbar.php');  ?>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Section</li>
      </ol>
	  
	  <?php  if(isset($_POST['submit'])){
		  if($_POST['sec_name']==""||$_POST['sec_desc']==""){
			  echo "<script>alert('Please fill all the field')</script>";
		  }else{
			  $title=$_POST['sec_name'];
			  $desc=$_POST['sec_desc'];
			  $done= $con->query("INSERT INTO section_table VALUE(null,'$title','$desc')");
			 if($done){ echo "<script>alert('Section Successfully Inserted')</script>";}
		  }
		  
		  
	  } ?>
	<div class="card mb-3">
       <div class="card-header"><i class="fa fa-form"></i>Section</div>
      <div class="card-body">
       <div class="form-responsive">
        <form method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Section Name</label>
                <input class="form-control" type="text" name="sec_name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Section Details</label>
                <input class="form-control" type="text" name="sec_desc">
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
