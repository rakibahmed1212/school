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
        <div class="card-header"><i class="fa fa-table"></i>View All Teacher's<a href="teachers_entry1.php" class="pull-right btn btn-success">Add Teacher</a></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Full Name</th>
                  <th>Address</th>
                  <th>Shift</th>
                  <th>Date Of Birth</th>
                  <th>Gender</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Full Name</th>
				          <th>Address</th>
				          <th>Shift</th>
				          <th>Date Of Birth</th>
				          <th>Gender</th>
				          <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
			<?php $st_details =$con->query("SELECT sms_teacher.id,sms_teacher.fname,sms_teacher.lname,sms_teacher.gender,sms_teacher.dob,sms_teacher.address,sms_division.name AS div_name,sms_district.name AS dist_name,sms_thana.name AS thana_name,sms_shift.shift FROM sms_teacher,sms_thana,sms_district,sms_division,sms_shift WHERE sms_teacher.shift=sms_shift.id AND sms_teacher.division=sms_division.id AND sms_thana.id= sms_teacher.thana AND sms_district.id= sms_teacher.district"); 
				while($row=$st_details->fetch_object()):

			?>			  
                <tr>
                  <td><?php echo $row->fname;  ?>&nbsp;<?php echo $row->lname;  ?></td>				  
				  <td><?php echo $row->address;  ?>,&nbsp;<?php echo $row->thana_name;  ?>,&nbsp;<?php echo $row->dist_name;  ?>,&nbsp;<?php echo $row->div_name;  ?></td>
				  <td><?php echo $row->shift;  ?></td>
				  <td><?php echo $row->dob;  ?></td>
				  <td><?php echo $row->gender;  ?></td>
				  <td><a class="btn btn-info" href="edit.php?id=<?php echo $row->id;?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete_student.php?id=<?php echo $row->id;?>">Delete</a></td>
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