
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
<title> CitiPromo - Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="dating service in los angeles" />
<meta name="keywords" content="mixer, dating service, los angles, love, singles, romance, soulmate, date, citipromo, sex, porn, celebrities, actress, actors, rate, rating, hotness, beauty, entertainment, trance, rap, soul, alcohol, vodka, hennessy cognac, music, hot, lesbian, gay, match, dating, wedding, marriage, couples, cupid, entertainment, events, drinking, alcohol, parties,dj, promoters, promoter, djing, promoting" />


<link rel='stylesheet' type='text/css' href='/files/main_style.css' />

 <script>

  function likesThisSong(hotCount, soulmateId) { //This is the name of the function
    if(soulmateId == -1){
      return false;
    }

    if (document.getElementById('likes' + soulmateId).checked == true) {   //This checks to make sure the field is not empty

     document.getElementById('hot_count').value = hotCount;
     document.getElementById('soulmate_id').value = soulmateId;
     document.getElementById('rateme').value = 'GO';

     document.ratemeform.submit();
     return true; //This prevents the form from being submitted
   } else {
     return false;
   }
  }
  
  function submitSearchForm(){
    document.getElementById('submitme').value = 'GO';
    document.searchform.submit();
  }
</script>


<style type='text/css'>

table {
  color: black;
}

td{
  text-align:top;
  padding:5px;
  vertical-align:top;
}
div {
  white-space: nowrap;
}

#text {
    background: url("") no-repeat scroll center bottom transparent
}

.form-required {
  color:red;
}

</style>


</head>
<body class="weeblypage-index" style="background-color:black;">
      <div id="wrapper">

<?php   

  include("/home/users/web/b283/ipg.citicupidcom/inc/header.php"); 
  signup_header("Los Angeles");

?>

            <div id="content">
            <div id="navigation">
                
<?php    include("/home/users/web/b283/ipg.citicupidcom/inc/links.php"); ?>

            </div>
            <div id="text">
                <div id="header">
                    <center><font style="color: white;font-weight:bold;font-size:25pt;">Most Fan</font></center>
                    <div class="weebly_header"></div>
                </div>
                <div id="entry" style="background-color:white;">
                <div id='weebly_page_content_container'><!-- WEEBLY_START_CONTENT --><div id='weebly_page_content_container'><div >


<div  class="paragraph editable-text" style=" text-align: center; ">Utimate Playlist</div>

<div class="weebly-form-field" style="margin:5px 0px 0px 0px;text-align:left;width:100%;color:black;">

<form name="searchform" id="searchform" action="<?php echo $PHP_SELF;?>" method="POST">

<div ><div style="margin:5px 0px 5px 0px;padding:10px;">
<?php if($_POST['email'] == '') { ?>
  <label class="weebly-form-label"> Search by Email </label><input  tabindex="1" type="text" name="email" style="width:285px;" /><?php } else { ?>
  <label class="weebly-form-label"> Search by Email </label><input  tabindex="1" type="text" name="email" value="<?php echo $_POST['email'] ?>" style="width:285px;" />
<?php } ?>
 
</div></div>

<div style="margin:5px 0px 0px 0px;padding:10px;">
  <div style="padding-top:5px;padding-bottom:5px;"><span>OR</span>
    <select name="category" id="category" onchange="javascript:submitSearchForm(); return true;" >
       <option value="">------------------------ Select A Category -------------------</option>
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
    <input type="hidden" id="submitme" name="submitme" value=""/>
</form>

</div>




<form action="<?php echo $PHP_SELF;?>" method="POST" name="ratemeform" onSubmit="return submitForm('0', '-1');">
<div style="margin:10px 5px 10px 5px;">
<input type="hidden" id="soulmate_id" name="soulmate_id" value="CHANGE_ME"/>
<input type="hidden" id="hot_count" name="hot_count" value="CHANGE_ME"/>
<input type="hidden" id="rateme" name="rateme" value=""/>
</div>
</form>



<?php
                                  include("/home/users/web/b283/ipg.citicupidcom/inc/playlistsubmit.php");
?>


<div style="color: gray; padding: 5px;" > <!-- NEXT FORM -->
<div id="nextform" style="margin-top:10px;">

<div style=" text-align: center; "><hr/></div>

<form id="signupform" method="POST">

<div ><div style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label"><span style="color:red">*</span> Email </label>
  <div>
<?php if($_POST['email'] == '') { ?>
    <input  tabindex="1" type="text" name="email" style="width:285px;" />
<?php } else { ?>
    <input  tabindex="1" type="text" name="email" value="<?php echo $_POST['email'] ?>" style="width:285px;" />
<?php } ?>
  </div>
</div></div>

<div ><div style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label"> Link </label>
  <div>
    <input  tabindex="1" type="text" name="link" style="width:285px;" />
  </div>
</div>
</div>

<div ><div style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label"> Artist </label>
  <div>
    <input  tabindex="1" type="text" name="artist" style="width:285px;" />
  </div>
</div>
</div>

<div ><div style="margin:5px 0px 5px 0px;">
  <label class="weebly-form-label"> Title </label>
  <div>
    <input  tabindex="2" type="text" name="title" style="width:285px;" />
  </div>
</div>
</div>


<div style="margin:5px 0px 0px 0px;">
  <label class="weebly-form-label">  Category </label>
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

<!-- Google ad begins -->

<script type="text/javascript"><!--
google_ad_client = "ca-pub-2178827339426285";
/* citi cupid */
google_ad_slot = "7556916937";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>

<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<!-- Google ad ends -->
</div>

</div>



</div></div>
                </div>    
            </div>
           <div class="clear"></div>     
            </div>
<?php
  include("/home/users/web/b283/ipg.citicupidcom/inc/footer.php");
?>
                </div>
    </div> 
</div>


</body>
</html>
    
