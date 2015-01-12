<div id="previousform" style="color: black; background-color:white;" >

<form id="neweventform" enctype="multipart/form-data" action="/events.php" method="POST" onSubmit="return validateForm(this, 'neweventform');">

<input type="hidden" id="url" name="url" value="/events.php"/>

<div><div class="weebly-form-field" style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label" for="input-248748361112527009">Your Email <span class="form-required">*</span></label>
  <div class="weebly-form-input-container">
<?php if($_POST['email'] == '') { ?>
    <input tabindex="1" id="input-248748361112527009" class="weebly-form-input" type="text" name="email" style="width:370px;" />
<?php } else { ?>
    <input tabindex="1" id="input-248748361112527009" class="weebly-form-input" type="text" name="email" value="<?php echo $_POST['email'] ?>" style="width:370px;" />
<?php } ?>
  </div>
</div></div>

<div><div class="weebly-form-field" style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label" for="input-248748361112527009">Your Name </label>
  <div class="weebly-form-input-container">
    <input tabindex="2" id="input-248748361112527009" class="weebly-form-input" type="text" name="fullname" style="width:370px;" />
  </div>
</div></div>

<div><div class="weebly-form-field" style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label">Event Description <span class="form-required"></span></label>
  <div class="weebly-form-input-container">
    <textarea  tabindex="3"  rows="2" cols="20" name="description" style="width:370px;" > </textarea>
  </div>
</div></div>

<div ><div style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label"> Location </label>
  <div>
    <input  tabindex="4" type="text" name="location" style="width:285px;" />
  </div>
</div>
</div>

<div ><div style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label"> Date & Time </label>
  <div>
    <input  tabindex="4" type="text" name="date" style="width:285px;" />
  </div>
</div>
</div>

<div><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
<label class="weebly-form-label">Pictures:</label>

<table>

<tr><td>
<span style="white-space:newline;"><input  tabindex="13" type="file" name="attachment[]" /></span>
</td></tr>
 </table>

</div></div>

<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input type="checkbox" name="agree" id="agree" /> <font style="color:red">*</font> Please agree to our policy<br />
</div>

<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input tabindex="36" type="submit" name="addneweventsubmit" value="Next" />
</div>
</form>
</div> <!-- PREVIOUS FORM -->

    
