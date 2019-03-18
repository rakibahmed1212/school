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
        <form method="post">
          <div class="border bg-light" style="padding:10px;">
			<div class="card-header bg-secondary"><i class="fa fa-form"></i>Class Routine</div>
			  <div class="form-row">
			     <div class="col-md-3">
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
				  <div class="col-md-3">
					<label for="exampleInputName">Shift</label>
					<select name="shift" id="shift_id" class="form-control">
					<option value="" hidden="">Select One</option>
					<?php 
                    $div =$con->query('SELECT * FROM sms_shift');

					?>
					<?php while($row1 = $div->fetch_object()): ?>
					<option value="<?php echo $row1->id;?>"><?php echo $row1->shift;?></option>
					<?php endwhile;?>
					
				</select>
				  </div>
				  <div class="col-md-3">
					<label for="exampleInputName">Section</label>					 
					<select name="section" id="section" class="form-control">
					<option value="" hidden="">Select One</option>				
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
   <?php  if(isset($_POST['submit'])): 
   
   extract($_POST);
    
                    $div =$con->query("SELECT * FROM sms_class WHERE id='$class_name'");

					
   ?>
   <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> Class Routine<?php while($row1 = $div->fetch_object()): ;?><h1 class="pull-right"><?php echo $row1->class_name;  ?></h1><?php endwhile;  ?></div>
        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

              <?php  $sql=$con->query("SELECT sms_class_schedule.id, sms_day_of_week.day,sms_class_time.class_time, sms_teacher.fname, sms_shift.shift,sms_section.section,sms_subject.subject,sms_class.class_name,sms_room.room_no FROM sms_day_of_week,sms_class_time,sms_teacher,sms_shift,sms_section,sms_subject,sms_room,sms_class,sms_class_schedule WHERE sms_day_of_week.id= sms_class_schedule.day AND sms_class_time.id=sms_class_schedule.class_time AND sms_teacher.id= sms_class_schedule.teacher AND sms_shift.id= sms_class_schedule.shift AND sms_section.id= sms_class_schedule.section AND sms_subject.id= sms_class_schedule.subject AND sms_class.id=sms_class_schedule.class_name AND sms_room.id=sms_class_schedule.classroom AND sms_class_schedule.class_name='$class_name' AND sms_class_schedule.shift='$shift' AND sms_class_schedule.section ='$section' AND sms_day_of_week.id=1") ?>
              
              <?php  $sql1=$con->query("SELECT sms_class_schedule.id, sms_day_of_week.day,sms_class_time.class_time, sms_teacher.fname, sms_shift.shift,sms_section.section,sms_subject.subject,sms_class.class_name,sms_room.room_no FROM sms_day_of_week,sms_class_time,sms_teacher,sms_shift,sms_section,sms_subject,sms_room,sms_class,sms_class_schedule WHERE sms_day_of_week.id= sms_class_schedule.day AND sms_class_time.id=sms_class_schedule.class_time AND sms_teacher.id= sms_class_schedule.teacher AND sms_shift.id= sms_class_schedule.shift AND sms_section.id= sms_class_schedule.section AND sms_subject.id= sms_class_schedule.subject AND sms_class.id=sms_class_schedule.class_name AND sms_room.id=sms_class_schedule.classroom AND sms_class_schedule.class_name='$class_name' AND sms_class_schedule.shift='$shift' AND sms_class_schedule.section ='$section' AND sms_day_of_week.id=2") ?>
              
              <?php  $sql2=$con->query("SELECT sms_class_schedule.id, sms_day_of_week.day,sms_class_time.class_time, sms_teacher.fname, sms_shift.shift,sms_section.section,sms_subject.subject,sms_class.class_name,sms_room.room_no FROM sms_day_of_week,sms_class_time,sms_teacher,sms_shift,sms_section,sms_subject,sms_room,sms_class,sms_class_schedule WHERE sms_day_of_week.id= sms_class_schedule.day AND sms_class_time.id=sms_class_schedule.class_time AND sms_teacher.id= sms_class_schedule.teacher AND sms_shift.id= sms_class_schedule.shift AND sms_section.id= sms_class_schedule.section AND sms_subject.id= sms_class_schedule.subject AND sms_class.id=sms_class_schedule.class_name AND sms_room.id=sms_class_schedule.classroom AND sms_class_schedule.class_name='$class_name' AND sms_class_schedule.shift='$shift' AND sms_class_schedule.section ='$section' AND sms_day_of_week.id=3") ?>
              
              <?php  $sql3=$con->query("SELECT sms_class_schedule.id, sms_day_of_week.day,sms_class_time.class_time, sms_teacher.fname, sms_shift.shift,sms_section.section,sms_subject.subject,sms_class.class_name,sms_room.room_no FROM sms_day_of_week,sms_class_time,sms_teacher,sms_shift,sms_section,sms_subject,sms_room,sms_class,sms_class_schedule WHERE sms_day_of_week.id= sms_class_schedule.day AND sms_class_time.id=sms_class_schedule.class_time AND sms_teacher.id= sms_class_schedule.teacher AND sms_shift.id= sms_class_schedule.shift AND sms_section.id= sms_class_schedule.section AND sms_subject.id= sms_class_schedule.subject AND sms_class.id=sms_class_schedule.class_name AND sms_room.id=sms_class_schedule.classroom AND sms_class_schedule.class_name='$class_name' AND sms_class_schedule.shift='$shift' AND sms_class_schedule.section ='$section' AND sms_day_of_week.id=4") ?>
              
              <?php  $sql4=$con->query("SELECT sms_class_schedule.id, sms_day_of_week.day,sms_class_time.class_time, sms_teacher.fname, sms_shift.shift,sms_section.section,sms_subject.subject,sms_class.class_name,sms_room.room_no FROM sms_day_of_week,sms_class_time,sms_teacher,sms_shift,sms_section,sms_subject,sms_room,sms_class,sms_class_schedule WHERE sms_day_of_week.id= sms_class_schedule.day AND sms_class_time.id=sms_class_schedule.class_time AND sms_teacher.id= sms_class_schedule.teacher AND sms_shift.id= sms_class_schedule.shift AND sms_section.id= sms_class_schedule.section AND sms_subject.id= sms_class_schedule.subject AND sms_class.id=sms_class_schedule.class_name AND sms_room.id=sms_class_schedule.classroom AND sms_class_schedule.class_name='$class_name' AND sms_class_schedule.shift='$shift' AND sms_class_schedule.section ='$section' AND sms_day_of_week.id=5") ?>
              
              <?php  $sql5=$con->query("SELECT sms_class_schedule.id, sms_day_of_week.day,sms_class_time.class_time, sms_teacher.fname, sms_shift.shift,sms_section.section,sms_subject.subject,sms_class.class_name,sms_room.room_no FROM sms_day_of_week,sms_class_time,sms_teacher,sms_shift,sms_section,sms_subject,sms_room,sms_class,sms_class_schedule WHERE sms_day_of_week.id= sms_class_schedule.day AND sms_class_time.id=sms_class_schedule.class_time AND sms_teacher.id= sms_class_schedule.teacher AND sms_shift.id= sms_class_schedule.shift AND sms_section.id= sms_class_schedule.section AND sms_subject.id= sms_class_schedule.subject AND sms_class.id=sms_class_schedule.class_name AND sms_room.id=sms_class_schedule.classroom AND sms_class_schedule.class_name='$class_name' AND sms_class_schedule.shift='$shift' AND sms_class_schedule.section ='$section' AND sms_day_of_week.id=6") ?>
			<thead>
                <tr>
					<th>Day</th>
                  <th>Subject With Time</th>
                  <th>Subject With Time</th>
                  <th>Subject With Time</th>
                  <th>Subject With Time</th>
                  <th>Subject With Time</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
				  <th>Day</th>
                  <th>Subject With Time</th>
                  <th>Subject With Time</th>
                  <th>Subject With Time</th>
                  <th>Subject With Time</th>
                  <th>Subject With Time</th>
                </tr>
              </tfoot>
			  <tbody>			  
                <tr>
				<th>Sat</th>
				<?php  while ($row=$sql->fetch_object()): ?>
                  <td><?php  echo $row->subject ?><br>
					  <?php  echo $row->class_time; ?>
				  </td>
				  <?php  endwhile; ?>
				</tr>
				<tr>
<th>Sun</th>
				<?php  while ($row=$sql1->fetch_object()): ?>
                  <td><?php  echo $row->subject ?><br>
					  <?php  echo $row->class_time; ?>
				  </td>
				  <?php  endwhile; ?>
				</tr>
				<tr>
<th>Mon</th>
				<?php  while ($row=$sql2->fetch_object()): ?>
                  <td><?php  echo $row->subject ?><br>
					  <?php  echo $row->class_time; ?>
				  </td>
				  <?php  endwhile; ?>
				</tr>
				<tr>
<th>Tue</th>
				<?php  while ($row=$sql3->fetch_object()): ?>
                  <td><?php  echo $row->subject ?><br>
					  <?php  echo $row->class_time; ?>
				  </td>
				  <?php  endwhile; ?>
				</tr>
				<tr>
<th>Wed</th>
				<?php  while ($row=$sql4->fetch_object()): ?>
                  <td><?php  echo $row->subject ?><br>
					  <?php  echo $row->class_time; ?>
				  </td>
				  <?php  endwhile; ?>
				</tr>
				<tr>
<th>thr</th>
				<?php  while ($row=$sql5->fetch_object()): ?>
                  <td><?php  echo $row->subject ?><br>
					  <?php  echo $row->class_time; ?>
				  </td>
				  <?php  endwhile; ?>				  
                </tr>
				
              </tbody>
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
	});
</script>
	   <!-- /.content-wrapper-->
  
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?php  include('inc/footer.php'); ?>
   <?php  include('inc/last.php'); ?>
