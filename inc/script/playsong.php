<?php

if(isset($_POST['playsong'])){
  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");
  $result=mysql_query("SELECT link FROM playlist where id = " . $_POST['playlist_id'], $con);

  $row = mysql_fetch_object($result);

  if ( ! $row )
  {
    die('Error: ' . mysql_error());
  }
  mysql_close($con);
  ?>

  <div id="embeded-mp3" style="float: right; height:10px;">
    <embed id="playlist-song" src="http://www.citipromo.com<?php echo $row->link ?>" loop="false" autoplay="true" height="40px;"></embed>
    <noembed><BGSOUND id="playlist-song-bg" src="http://www.citipromo.com<?php echo $row->link ?>" LOOP="0" AUTOSTART="true" width="0"></noembed>
  </div>

  <?php
  
}

?>
