<?php include('inc/first.php');  ?>
<?php  include('inc/top.php'); ?>

<?php  include('inc/nav.php'); ?>


<div class="column2" style="padding:0px 50px 100px 50px; margin: 50px;">
  
  
    
    	<ul style="list-style: none">
    		<h1><big><big><big>Notice Board</big></big></big></h1>
		<?php $notice=$con->query("SELECT * FROM sms_notice"); 
		while($ndata=$notice->fetch_object()):
	  ?>
        <li>
          <p><strong><a href="single_notice.php?not_id=<?php echo $ndata->id;  ?>"><?php echo $ndata->notice_title;  ?></a></strong></p>
		  <div class="imgholder"><?php echo $ndata->created_at;  ?></div>
      <?php   $less_content=array_slice((explode(' ',$ndata->notice )),0,30); ?>
		  <div><?php echo implode(" ", $less_content);  ?>......</div>
        </li>
		<?php endwhile;  ?> 
		</ul>     
    
	
  
</div>



<?php  include("inc/last.php"); ?>