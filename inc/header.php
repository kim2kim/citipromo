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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="dj, djs, music share, free mp3, download mp3, bars, clubs, entertainment, parties, mixer, city events, music, promoters, events, party events, rate events, rate dj's, rate promoters, rate venues"/>

<title>DJ Citi Promo</title>
<link href="http://www.citipromo.com/css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://www.citipromo.com/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="http://www.citipromo.com/js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="http://www.citipromo.com/js/js.js"></script>
<script type="text/javascript" src="http://www.citipromo.com/script/dj.js">  </script>



</head>
<body>


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

<div id="wapper">
  <!-- controller -->
  <div class="container">
    <!-- header panel -->
    <div id="main_header_panel">

                <!-- \ Navigation panel/ -->

        <!-- \ Logo Panel / -->

        <div id="logo">
        
          <a href="index.html"><img src="http://www.citipromo.com/images/logo.png" alt="" border="0" /></a> </div>

 	  <div style="float:right;">
<div class="clear"></div>

<div>
  <div style="float:left;width:100px;"><label>Email </label></div>
  <div style="float:left;"><input tabindex="1" type="text" id="guestemail" name="guestemail" style="width:200px;" /></div>
</div>

<div class="clear"></div>

<div>
  <div style="float:left;width:100px;"><label>Gender </label></div>
  <div style="float:left;">Male <input type="checkbox" id="guestgender" name="guestgender" value="m"/> &nbsp &nbsp; Female <input type="checkbox" id="guestgender" name="gender" value="f"/></div>
</div>

<div class="clear"></div>

<div>
  <div style="float:left;width:100px;"><label>Zip </label></div>  
  <div style="float:left;"><input type="text" id="guestzip" name="guestzip" /></div>
</div>

<div class="clear"></div>

<div>
  <div style="float:left;width:100px;"><label></label></div>  
  <div style="float:right;"><input tabindex="2" type="submit" name="guestlistsubmit" value="JOIN GUESTLIST" onclick="javascript:return guestlist_signup();"/></div>
</div>

	  </div>

          <!-- \ DJ Music / -->
          
          <div id="embeded-mp3" style="width:0px;overflow:hidden;height:0px;">
          <embed id="BGSOUND_CTRL" src="http://www.citipromo.com/publicimages/mp3/Kelly Rowland - Commander ft. David Guetta.mp3" loop="true" autoplay="true"></embed>
          </div>
    </div>

    <br/>
    <div class="clear"></div>

    <div class="header-links">
      <a href="/djmain.php"><img src="http://www.citipromo.com/images/members_s1.jpg"/></a>
      <a href="/djregister.php"><img src="http://www.citipromo.com/images/register_s1.jpg"/></a>
    </div>

      <div style="float:right;"><input type="image" src="http://www.citipromo.com/publicimages/stop.png" onClick="turnOff();" width="20px" height="20px"></div>
      <div class="clr"></div>
	<div id="play-song" style="height:20px;"></div>
      <div class="clr"></div>


<?php
}
?>

