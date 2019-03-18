<?php include('inc/first.php');  ?>
<?php  include('inc/top.php'); ?>

<?php  include('inc/nav.php'); ?>

<?php  include('inc/slider.php'); ?>

<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">
      <div class="column2">
        <ul>
          <li>
            <h2>Principle Corner</h2>
            <div class="imgholder"><img src="images/Principal-pp.jpg" alt="" height="200px" width="200px" /></div>
            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et feugiat. Adipisciniap ellentum leo ut consequam.</p>
          </li>
          <li class="last">
            <h2>Chairman Corner</h2>
            <div class="imgholder"><img src="images/chairman.jpg" alt="" height="200px" width="200px" /></div>
            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et feugiat. Adipisciniap ellentum leo ut consequam.</p>
          </li>
        </ul>
        <br class="clear" />
      </div>
      <div class="column2">
        
                          <h1><big><strong>Academic Calender</strong></big></h1>  
                            <iframe src="http://rajukcollege.net/AcademicEvents.aspx" height="760" width="100%" style="border: none;"></iframe>
                            <span style="clear: both"></span>
                        

      </div>
    </div>
    <div class="fl_right">
      <h2>Latest Notice</h2>
	  <marquee  direction="up" face="courier" behavior="SCROLL" height="400px" scrollamount="2" style="text-align: left;">
      <ul>
	  <?php $notice=$con->query("SELECT * FROM sms_notice ORDER BY id DESC LIMIT 10"); 
		while($ndata=$notice->fetch_object()):
	  ?>
        <li>
          <p><strong><a href="single_notice.php?not_id=<?php echo $ndata->id;  ?>"><?php echo $ndata->notice_title;  ?></a></strong></p>
		  <div class="imgholder"><?php echo $ndata->created_at;  ?></div>
      <?php   $less_content=array_slice((explode(' ',$ndata->notice )),0,10); ?>
		  <div class="imgholder"><?php echo implode(" ", $less_content);  ?>......</div>
        </li>
		<?php endwhile;  ?>
      </ul>
	  </marquee>
	  <p class="readmore"><a href="more_notice.php">More Notice &raquo;</a></p>
    </div>
    <div class="fl_right">
      <h2>Latest News And Event</h2>    
      <ul>
    <?php $notice=$con->query("SELECT * FROM sms_news_event ORDER BY id DESC LIMIT 4"); 
    while($ndata=$notice->fetch_object()):
    ?>
        <li>
          <p><strong><a href="single_news.php?not_id=<?php echo $ndata->id;  ?>"><?php echo $ndata->news_title;  ?></a></strong></p>
      <div class="imgholder"><?php echo $ndata->created_at;  ?></div>
      <?php   $less_content=array_slice((explode(' ',$ndata->descreption )),0,10); ?>
      <div class="imgholder"><?php echo implode(" ", $less_content);  ?>......</div>
        </li>
    <?php endwhile;  ?>
      </ul>
    <p class="readmore"><a href="more_news.php">More News & Event &raquo;</a></p>
    </div>
    <br class="clear" />
  </div>
</div>
<?php  include("inc/last.php"); ?>