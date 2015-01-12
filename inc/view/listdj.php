
<?php

function display_dj_ratings($sql){

?>


<?php

  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

  $result = mysql_query($sql, $con);

   mysql_close($con);

  if ( ! $result )
  {
    die('Error: ' . mysql_error());
  }

  while($row = mysql_fetch_array($result))
  { 
      if($row['images'] != ''){
?>
					<div class="leftBlock">
                                          <span class="img1"><img src="http://www.citipromo.com/<?php echo $row['images'] ?>" width="60px;" alt="<?php echo $row[id] ?>" /></span>
                                          <span class="LeftTxt">
                                          <strong class="bold"><?php echo $row[name] ?></strong>
                                          <a href="#" onclick="javascript: showInfo('<?php echo $row[id] ?>');">about deejay</a><br />
                                          <a href="#" onclick="javascript: showPlaylist('<?php echo $row[email] ?>');">mp3 samples</a></span>
                                          <div class="clear"></div>
                                        </div>
<?php
	}
  }
}
?>
