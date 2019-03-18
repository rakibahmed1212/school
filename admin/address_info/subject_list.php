<?php include('../inc/config.php');  ?>
<?php $id=$_REQUEST['sub_id']; ?>
<?php  $sql=$con->query("SELECT * FROM subject_list WHERE class_id='$id'") ?>
	
    	<label>Subject:</label>
		<ul class="list-unstyled">
        <?php  while ($row=$sql->fetch_object()){?>
        <li><?php echo $row->subject_name; ?></li>
        <?php   } ?>
   
       </ul>