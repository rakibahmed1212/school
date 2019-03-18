<?php include('inc/first.php');  ?>
<div class="card mb-3">
  <button id="print">Print</button>
<h1>Mid Term Exam</h1>
  <?php $exam_type= $_GET['exam_type']; ?>
        <div class="card-header"><i class="fa fa-table"></i> Class Routine</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

              <?php $sqlt=$con->query("SELECT DISTINCT start_time,end_time FROM sms_exam_schedule");  ?>
              <?php $sqld=$con->query("SELECT DISTINCT exam_date FROM sms_exam_schedule");  ?>
                
               <thead>
                <tr>
				        <th>Date & Time</th>
                <?php while($row2=$sqlt->fetch_object()):  ?>
                <th><?php  echo $row2->start_time; ?>-<?php  echo $row2->end_time; ?></th>
              <?php  endwhile; ?>
                </tr>
              </thead>
			  <tbody>
          <?php  while($row3=$sqld->fetch_object()): ?>
          <tr>
            <th><?php  echo $row3->exam_date; ?></th>
                <?php $sql=$con->query("SELECT sms_exam_type.type,sms_class.class_name,sms_subject.subject,sms_shift.shift FROM sms_exam_schedule,sms_exam_type,sms_subject,sms_shift,sms_class WHERE sms_exam_type.id=sms_exam_schedule.exam_type AND sms_subject.id= sms_exam_schedule.subject AND sms_class.id=sms_exam_schedule.class_name AND sms_exam_schedule.shift=sms_shift.id AND sms_exam_type.id='$exam_type' AND sms_exam_schedule.exam_date='$row3->exam_date' AND sms_exam_schedule.start_time='13:00:00'");  ?> 
                <?php while($row=$sql->fetch_object()): ?>   

                    <td><?php echo $row->subject;  ?><br>(<?php echo $row->class_name;  ?>)</td>
                <?php  endwhile; ?>
                <?php $sql1=$con->query("SELECT sms_exam_type.type,sms_class.class_name,sms_subject.subject,sms_shift.shift FROM sms_exam_schedule,sms_exam_type,sms_subject,sms_shift,sms_class WHERE sms_exam_type.id=sms_exam_schedule.exam_type AND sms_subject.id= sms_exam_schedule.subject AND sms_class.id=sms_exam_schedule.class_name AND sms_exam_schedule.shift=sms_shift.id AND sms_exam_type.id='$exam_type' AND sms_exam_schedule.exam_date='$row3->exam_date' AND sms_exam_schedule.start_time='14:00:00'");  ?> 
                <?php while($row8=$sql1->fetch_object()): ?>   

                    <td><?php echo $row8->subject;  ?><br>(<?php echo $row8->class_name;  ?>)</td>
                <?php  endwhile; ?>
                <?php $sql2=$con->query("SELECT sms_exam_type.type,sms_class.class_name,sms_subject.subject,sms_shift.shift FROM sms_exam_schedule,sms_exam_type,sms_subject,sms_shift,sms_class WHERE sms_exam_type.id=sms_exam_schedule.exam_type AND sms_subject.id= sms_exam_schedule.subject AND sms_class.id=sms_exam_schedule.class_name AND sms_exam_schedule.shift=sms_shift.id AND sms_exam_type.id='$exam_type' AND sms_exam_schedule.exam_date='$row3->exam_date' AND sms_exam_schedule.start_time='15:00:00'");  ?> 
                <?php while($row7=$sql2->fetch_object()): ?>   

                    <td><?php echo $row7->subject;  ?><br>(<?php echo $row7->class_name;  ?>)</td>
                <?php  endwhile; ?>

          </tr>			  
               <?php  endwhile; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <script>
      jQuery(document).ready(function(){
         jQuery('#print').click(function(){

          window.print();
         })


      })

    </script>