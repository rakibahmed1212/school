<?php  include('inc/first.php'); ?>
  <!-- Navigation-->
  <?php  include('inc/navbar.php'); ?>
  <!--navigation-->
  
  
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Students</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i>View All Student<a href="student_entry1.php" class="pull-right btn btn-success">Add Student</a></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Full Name</th>
                  <th>Gardian Name</th>
                  <th>Personal Information</th>
                  <th>Address</th>
                  <th>Class</th>
                  <th>Picture</th>
                  <th>Result</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Full Name</th>
				          <th>Gardian Name</th>
                  <th>Personal Information</th>
				          <th>Address</th>
				          <th>Class</th>
				          <th>Picture</th>
				          <th>Result</th>
				          <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
			<?php $st_details =$con->query("SELECT sms_student.id,sms_student.class_id,sms_student.roll,sms_student.fname,sms_student.lname,sms_parents.fname AS fathers_name,sms_parents.mname, sms_shift.shift,sms_student.email,sms_student.phone,sms_class.class_name,sms_student.dob,sms_student.gender,sms_division.name AS div_name,sms_district.name AS dist_name,sms_thana.name AS thana_name,sms_student.adddress,sms_student.photo FROM sms_student,sms_division,sms_district,sms_thana,sms_shift,sms_class,sms_parents WHERE sms_student.shift=sms_shift.id AND sms_class.id= sms_student.class_id AND sms_division.id=sms_student.division AND sms_student.district=sms_district.id AND sms_student.thana=sms_thana.id AND sms_parents.student_id=sms_student.id"); 
				while($row=$st_details->fetch_object()):

			?>			  
                <tr>
                  <td><?php echo $row->fname;  ?>&nbsp;<?php echo $row->lname;  ?></td>
				  <td>Father's Name:&nbsp;<?php echo $row->fathers_name;  ?><br>Mother's Name:&nbsp;<?php echo $row->mname;  ?></td>
				  <td>Email:&nbsp;<?php echo $row->email;  ?>&nbsp;Phone:<?php echo $row->phone;  ?><br>Gender:&nbsp;<?php echo $row->gender;  ?>&nbsp;Date of birth:&nbsp;<?php echo $row->dob;  ?></td>
				  <td><?php echo $row->adddress;  ?>,&nbsp;<?php echo $row->thana_name;  ?>,&nbsp;<?php echo $row->dist_name;  ?>,&nbsp;<?php echo $row->div_name;  ?></td>
				  <td><?php echo $row->class_name;  ?></td>
				  <td><img src="<?php echo $row->photo;  ?>" class="img-responsive" height="80px" width="80px"></td>
				  <td><a class="btn btn-success" href="print_result.php?student=<?php echo $row->id;  ?>&cls_id=<?php echo $row->class_id; ?>&session_name=1&section=1">Show Result</a></td>
				  <td><a href="edit.php?id=<?php echo $row->id;?>">Edit</a>&nbsp;<a href="delete_student.php?id=<?php echo $row->id;?>">Delete</a></td>
                </tr>
				<?php endwhile;  ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include('inc/footer.php');  ?>
    <!-- Bootstrap core JavaScript-->
   <?php  include('inc/last.php');  ?>