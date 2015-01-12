<div id="nextform" style="color:gray;padding:5px;">

<form id="djregisterform" enctype="multipart/form-data"  method="POST"  action="/djregister.php"  onSubmit="return validateForm(this, 'djregisterform');">

<div>
  <div style="float:left;width:100px;"><label>Email <span class="required">*</span></label></div>
  <div style="float:left;"><input tabindex="1" type="text" name="email" style="width:300px;" /></div>
</div>

<div class="clear"></div>

<div>
  <div style="float:left;width:100px;"><label>Name </label></div>
  <div style="float:left;"><input tabindex="2" type="text" name="fullname" style="width:300px;" /></div>
</div>

<div class="clear"></div>

<div>
  <div style="float:left;width:100px;"><label>Rate </label></div>
  <div style="float:left;"><input tabindex="2" type="text" name="rate" style="width:300px;" /></div>
</div>

<div class="clear"></div>

<div>
  <div style="float:left;width:100px;"><label>Info </label></div>
  <div style="float:left;"><input tabindex="2" type="text" name="info" style="width:300px;" /></div>
</div>

<div class="clear"></div>

<div>
  <div style="float:left;width:100px;"><label>Phone</label></div>
  <div style="float:left;"><input tabindex="3" type="text" name="phone" style="width:300px;" /></div>
</div>

<div class="clear"></div>

<div>
  <div style="float:left;width:100px;"><label>Address</label></div>
  <div style="float:left;"><input type="text" tabindex="4" name="address" style="width:300px;"/></div>
</div>

<div class="clear"></div>

<div>
  <div style="float:left;width:100px;"><label>Zip </label></div>
  <div style="float:left;"><input tabindex="4" type="text" name="zip" style="width:300px;" /></div>
</div>

<div class="clear"></div>

<div>
  <div style="float:left;width:100px;"><label>State </label></div>
  <div style="float:left;">
<select name="state"> 
<option value="" selected="selected">Select a State</option> 
<option value="AL">Alabama</option> 
<option value="AK">Alaska</option> 
<option value="AZ">Arizona</option> 
<option value="AR">Arkansas</option> 
<option value="CA">California</option> 
<option value="CO">Colorado</option> 
<option value="CT">Connecticut</option> 
<option value="DE">Delaware</option> 
<option value="DC">District Of Columbia</option> 
<option value="FL">Florida</option> 
<option value="GA">Georgia</option> 
<option value="HI">Hawaii</option> 
<option value="ID">Idaho</option> 
<option value="IL">Illinois</option> 
<option value="IN">Indiana</option> 
<option value="IA">Iowa</option> 
<option value="KS">Kansas</option> 
<option value="KY">Kentucky</option> 
<option value="LA">Louisiana</option> 
<option value="ME">Maine</option> 
<option value="MD">Maryland</option> 
<option value="MA">Massachusetts</option> 
<option value="MI">Michigan</option> 
<option value="MN">Minnesota</option> 
<option value="MS">Mississippi</option> 
<option value="MO">Missouri</option> 
<option value="MT">Montana</option> 
<option value="NE">Nebraska</option> 
<option value="NV">Nevada</option> 
<option value="NH">New Hampshire</option> 
<option value="NJ">New Jersey</option> 
<option value="NM">New Mexico</option> 
<option value="NY">New York</option> 
<option value="NC">North Carolina</option> 
<option value="ND">North Dakota</option> 
<option value="OH">Ohio</option> 
<option value="OK">Oklahoma</option> 
<option value="OR">Oregon</option> 
<option value="PA">Pennsylvania</option> 
<option value="RI">Rhode Island</option> 
<option value="SC">South Carolina</option> 
<option value="SD">South Dakota</option> 
<option value="TN">Tennessee</option> 
<option value="TX">Texas</option> 
<option value="UT">Utah</option> 
<option value="VT">Vermont</option> 
<option value="VA">Virginia</option> 
<option value="WA">Washington</option> 
<option value="WV">West Virginia</option> 
<option value="WI">Wisconsin</option> 
<option value="WY">Wyoming</option>
</select>
  </div>
</div>

<div class="clear"></div>

<div>
  <div style="float:left;width:100px;"><label>City</label></div>
  <div style="float:left;"><input tabindex="4" type="text" name="city" style="width:300px;" /></div>
</div>

<div class="clear"></div>

<div>
  <div style="float:left;width:100px;"><label>Website</label></div>
  <div style="float:left;"><input tabindex="4" type="text" name="website" style="width:300px;"/></div>
</div>

<div class="clear"></div>

<div>
  <div style="float:left;width:100px;"><label>Birthday </label></div>
  <div style="float:left;">
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
</div>

<div class="clear"></div>

<div>
  <div style="float:left;width:100px;"><label>Gender </label></div>
  <div style="float:left;"><label>Male</label> <input  tabindex="9" type='radio' name='gender' value='male' /></div>
  <div style="float:left;padding-left:10px;"><label>Female</label> <input  tabindex="10" type='radio' name='gender' value='female' /></div>
</div>

<div class="clear"></div>

<div>
  <div style="float:left;width:100px;"><label>Music Genre </label></div>
  <div style="float:left;">
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

<div class="clear"></div>

<div>
  <div style="float:left;width:100px;"><label>Pictures </label></div>
  <div style="float:left;">
  <input  tabindex="12" type="file" name="attachment[]" /><br/>
  </div>
</div>

<div class="clear"></div>


<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input type="checkbox" name="agree" id="agree" /> <font style="color:red">*</font> Please agree to our policy<br />
</div>


<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input tabindex="15" type="submit" name="registerme" value="Done" />
</div>
</form>

</div>
