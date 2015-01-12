
<?php
  include("/home/users/web/b283/ipg.citicupidcom/inc/script/djplaylist.php");
  include("/home/users/web/b283/ipg.citicupidcom/inc/counter.php");
  include("/home/users/web/b283/ipg.citicupidcom/inc/header.php");
  display_header("LOS ANGELES");
  counter("la-hit-counter.txt");
?>

			<!-- \ Middle panel / -->

		<div id="middlePanel">
			
			<div class="middleContent">

			
				<!-- \ Left Box / -->
				
				<div id="leftBox">

					<div class="clear"></div>

                                        <div class="leftContent">

                                        <?php
                                                include("/home/users/web/b283/ipg.citicupidcom/inc/script/dj.php");
                                                dj_total_pages('los angeles');
                                         ?>

					  <div class="clear"></div>

                                        <h1>resident deejays</h1>

					<?php search_dj_by_gender('los angeles'); ?>
					
					<div class="leftBlock">
					  <span class="img1"><img src="images/img1.gif" alt="" /></span>
					  
					  <span class="LeftTxt">
					  <strong class="bold">dj stella</strong>
					  <a href="#">about deejay<br />
					  mp3 samples					  </a></span>
					  <div class="clear"></div>
					</div>
					
					<div class="leftBlock">
					  <span class="img1"><img src="images/img2.gif" alt="" /></span>
					  
					  <span class="LeftTxt">
					  <strong class="bold">dj clark mayhem</strong>
					  <a href="#">about deejay<br />
					  mp3 samples					  </a></span>
					  <div class="clear"></div>
					</div>
					<div class="leftBlock">
					  <span class="img1"><img src="images/img3.gif" alt="" /></span>
					  
					  <span class="LeftTxt">
					  <strong class="bold">dj maxx</strong>
					  <a href="#">about deejay<br />
					  mp3 samples					  </a></span>
					  <div class="clear"></div>
					</div>
					<div class="clear"></div>
					</div>
				
				</div>
				
				<!-- \ Right Box / -->
<?php
  include("/home/users/web/b283/ipg.citicupidcom/inc/view/djdetail.php");

  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");
  $result=mysql_query("SELECT id FROM dj order by id limit 1", $con);

  $row = mysql_fetch_object($result);

  if ( ! $row )
  {
    die(':');
  }
  mysql_close($con);
  display_dj_details($row->id);
?>
			
		<div class="clear"></div>			
			</div>
		<div class="clear"></div>
		</div>
	
  
<?php
include("/home/users/web/b283/ipg.citicupidcom/inc/footer.php");
?>
  
