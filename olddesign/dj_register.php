<div style="padding:10px;"><span><a href="/index.php">Member Registration</span></a>  |  <span  style="color:gray;font-weight:bold;">Promoter/DJ Registration</span></div>

<?php
  include("/home/users/web/b283/ipg.citicupidcom/inc/djregister.php");
  dj_register("los angeles");
?>

<div style="color: gray; padding: 5px;" > <!-- NEXT FORM -->
<div id="nextform" style="margin-top:10px;">

<form id="djregisterform" enctype="multipart/form-data"  method="POST"  action="/signup.php?dj=1"  onSubmit="return validateForm(this, 'djregisterform');">

<div><div class="weebly-form-field" style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label" for="input-248748361112527009">Email <span class="form-required">*</span></label>
  <div class="weebly-form-input-container">
    <input tabindex="1" id="input-248748361112527009" class="weebly-form-input" type="text" name="email" style="width:370px;" />
  </div>
</div></div>

<div><div class="weebly-form-field" style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label" for="input-248748361112527009">Name <span class="form-required">*</span></label>
  <div class="weebly-form-input-container">
    <input tabindex="2" id="input-248748361112527009" class="weebly-form-input" type="text" name="fullname" style="width:370px;" />
  </div>
</div></div>

<div id="profile1">

<div ><div style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label"> Promoter or DJ </label>
  <div>
    <input  tabindex="3" type="text" name="profession" style="width:285px;" />
  </div>
</div>
</div>

<div ><div style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label"> Zip </label>
  <div>
    <input tabindex="5" type="text" name="zip" style="width:285px;" />
  </div>
</div>
</div>

<div ><div style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label"> Referred By </label>
  <div>
    <input  tabindex="5" type="text" name="referredBy" style="width:285px;" />
  </div>
</div>
</div>

 
<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Birthday </label>
  <div style="padding-top:5px;padding-bottom:5px;">

   <select  tabindex="6" name="bmonth">
    <option value="none">Month</option>
    <option value="1">January</option>
    <option value="2">February</option>
    <option value="3">March</option>
    <option value="4">April</option>
    <option value="5">May</option>
    <option value="6">June</option>
    <option value="7">July</option>
    <option value="8">August</option>
    <option value="9">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
   </select>
   <select  tabindex="7" name="bday">
    <option value="none">Day</option>
   <?php
    for ($i=1; $i<=31; $i++)
    {
     echo "<option value='$i'>$i</option>";
    }
   ?>
   </select>
   <select  tabindex="8" name="byear">
   <option value="none">Year</option>
   <?php
    for ($i=2006; $i>=1900; $i=$i-1)
    {
     echo "<option value='$i'>$i</option>";
    }
   ?>
   </select>
  </div>
</div></div>


<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Gender </label>
  <div style="padding:5px;">
    <span class='form-radio-container'><input  tabindex="9" type='radio' name='gender' value='male' />&nbsp;&nbsp;<label>  Male  </label></span>
  </div>
  <div style="padding:5px;">
<span class='form-radio-container'><input  tabindex="10" type='radio' name='gender' value='female' />&nbsp;&nbsp;<label>  Female  </label></span>
  </div>
</div></div>

<div style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Music Genre </label>
  <div style="padding-top:5px;padding-bottom:5px;">
    <select tabindex="11" name="musictype[]" multiple="multiple" size="6">
       <option value="">------------------- SELECT ---------------</option>
                                        <option value="All">All</option>
					<option value="Ambient"> Ambient </option>
					<option value="Disco">Disco</option>
					<option value="Electro">Electro</option>
					<option value="Euro-Dance">Euro-Dance</option>
					<option value="Country">Country</option>
					<option value="Hindi Remix">Hindi Remix</option>
					<option value="Bhangra">Bhangra </option>
					<option value="Hip-Hop">Hip-Hop</option>
					<option value="Old School">Old School</option>
                                        <option value="R&B">R&B</option>
                                        <option value="Rap">Rap</option>	
                                       <option value="Alternative">Alternative</option>					
					<option value="Jazz">Jazz</option>
					<option value="Latin">Latin</option>
					<option value="Soul">Soul</option>
                                       <option value="Pop">Pop</option>
					<option value="Techno">Techno</option>
					<option value="Trance">Trance</option>
                                        <option value="House">House</option>
					<option value="Tribal">Tribal</option>
                                        <option value="Trip-Hop">Trip-Hop</option>
    </select>
  </div>
</div>


<div><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
<label class="weebly-form-label">Pictures:</label>

<table>

<tr><td>
<span style="white-space:newline;"><input  tabindex="12" type="file" name="attachment[]" /></span>
</td></tr>
<tr><td>
<span style="white-space:newline;"><input  tabindex="13" type="file" name="attachment[]" /></span>
</td></tr>
<tr><td>
<span cstyle="white-space:newline;"><input  tabindex="14" type="file" name="attachment[]" /></span>
</td></tr>

 </table>

</div></div>

</div> <!-- profile1 -->

<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input type="checkbox" name="agree" id="agree" /> <font style="color:red">*</font> Please agree to our policy<br />
</div>


<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input tabindex="15" type="submit" name="registerme" value="Done" />
</div>
</form>
</div>
