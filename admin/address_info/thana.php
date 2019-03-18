<?php include('../inc/config.php');  ?>
<?php $id=$_REQUEST['dist_id']; ?>
<?php  $sql=$con->query("SELECT * FROM sms_thana WHERE district_id='$id'") ?>
	
    	<option hidden="" value="">SELECT ONE</option>
        <?php  while ($row=$sql->fetch_object()){?>
        <option value="<?php echo $row->id;  ?>"><?php echo $row->name; ?></option>
        <?php   } ?>
   
       