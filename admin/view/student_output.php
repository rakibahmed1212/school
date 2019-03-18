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
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Full Name</th>
				          <th>Gardian Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Gender</th>
                  <th>Date of Birth</th>
                  <th>Nationality</th>
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
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Gender</th>
                  <th>Date of Birth</th>
                  <th>Nationality</th>
				          <th>Address</th>
				          <th>Class</th>
				          <th>Picture</th>
				          <th>Result</th>
				          <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
			<?php $st_details =$con->query('SELECT * FROM st_output'); 
				while($row=$st_details->fetch_object()):

			?>			  
                <tr>
                  <td><?php echo $row->fname;  ?>&nbsp;<?php echo $row->lname;  ?></td>
				  <td><?php echo $row->gname;  ?></td>
				  <td><?php echo $row->email;  ?></td>
				  <td><?php echo $row->phone;  ?></td>
				  <td><?php echo $row->gender;  ?></td>
				  <td><?php echo $row->dob;  ?></td>
				  <td><?php echo $row->nationality;  ?></td>
				  <td><?php echo $row->address;  ?>,&nbsp;<?php echo $row->thn_name;  ?>,&nbsp;<?php echo $row->dist_name;  ?>,&nbsp;<?php echo $row->div_name;  ?></td>
				  <td><?php echo $row->class_name;  ?></td>
				  <td><img src="../<?php echo $row->picture;  ?>" class="img-responsive" height="80px" width="80px"></td>
				  <td><?php echo $row->fname;  ?></td>
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