
<?php
   $ip = $_SERVER['REMOTE_ADDR'];
   $pagina = $_SERVER['REQUEST_URI'];
   $datum = date("d-m-y / H:i:s");
   $invoegen = $datum . " - " . $ip . " - " . $pagina . "<br/>";
   $fopen = fopen("/hermes/bosweb/web028/b283/ipg.citicupidcom/ips.html", "a");
   fwrite($fopen, $invoegen);
   fclose($fopen);

function display_header($slogan){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>citipromo</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="music share, free mp3, download mp3, bars, clubs, entertainment, parties, mixer, city events, connection, music, dj, promoters, events, party events, rate events, rate dj's, rate promoters, rate venues"/>

<link href="http://www.citipromo.com/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://www.citipromo.com/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="http://www.citipromo.com/js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="http://www.citipromo.com/js/js.js"></script>
<script type="text/javascript" src="http://www.citipromo.com/script/dj.js">  </script>

</head>
<body>
<div class="main">
  <div class="header_blog" style="width:100%;">

<div style="width:100%;text-align:center;white-space:none;overflow:hidden;">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2178827339426285";
/* 728x90, created 4/3/09 */
google_ad_slot = "5531437381";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2178827339426285";
/* small */
google_ad_slot = "6675772002";
google_ad_width = 228;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
      <div class="clr"></div>

    <div id="slider">      <!-- start slideshow -->
      <div id="slideshow">
        <div class="slider-item">
	<div class="search">
	  <div style="float:left">
          </div>
	</div>
      </div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="body">
    <div class="body_resize">
      <div class="clr"></div>
      <div id="citi-links">

       <div class="search">
          <form id="form1" name="form1" method="post" action="">
            <span>
            <select id="city" name="q" class="keywords">
                <option value="">---- SELECT YOUR CITY ----</option>
                <option value="http://www.citicupid.com">LOS ANGELES</option>
                <option value="http://ny.citicupid.com">NEW YORK</option>
                <option value="http://ca.citicupid.com">CHICAGO</option>
                <option value="http://sd.citicupid.com">SAN DIEGO</option>
                <option value="http://sf.citicupid.com">SAN FRANCISCO</option>
            </select>
            </span>
          </form>
	</div>

	<div id="city-label"><?php echo $slogan ?></div>

<!--
	<a href="http://www.citipromo.com/xchat">CHAT ROOMS</a> 
	<a href="http://www.citipromo.com/chat">INSTANT CHATTING</a> 
	<a href="http://www.citipromo.com/cms">CREATE A PROFILE</a> 
	<a href="http://www.citipromo.com/forum">FORUM</a> 
	<a href="http://www.citipromo.com/gbook">GUESTBOOK</a> 
	<a href="http://www.citipromo.com/pixs">PHOTOS</a>  
	<a href="http://www.citipromo.com/gene">YOUR CONNECTIONS</a>
-->
  	</div>
      <div class="clr"></div>

      <div class="left_blog">
        <div class="blog"> <a href="/dj.php"><img title="promoters, dj's, bars & clubs, businesses, registration, sign-up, rate bars and clubs, rate dj's" src="http://www.citipromo.com/publicimages/img_1.png" alt="images" width="54" height="54" class="floated" /></a>
          <p><span>Event Host</span><br />
            Register for FREE and build your online visibility.
          </p>
        </div>
        <div class="blog"> <a href="/guest.php"><img title="members, guest, guest list, registration, sign-up, rate members" src="http://www.citipromo.com/publicimages/img_2.png" alt="images" width="54" height="54" class="floated" /></a>
          <p><span>Guest</span><br />
                Sign-up to be on the ultimate guest list.  No matter what city you're in, we'll hook you up with the right venue.
          </p>
        </div>
        <div class="blog"> <a href="/events.php"><img title="events, rate events " src="http://www.citipromo.com/publicimages/img_3.png" alt="images" width="54" height="54" class="floated" /></a>
          <p><span>Events</span><br/>Add an event or find an event in your city.</p>
        </div>
        <div class="blog"> <a href="/playlist.php"><img title="playlist, rate songs, listen to popular songs" src="http://www.citipromo.com/publicimages/img_4.png" alt="images" width="54" height="54" class="floated" /></a>
          <p><span>Playlist</span><br/>Rate a song, find a song, or add a song!</p>
        </div>
      </div>

      <div class="clr"></div>

      <div style="float:right;"><input type="image" src="http://www.citipromo.com/publicimages/stop.png" onClick="turnOff();" width="20px" height="20px"></div>
      <div class="clr"></div>

<?php 
}
?>
