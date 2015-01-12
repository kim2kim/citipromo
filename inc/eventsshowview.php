<?php
  include("/home/users/web/b283/ipg.citicupidcom/inc/script/djevents.php");
  include("/home/users/web/b283/ipg.citicupidcom/inc/script/addnewevent.php");

function display_events_show_view($location, $email){
  add_event($location);


?>

<div class="right-form">
<label>Email </label> <span style="color:red;">*</span>&nbsp;&nbsp; <input type="text" id="attending_email" name="email" value="<?php echo $email ?>"  style="width:200px;"/>
</div>
<div id="rateme_message" class="left" style="color:green;"></div>

<div class="clr"></div>



<?php
  events_total_pages($location);
  venue_events($location);
}
?>

