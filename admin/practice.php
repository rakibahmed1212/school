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
   <?php  if(isset($_POST['submit'])): 
   
   extract($_POST);
   $sqls=$con->query("SELECT sms_student.fname,sms_student.lname,sms_student.dob,sms_student.gender,sms_parents.fname AS fathers_name,sms_parents.mname,sms_class.class_name,sms_student.roll,sms_student.photo,sms_section.section,sms_session.session,sms_shift.shift FROM sms_shift,sms_session,sms_section, sms_student,sms_parents, sms_class WHERE sms_student.id=sms_parents.student_id AND sms_class.id=sms_student.class_id AND sms_shift.id= sms_student.shift AND sms_section.id='$section' AND sms_session.id='$session_name' AND sms_student.id='$student'");

   $sql=$con->query("SELECT sms_exam_type.type,sms_subject.subject,sms_student.fname,sms_student.lname,sms_student.dob,sms_student.gender,sms_parents.fname AS fathers_name,sms_parents.mname,sms_class.class_name,sms_student.roll,sms_student.photo,sms_session.session,sms_section.section,sms_result.mcq,sms_result.written,sms_result.practicle,sms_result.viba FROM sms_student,sms_exam_type,sms_result,sms_subject,sms_parents,sms_session,sms_section,sms_class WHERE sms_exam_type.id=sms_result.exam_name AND sms_result.subject=sms_subject.id AND sms_session.id= sms_result.session AND sms_student.id=sms_result.student AND sms_parents.student_id=sms_student.id AND sms_class.id= sms_result.class_name AND sms_section.id= sms_result.section AND sms_result.student='$student'");   
   ?>
   <div class="card mb-3">
   	<a target="_blank" href="print_result.php?section=<?php echo  $section ?>&st_id=<?php echo  $student ?>&session_id=<?php echo $session_name ?>">Print result</a>      	
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
			<?php  $row1=$sqls->fetch_object();  ?>
			 <tr>
   				<td>Student Name: <?php echo $row1->fname;  ?>&nbsp;<?php echo $row1->lname;  ?></td>
   				<td rowspan="2"><img src="<?php  echo $row1->photo ?>" alt="Image" class="img-responsive" height="100px" width="150px"></td>         
   			</tr>
   			 <tr>
   				<td>Father's Name: <?php echo $row1->fathers_name;  ?></td>

   			</tr>
   			 <tr>
   				<td>Mother's Name: <?php echo $row1->mname;  ?></td>
   				<td>Roll:<?php  echo $row1->roll ?></td>	           
   			</tr>
   			 <tr>
   				<td>Date Of Birth: <?php echo $row1->dob;  ?></td>
   				<td>Session:<?php  echo $row1->session ?></td>	           	           
   			</tr>
   			<tr>
   				<td>Class:&nbsp;<?php echo $row1->class_name;  ?></td>
   				<td>Section:<?php echo $row1->section;  ?></td> 
   			</tr>
            </table>
          </div>        
      </div>

   <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i>Student Result</div>
        <div class="card-body">        	
          <div class="table-responsive">
            <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <tr>
					<th>Subject</th>
					<th>Mcq</th>
					<th>Writen</th>
					<th>Viba</th>
					<th>Practical</th>
					<th>Total Marks</th>
				</tr>            	
			<?php while($row5=$sql->fetch_object()):  ?>				
                <tr>         
					<th><?php  echo $row5->subject;  ?></th>
					<?php $sqlresult=$con->query("SELECT sms_exam_type.type,sms_subject.subject,sms_student.fname,sms_student.lname,sms_student.dob,sms_student.gender,sms_parents.fname AS fathers_name,sms_parents.mname,sms_class.class_name,sms_student.roll,sms_student.photo,sms_session.session,sms_section.section,sms_result.mcq,sms_result.written,sms_result.practicle,sms_result.viba FROM sms_student,sms_exam_type,sms_result,sms_subject,sms_parents,sms_session,sms_section,sms_class WHERE sms_exam_type.id=sms_result.exam_name AND sms_result.subject=sms_subject.id AND sms_session.id= sms_result.session AND sms_student.id=sms_result.student AND sms_parents.student_id=sms_student.id AND sms_class.id= sms_result.class_name AND sms_section.id= sms_result.section AND sms_result.student='$student' AND sms_result.subject='$row5->subject'");  ?>
					<td><?php echo $row5->mcq;  ?></td>
					<td><?php echo $row5->written;  ?></td>
					<td><?php echo $row5->viba;  ?></td>
					<td><?php echo $row5->practicle;  ?></td>
					<td><?php echo $total=$row5->mcq+$row5->written+$row5->viba+$row5->practicle;   ?></td>               
                </tr>
              <?php endwhile;  ?>
            </table>
          </div>
        </div>
      </div>
    </div>
   <?php endif;  ?>
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
