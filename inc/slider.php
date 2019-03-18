<div class="wrapper col2">
  <div id="featured_slide">
  <?php  $data=$con->query("SELECT * FROM sms_slider_images"); 
	while($row=$data->fetch_object()):
  ?>
    <div class="featured_box">
		<a href="#"><img src="admin/<?php echo $row->image;  ?>" alt="" /></a>      
    </div>
	<?php  endwhile; ?>
  </div>
</div>
