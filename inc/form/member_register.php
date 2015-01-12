<?php if($showForm1) { ?>
<div id="previousform" style="color: gray; padding: 5px;" >
<?php }else { ?>
<div id="previousform" style="color: gray; padding: 5px;display:none" >
<?php } ?>

<form id="uploadform" enctype="multipart/form-data" action="/guest.php" method="POST" onSubmit="return validateThis(this);">

<div>
  <div style="float:left;width:100px;"><label>Email <span class="required">*</span></label></div>
  <div style="float:left;"><input tabindex="1" type="text" name="email" style="width:300px;" /></div>
</div>

<div class="clr"></div>

<div>
  <div style="float:left;width:100px;"><label>Name </label></div>
  <div style="float:left;"><input tabindex="2" type="text" name="fullname" style="width:300px;" /></div>
</div>

<div class="clr"></div>

<div>
  <div style="float:left;width:100px;"><label>Gender </label></div>
  <div style="float:left;"><label>Male</label> <input  tabindex="9" type='radio' name='gender' value='male' /></div>
  <div style="float:left;padding-left:10px;"><label>Female</label> <input  tabindex="10" type='radio' name='gender' value='female' /></div>
</div>

<div class="clr"></div>

<div>
  <div style="float:left;width:100px;"><label>Zip </label></div>
  <div style="float:left;"><input tabindex="4" type="text" name="zip" style="width:300px;" /></div>
</div>

<div class="clr"></div>

<div>
  <div style="float:left;width:100px;"><label>Referred By </label></div>
  <div style="float:left;"><input tabindex="5" type="text" name="referredBy" style="width:300px;" /></div>
</div>

<div class="clr"></div>

<div>
  <div style="float:left;width:100px;"><label>Pictures </label></div>
  <div style="float:left;">
  <input  tabindex="12" type="file" name="attachment[]" /><br/>
  </div>
</div>

<div class="clr"></div>

<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input type="checkbox" name="publicprofile" id="publicprofile" value="on" checked="1" /> &nbsp;&nbsp; Make your profile public<br />
</div>

<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input type="checkbox" name="agree" id="agree" /> <font style="color:red">*</font> Please agree to our policy<br />
</div>

<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input tabindex="36" type="submit" name="upload" value="Next" />
</div>
</form>
</div> <!-- PREVIOUS FORM -->


<div style="color: gray; padding: 5px;" > <!-- NEXT FORM -->
<?php if($showForm1) { ?>
<div id="nextform" style="margin-top:10px;display:none;">
<?php }else { ?>
<div id="nextform" style="margin-top:10px;">
<?php } ?>

<form id="signupform" method="POST" action="/guest.php">

<input type="hidden" name="email" value="<?php echo $_POST[email] ?>"/>

<div id="profile1">

<div ><div style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label"> Profession </label>
  <div>
    <input  tabindex="5" type="text" name="profession" style="width:285px;" />
  </div>
</div>
</div>

<div ><div style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label"> Music Genre </label>
  <div>
    <input type="text" name="musictype" style="width:285px;" />
  </div>
</div>
</div>

<div ><div style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label"> Hobbies </label>
  <div>
    <input type="text" name="hobbies" style="width:285px;" />
  </div>
</div>
</div>

</div>

<a href="javascript:showhide('profile2', 'profile2showhide');"><div id="profile2showhide" style="color:blue;padding:5px;">[ + ] Open</div></a>

<table id="profile2" style="border: 1px solid gray; width:500px; display:none;">
<caption>Describe You</caption>
<tr><td>

<table>
<tr>
<td>
<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Marital Status </label>
  <div style="padding-top:5px;padding-bottom:5px;">
    <select  tabindex="6" name="status">
        <option value="">N/A</option>
        <option value="single">Single</option>
        <option value="married">Married</option>
        <option value="divorced">Divorced</option>
        <option value="widow">Widow</option>
    </select>
  </div>
</div></div>
</td>
<td>

<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Birthday </label>
  <div style="padding-top:5px;padding-bottom:5px;">

   <select  tabindex="7" name="bmonth">
    <option value="">Month</option>
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
   <select  tabindex="8" name="bday">
    <option value="">Day</option>
   <?php
    for ($i=1; $i<=31; $i++)
    {
     echo "<option value='$i'>$i</option>";
    }
   ?>
   </select>
   <select  tabindex="9" name="byear">
   <option value="">Year</option>
   <?php
    for ($i=2006; $i>=1900; $i=$i-1)
    {
     echo "<option value='$i'>$i</option>";
    }
   ?>
   </select>
  </div>
</div></div>

</td><td>

<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Income </label>
  <div style="padding-top:5px;padding-bottom:5px;">
    <select  tabindex="10" name="income">
        <option value="">N/A</option>
        <option value="0-10000">Less than $10,000</option>
        <option value="10000-25000">$10,000 - $25,000</option>
        <option value="25000-40000">$125,000 - $40,000</option>
        <option value="40000-70000">$40,000 - $70,000</option>
        <option value="70000-100000">$70,000 - $100,000</option>
        <option value="100000-150000">$100,000 - $150,000</option>
        <option value="over150000">Greater than $150,000</option>
        <option value="0">Prefer not to say</option>
    </select>
  </div>
</div></div>

</td></tr></table>

<table>
<tr>

<td>

<div ><div style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label"> Height </label>
  <div>
    <input  tabindex="16" type="text" name="height" style="width:50px;" />
  </div>
</div>
</div>

</td>
<td>

<div ><div style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label"> Weight </label>
  <div>
    <input  tabindex="17" type="text" name="weight" style="width:50px;" />
  </div>
</div>
</div>

</td>
<td>

<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Eye Color </label>
  <div style="padding-top:5px;padding-bottom:5px;">
    <select   tabindex="18" name="eyecolor">
        <option value="">N/A</option>
					<option value="Amber">Amber</option>				
					<option value="Black">Black</option>				
					<option value="Blue">Blue</option>				
					<option value="Blue/Green">Blue/Green</option>
					<option value="Blue/Grey">Blue/Grey</option>				
					<option value="Brown">Brown</option>				
					<option value="Brown/Green">Brown/Green</option>				
					<option value="Dk. Blue">Dk. Blue</option>				
					<option value="Dk. Brown">Dk. Brown</option>				
					<option value="Gray">Gray</option>				
					<option value="Green">Green</option>				
					<option value="Grey/Green">Grey/Green</option>				
					<option value="Hazel">Hazel</option>				
					<option value="Lt. Blue">Lt. Blue</option>				
					<option value="Lt. Brown">Lt. Brown</option>				
					<option value="Violet">Violet</option>
    </select>
  </div>
</div></div>

</td>
<td>

<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Hair Color </label>
  <div style="padding-top:5px;padding-bottom:5px;">
    <select tabindex="19" name="haircolor">
       <option value="">N/A</option> 
					<option value="Auburn">Auburn</option>				
					<option value="Bald">Bald</option>				
					<option value="Black">Black</option>				
					<option value="Blonde">Blonde</option>				
					<option value="Brown">Brown</option>				
					<option value="Dk. Blonde">Dk. Blonde</option>				
					<option value="Dk. Brown">Dk. Brown</option>				
					<option value="Gray">Gray</option>				
					<option value="Lt. Blonde">Lt. Blonde</option>				
					<option value="Lt. Brown">Lt. Brown</option>				
					<option value="Platinum">Platinum</option>				
					<option value="Red">Red</option>				
					<option value="Salt & Pepper">Salt & Pepper</option>				
					<option value="Silver">Silver</option>				
					<option value="Strawberry Blonde">Strawberry Blonde</option>				
					<option value="White">White</option>

    </select>
  </div>
</div></div>

</td>
</td>
</tr>

<tr><td>

<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Hair Style </label>
  <div style="padding-top:5px;padding-bottom:5px;">
    <select  tabindex="20" name="hairstyle">
       <option value="">N/A</option>
					<option value="Afro">Afro</option>				
					<option value="Bald">Bald</option>				
					<option value="Buzz Cut">Buzz Cut</option>				
					<option value="Conservative">Conservative</option>				
					<option value="Curly">Curly</option>				
					<option value="Dreadlocks">Dreadlocks</option>				
					<option value="Long">Long</option>				
					<option value="Medium">Medium</option>				
					<option value="Shaved">Shaved</option>				
					<option value="Short">Short</option>				
					<option value="Waist">Waist</option>				
					<option value="Wavy">Wavy</option>
    </select>
  </div>
</div></div>

</td><td>

<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Body Type </label>
  <div style="padding-top:5px;padding-bottom:5px;">
    <select tabindex="21" name="bodytype">
       <option value="">N/A</option>
					<option value="Athletic">Athletic</option>				
					<option value="Extra Large">Extra Large</option>				
					<option value="Large">Large</option>				
					<option value="Lean Muscular">Lean Muscular</option>				
					<option value="Medium">Medium</option>				
					<option value="Muscular">Muscular</option>				
					<option value="Petite">Petite</option>				
					<option value="Plus">Plus</option>				
					<option value="Thin">Thin</option>
    </select>
  </div>
</div></div>

</td><td>

<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Ethnicity </label>
  <div style="padding-top:5px;padding-bottom:5px;">
    <select tabindex="22" name="ethnicity">
       <option value="">N/A</option>
                                        <option value="African">African</option>
					<option value="African/American">African/American</option>
					<option value="Amer-Asian">Amer-Asian</option>
					<option value="Asian">Asian</option>
					<option value="Caribbean">Caribbean</option>
					<option value="Caucasian">Caucasian</option>
					<option value="East Indian">East Indian</option>
					<option value="EuroAsian">EuroAsian</option>
					<option value="Exotic">Exotic</option>
					<option value="Filipino">Filipino</option>
					<option value="Hispanic">Hispanic</option>
					<option value="Mediterranian">Mediterranian</option>
					<option value="Middle Eastern">Middle Eastern</option>
					<option value="Multi-Racial">Multi-Racial</option>
					<option value="Native American">Native American</option>
					<option value="Nordic">Nordic</option>
					<option value="Pacific Islands">Pacific Islands</option>
					<option value="Portuguese">Portuguese</option>
					<option value="Scandinavian">Scandinavian</option>
					<option value="Sicilian">Sicilian</option>
					<option value="Spanish">Spanish</option>
    </select>
  </div>
</div></div>

</td><td>

<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Persona </label>
  <div style="padding-top:5px;padding-bottom:5px;">
    <select tabindex="23" name="persona">
       <option value="">N/A</option>
        <option value="hood">Hood/Getto/Thug</option>
        <option value="jock">Jock</option>
        <option value="homely">Homely</option>
        <option value="wild">Party Animal</option>
        <option value="nerdy">Nerdy</option>
        <option value="sophisticated">Sophisticated</option>
        <option value="classy">Classy</option>
        <option value="everything">The Whole Package</option>
    </select>
  </div>
</div></div>

</td><td></tr></table>

</td></tr></table>

<a href="javascript:showhide('profile3', 'profile3showhide');"><div id="profile3showhide" style="color:blue;padding:5px;">[ + ] Open</div></a>
<table id="profile3" style="border:1px solid gray; width:500px;display:none;">
<caption>Who do you want to meet</caption>

<tr>
<td>


<table>
<tr>

<td>

<div ><div style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label"> Height Range </label>
  <div>
    <input tabindex="24" type="text" name="otherheight" style="width:50px;" />
  </div>
</div>
</div>

</td>
<td>

<div ><div style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label"> Weight </label>
  <div>
    <input tabindex="25" type="text" name="otherweight" style="width:50px;" />
  </div>
</div>
</div>

</td>
<td>

<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Eye Color </label>
  <div style="padding-top:5px;padding-bottom:5px;">
    <select tabindex="26" name="othereyecolor">
       <option value="">N/A</option>
        <option value="all">All</option>
					<option value="Amber">Amber</option>				
					<option value="Black">Black</option>				
					<option value="Blue">Blue</option>				
					<option value="Blue/Green">Blue/Green</option>
					<option value="Blue/Grey">Blue/Grey</option>				
					<option value="Brown">Brown</option>				
					<option value="Brown/Green">Brown/Green</option>				
					<option value="Dk. Blue">Dk. Blue</option>				
					<option value="Dk. Brown">Dk. Brown</option>				
					<option value="Gray">Gray</option>				
					<option value="Green">Green</option>				
					<option value="Grey/Green">Grey/Green</option>				
					<option value="Hazel">Hazel</option>				
					<option value="Lt. Blue">Lt. Blue</option>				
					<option value="Lt. Brown">Lt. Brown</option>				
					<option value="Violet">Violet</option>

    </select>
  </div>
</div></div>

</td>
<td>

<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Hair Color </label>
  <div style="padding-top:5px;padding-bottom:5px;">
    <select tabindex="27" name="otherhaircolor">
       <option value="">N/A</option>
        <option value="all">All</option>
					<option value="Auburn">Auburn</option>				
					<option value="Bald">Bald</option>				
					<option value="Black">Black</option>				
					<option value="Blonde">Blonde</option>				
					<option value="Brown">Brown</option>				
					<option value="Dk. Blonde">Dk. Blonde</option>				
					<option value="Dk. Brown">Dk. Brown</option>				
					<option value="Gray">Gray</option>				
					<option value="Lt. Blonde">Lt. Blonde</option>				
					<option value="Lt. Brown">Lt. Brown</option>				
					<option value="Platinum">Platinum</option>				
					<option value="Red">Red</option>				
					<option value="Salt & Pepper">Salt & Pepper</option>				
					<option value="Silver">Silver</option>				
					<option value="Strawberry Blonde">Strawberry Blonde</option>				
					<option value="White">White</option>
    </select>
  </div>
</div></div>

</td>
</td>
</tr>

<tr><td>

<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Hair Style </label>
  <div style="padding-top:5px;padding-bottom:5px;">
    <select tabindex="28" name="otherhairstyle>
       <option value="">N/A</option>
        <option value="all">All</option>
					<option value="Afro">Afro</option>				
					<option value="Bald">Bald</option>				
					<option value="Buzz Cut">Buzz Cut</option>				
					<option value="Conservative">Conservative</option>				
					<option value="Curly">Curly</option>				
					<option value="Dreadlocks">Dreadlocks</option>				
					<option value="Long">Long</option>				
					<option value="Medium">Medium</option>				
					<option value="Shaved">Shaved</option>				
					<option value="Short">Short</option>				
					<option value="Waist">Waist</option>				
					<option value="Wavy">Wavy</option>
    </select>
  </div>
</div></div>

</td><td>

<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Body Type </label>
  <div style="padding-top:5px;padding-bottom:5px;">
    <select tabindex="29" name="otherbodytype">
       <option value="">N/A</option>
       <option value="all">All</option>
					<option value="Athletic">Athletic</option>				
					<option value="Extra Large">Extra Large</option>				
					<option value="Large">Large</option>				
					<option value="Lean Muscular">Lean Muscular</option>				
					<option value="Medium">Medium</option>				
					<option value="Muscular">Muscular</option>				
					<option value="Petite">Petite</option>				
					<option value="Plus">Plus</option>				
					<option value="Thin">Thin</option>
    </select>
  </div>
</div></div>

</td><td rowspan="2">

<div style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Ethnicity </label>
  <div style="padding-top:5px;padding-bottom:5px;">
    <select tabindex="30" name="otherethnicity[]" multiple="multiple" size="6">
       <option value="">N/A</option>
                                        <option value="All">All</option>
                                        <option value="African">African</option>
					<option value="African/American">African/American</option>
					<option value="Amer-Asian">Amer-Asian</option>
					<option value="Asian">Asian</option>
					<option value="Caribbean">Caribbean</option>
					<option value="Caucasian">Caucasian</option>
					<option value="East Indian">East Indian</option>
					<option value="EuroAsian">EuroAsian</option>
					<option value="Exotic">Exotic</option>
					<option value="Filipino">Filipino</option>
					<option value="Hispanic">Hispanic</option>
					<option value="Mediterranian">Mediterranian</option>
					<option value="Middle Eastern">Middle Eastern</option>
					<option value="Multi-Racial">Multi-Racial</option>
					<option value="Native American">Native American</option>
					<option value="Nordic">Nordic</option>
					<option value="Pacific Islands">Pacific Islands</option>
					<option value="Portuguese">Portuguese</option>
					<option value="Scandinavian">Scandinavian</option>
					<option value="Sicilian">Sicilian</option>
					<option value="Spanish">Spanish</option>
    </select>
  </div>
</div>

</td><td>

<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Persona </label>
  <div style="padding-top:5px;padding-bottom:5px;">
    <select tabindex="31" name="otherpersona">
       <option value="">N/A</option>
        <option value="hood">Hood/Getto/Thug</option>
        <option value="jock">Jock</option>
        <option value="homely">Homely</option>
        <option value="wild">Party Animal</option>
        <option value="nerdy">Nerdy</option>
        <option value="sophisticated">Sophisticated</option>
        <option value="classy">Classy</option>
        <option value="everything">The Whole Package</option>
    </select>
  </div>
</div></div>

</td></tr>
<tr>
<td>
<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Gender </label>
  <div style="padding:5px;">
    <span class='form-radio-container'><input tabindex="32" type='radio' name='othergender' value='male' />&nbsp;&nbsp;<label>  Male</label></span>
  </div>
  <div style="padding:5px;">
<span class='form-radio-container'><input tabindex="33" type='radio' name='othergender' value='female' />&nbsp;&nbsp;<label>  Female</label></span>
  </div>
</div></div>
</td>
<td>
<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Marital Status </label>
  <div style="padding-top:5px;padding-bottom:5px;">
    <select tabindex="34" name="otherstatus">
       <option value="">N/A</option>
        <option value="single">Single</option>
        <option value="married">Married</option>
        <option value="divorced">Divorced</option>
        <option value="widow">Widow</option>
    </select>
  </div>
</div></div>
</td>

<td>

<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Income </label>
  <div style="padding-top:5px;padding-bottom:5px;">
    <select tabindex="35" name="otherincome">
       <option value="">N/A</option>
        <option value="0-10000">Less than $10,000</option>
        <option value="10000-25000">$10,000 - $25,000</option>
        <option value="25000-40000">$125,000 - $40,000</option>
        <option value="40000-70000">$40,000 - $70,000</option>
        <option value="70000-100000">$70,000 - $100,000</option>
        <option value="100000-150000">$100,000 - $150,000</option>
        <option value="over150000">Greater than $150,000</option>
        <option value="0">Prefer not to say</option>
    </select>
  </div>
</div></div>

</td></tr></table>

</td></tr></table>

<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input tabindex="36" type="submit" name="submit" value="Done" />
</div>
</form>
</div>
