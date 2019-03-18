<?php  include('inc/first.php'); ?>
  <!-- Navigation-->
  <?php include('inc/navbar.php');  ?>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">School Dashboard</li>
      </ol>
      <!-- Icon Cards-->
     <h1>Dashboard</h1>
	 <?php $sql=$con->query("SELECT count(*) AS total FROM sms_student");
		$row=$sql->fetch_object();
	 ?>
	 <?php $sql1=$con->query("SELECT count(*) AS total FROM sms_teacher");
		$row1=$sql1->fetch_object();
	 ?>
	 <table>
		<tr>
			<td><a href="manage_student.php" class="btn btn-warning">Total Number Of Student :<?php echo $row->total;  ?></a></td>
			<td><a href="manage_student.php" class="btn btn-warning">Total Number Of Teachers :<?php echo $row1->total;  ?></a></td>
      <td><a href="print_exam_routine.php?exam_type=2" class="btn btn-warning">Exam Routuine</a></td>
		</tr>		
	 </table>
      </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?php  include('inc/footer.php'); ?>
   <?php  include('inc/last.php'); ?>
