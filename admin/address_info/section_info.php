<?php include('../inc/config.php');  ?>
<?php $id=$_REQUEST['divid']; ?>
<?php  $sql=$con->query("SELECT * FROM sms_section WHERE shift='$id'") ?>
	
    	<option hidden="" value="">SELECT ONE</option>
        <?php  while ($row=$sql->fetch_object()){?>
        <option value="<?php echo $row->id;  ?>"><?php echo $row->section; ?></option>
        <?php   } ?>
   
       