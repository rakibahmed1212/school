<?php include('../inc/config.php');  ?>
<?php //$id=$_REQUEST['divid']; ?>
<?php  $sql=$con->query("SELECT * FROM sms_class_schedule") ?>			
			<thead>
                <tr>
                  <th>Day</th>
                  <th>class Time</th>
                  <th>Teacher's Name</th>
                  <th>Shift And Section</th>
                  <th>Subject</th>
				  <th>Class </th>
                  <th>Classroom</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Day</th>
                  <th>class Time</th>
                  <th>Teacher's Name</th>
                  <th>Shift And Section</th>
                  <th>Subject</th>
				  <th>Class </th>
                  <th>Classroom</th>
                </tr>
              </tfoot>
			  <tbody>
			  <?php  while ($row=$sql->fetch_object()): ?>
                <tr>
                  <td><?php  echo $row->day ?></td>
				  <td><?php  echo $row->class_time ?></td>
				  <td><?php  echo $row->teacher ?></td>
				  <td><?php  echo $row->shift ?></td>&nbsp;<td><?php  echo $row->section ?></td>
				  <td><?php  echo $row->subject ?></td>
				  <td><?php  echo $row->class_name ?></td>
				  <td><?php  echo $row->classroom ?></td>				                    
                </tr>
				<?php  endwhile; ?>
              </tbody>