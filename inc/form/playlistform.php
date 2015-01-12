<div style="color:black;">
<form id="signupform" method="POST" action="/djmain.php" enctype="multipart/form-data">

<div><div style="margin:5px 0px 5px 0px;">
  <label><span style="color:red">*</span> Email </label>
  <div>
<?php if($_POST['email'] == '') { ?>
    <input  tabindex="1" type="text" name="email" style="width:285px;" />
<?php } else { ?>
    <input  tabindex="1" type="text" id="djratemeemail" name="email" value="<?php echo $_POST['email'] ?>" style="width:285px;" />
<?php } ?>
  </div>
</div></div>

<div>
  <div style="float:left;width:100px;"><label>MP3 File</label></div>
  <div style="float:left;">
  <input  tabindex="12" type="file" name="attachment[]" /><br/>
  </div>
</div>

<div class="clr"></div>

<div ><div style="margin:5px 0px 5px 0px;">
  <label> Artist </label>
  <div>
    <input  tabindex="1" type="text" name="artist" style="width:285px;" />
  </div>
</div>
</div>

<div ><div style="margin:5px 0px 5px 0px;">
  <label> Title </label>
  <div>
    <input  tabindex="2" type="text" name="title" style="width:285px;" />
  </div>
</div>
</div>


<div style="margin:5px 0px 0px 0px;">
  <label>  Category </label>
  <div style="padding-top:5px;padding-bottom:5px;">
    <select tabindex="3" name="category">
       <option value="">------------------------------- SELECT ----------------------------</option>
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

<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input tabindex="4" type="submit" name="submit" value="Add" />
</div>

</form>
</div>
