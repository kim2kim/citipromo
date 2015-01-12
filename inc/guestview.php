<?php
include("/home/users/web/b283/ipg.citicupidcom/inc/script/rateme.php");

function display_guest_view($location, $email){

?>

<div class="clr"></div>
<div class="right-form">
<form action="/guest.php" method="POST" id="ratemeform" name="ratemeform" onSubmit="return submitForm('0', '-1');">
<input type="hidden" id="url" name="url" value="/submitguestrating.php"/>
<input type="hidden" id="rateme" name="rateme" value=""/>
<div>
<label>Email </label> <span class="required">*</span>&nbsp;&nbsp; <input type="text" id="djratemeemail" name="email" value="<?php echo $email ?>" />
</div>
</form>
</div>

<div id="rateme_message" class="left" style="color:green;"></div>

<div class="clr"></div>

<div>
<form name="searchform" id="searchform" action="/guest.php" method="POST">
<div style="float:left;"><label>Male</label><span style="padding-left:4px;"><input type='radio' name='gender' value='male' onclick="javascript:submitSearchForm();return true;" /></span></div>
<div style="float:left;padding-left:10px;"><label>Female</label><span style="padding-left:4px;"><input type='radio' name='gender' value='female' onclick="javascript:submitSearchForm();return true;" /></span></div>
<div style="float:left;padding-left:10px;"><label>Male & Female</label><span style="padding-left:4px;"><input type='radio' name='gender' value='' onclick="javascipt:submitSearchForm();return true;" /></span></div>

<div class="clr"></div>
<input type="hidden" id="genderSearchUrl" name="genderSearchUrl" value="/select_guest.php" />
<input type="hidden" id="searchbygenderemail" name="email" value="<?php echo $email ?>" />
<input type="hidden" id="submitme" name="submitme" value=""/>
</form>
</div>

<div class="clr"></div>


<?php
	guest_total_pages($location);
        search_by_gender($location);
}
?>

