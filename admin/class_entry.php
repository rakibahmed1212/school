<?php  include('inc/first.php'); ?>
  <!-- Navigation-->
  <?php include('inc/navbar.php');  ?>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Class Entry</li>
      </ol>
	<div class="card mb-3">
       <div class="card-header"><i class="fa fa-form"></i>Class Entry</div>
      <div class="card-body">
	  <?php  if(isset($_POST['submit'])){
		  if($_POST['clname']==""){
			  echo "<script>alert('Please Fill The Class Name')</script>"; 
		  }else{
			  $cls=$_POST['clname'];
			  $done=$con->query("INSERT INTO class_list VALUE(null,'$cls')");
			  if($done){
				 echo "<script>alert('Class Insert Successfully')</script>"; 
			  }
		  }
	  }?>
       <div class="form-responsive">
        <form method="post">
          <div class="form-group">
             <label for="exampleInputLastName">Class Name</label>
             <input class="form-control" id="exampleInputLastName" type="text" name="clname" aria-describedby="nameHelp" placeholder="Enter Class name">            
          </div>
         <button class="btn btn-primary btn-block" name="submit" type="submit">Input Class</button>
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
