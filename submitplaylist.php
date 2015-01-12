<?php   include("/home/users/web/b283/ipg.citicupidcom/inc/script/djplaylist.php"); ?>

<div class="left" style="color:green;" id="rateme_message"></div>

<div class="clr"></div>

<div style="font-size:10pt;"><a href="javascript:showhide('playlist-search-form');">[+ / -] ADD A SONG</a></div>

<div id="playlist-search-form" style="float:left;width:500px;padding:5px;background-color:#ffffee">
<?php
 include("/home/users/web/b283/ipg.citicupidcom/inc/form/playlistform.php");
?>
</div>


<?php
  playlist_total_pages();
?>

<div class="clear"></div>

<div style="padding-top:10px;"></div>

<div style="width:100%;background-color:#466678;height:20px;padding-top:5px;font-weight:bold;color:white;">
<div style="float:left;padding-left:10px;width:30%;">CATEGORY</div>
<div style="float:left;padding-left:10px;width:40%">ARTIST - TITLE</div>
<div style="float:left;padding-left:10px;width:10%">LIKES</div>
<div style="float:left;padding-left:10px;width:5%"></div>
<div style="float:left;padding-left:10px;width:5%;"></div>
</div>

<div class="clr"/>
<div style="padding-bottom:5px;"></div>

<?php

  display_for_search_result();

?>

