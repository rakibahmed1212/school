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
	  <?php   	
	   if(isset($_POST['submit'])){
		  if($_POST['subname']=="" || $_POST['clname']==""){
			  echo "<script>alert('Please Fill All The Field')</script>";
			  $clname=$_POST['clname'];
		  $query=$con->query("SELECT * FROM `subject_list` WHERE subject_name='Bangla' AND class_id='$clname'");
		  $quer=$con->query("SELECT * FROM `subject_list` WHERE subject_name='English' AND class_id='$clname'");
		  $que=$con->query("SELECT * FROM `subject_list` WHERE subject_name='Math' AND class_id='$clname'");
		  echo $subl=$query->num_rows;
		  $sub2=$quer->num_rows;
		  $sub3=$que->num_rows;
		  }elseif($sub1!==0){
		  echo "<script>alert('This Subject is already listed')</script>";
		  
		  }elseif($sub2!==0){
		  
		  echo "<script>alert('This Subject is already listed')</script>";
		  }elseif($sub3!==0){
		  echo "<script>alert('This Subject is already listed')</script>";
		  
		  }else{
			  $subname=$_POST['subname'];
			  $cls=$_POST['clname'];
			  $done=$con->query("INSERT INTO subject_list VALUE(null,'$subname','$cls')");
			  if($done){
				 echo "<script>alert('Subject Insert Successfully')</script>"; 
			  }
		  }
	  }?>
       <div class="form-responsive">
        <form method="post">
          <div class="form-group">
             <label for="exampleInputLastName">Subject Name</label>
             <input class="form-control" id="exampleInputLastName" type="text" name="subname" aria-describedby="nameHelp" placeholder="Enter Class name">            
          </div>
		  <div class="form-group">
             <label for="exampleInputLastName">Class Name</label>
             <select name="clname">
             	<option value="" hidden="">SELECT ONE</option>
                <?php 
				$data=$con->query("SELECT * FROM class_list");
				
				while($row = $data->fetch_object()):	?>
                <option value="<?php echo $row->id;  ?>"><?php  echo $row->class_name; ?></option>
                <?php  endwhile ?>
             </select>            
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
