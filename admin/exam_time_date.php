<?php  include('inc/first.php'); ?>
  <!-- Navigation-->
  <?php include('inc/navbar.php');  ?>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Exam Routine</li>
      </ol>		  
	<div class="card mb-3">
       <div class="card-header"><i class="fa fa-form"></i> My Form</div>
      <div class="card-body">
       <div class="form-responsive">
        <form method="get" action="print_exam_routine.php" target="_blank">
          <div class="border bg-light" style="padding:10px;">
			<div class="card-header bg-secondary"><i class="fa fa-form"></i>Exam Routine</div>
			  <div class="form-row">
			     <div class="col-md-3">
					<label>Exam Type</label>
                <select name="exam_type" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sms_exam_type');

					?>
					<?php while($row1 = $div->fetch_object()): ;?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->type;?></option>
					<?php endwhile;?>					
				</select>
				  </div>			  
				  <div class="col-md-3">
				  <label></label>
					<input type="submit" id="submit_id" class="btn btn-success btn-block" name="submit" value="submit">
				  </div>
			</div>
           </div>		
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
