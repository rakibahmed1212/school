<?php include('inc/first.php');  ?>
<?php  include('inc/top.php'); ?>

<?php  include('inc/nav.php'); ?>

<?php  $id=$_GET['not_id']; ?>
<div class="column2" style="padding:0px 50px 100px 50px; margin: 50px;">
	<h1><big><big><big>Notice</big></big></big></h1>
	<?php $notice=$con->query("SELECT * FROM sms_notice WHERE id='$id'"); 
		while($ndata=$notice->fetch_object()):
	  ?>
        <h2><?php echo $ndata->notice_title;  ?></h2>        
        <p><big><?php echo $ndata->notice;  ?></big></p>
      </div>

<?php endwhile;  ?>

<?php  include("inc/last.php"); ?>