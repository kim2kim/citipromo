
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
<title> CitiPromo - Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="dating service in los angeles" />
<meta name="keywords" content="mixer, dating service, los angles, love, singles, romance, soulmate, date, promo, sex, porn, celebrities, actress, actors, rate, rating, hotness, beauty, entertainment, trance, rap, soul, alcohol, vodka, hennessy cognac, music, hot, lesbian, gay, match, dating, wedding, marriage, couples, citipromo, entertainment, events, drinking, alcohol, parties,dj, promoters, promoter, djing, promoting" />


<link rel='stylesheet' type='text/css' href='/files/main_style.css' />

<script type="text/javascript" src="http://www.citipromo.com/script/dj.js">  </script>

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
<div  class="paragraph editable-text" style=" text-align: center;color:white; ">Upcoming Events</div>

<div style="padding:10px;">
<a href="javascript:showhideeventform('previousform');">Add Your Event</a>
</div>

<?php
  include("/home/users/web/b283/ipg.citicupidcom/inc/djevents.php");
  include("/home/users/web/b283/ipg.citicupidcom/inc/addnewevent.php");
  add_event("los angeles");
?>

<div id="previousform" style="color: black; padding: 5px;display:none;background-color:white;margin:10px;" >
<p><span style="color:red">*</span> An image is required for all event posting.</p>

<form id="neweventform" enctype="multipart/form-data" action="<?php echo $PHP_SELF; ?>" method="POST" onSubmit="return validateForm(this, 'neweventform');">


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
<tr><td>
<span style="white-space:newline;"><input  tabindex="14" type="file" name="attachment[]" /></span>
</td></tr>
<tr><td>
<span cstyle="white-space:newline;"><input  tabindex="15" type="file" name="attachment[]" /></span>
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

<form action="<?php echo $PHP_SELF; ?>" method="POST" name="attendingform" onSubmit="return submitAttendingForm('0', '-1');">
<div style="margin:10px 5px 10px 5px;">
<input type="hidden" id="event_id" name="event_id" value="CHANGE_ME"/>
<input type="hidden" id="attending" name="attending" value="CHANGE_ME"/>
<input type="hidden" id="submitattending" name="submitattending" value=""/>
<div class="weebly-form-field" style="margin:0px 0px 10px 0px;">
<?php if($_POST['email'] == '') { ?>
<label style="color:red;">Contact:</label> &nbsp;&nbsp; <input type="text" id="attending_email" name="email" style="width:300px;"/>
<?php } else { ?>
<label style="color:red;">Contact:</label> &nbsp;&nbsp; <input type="text" id="attending_email" name="email" value="<?php echo $_POST['email'] ?>"  style="width:300px;"/>
<?php } ?>
</div>
</div>
</form>

<form action="<?php echo $PHP_SELF; ?>" method="POST" name="eventratingform" onSubmit="return submitEventRatingForm('0', '-1');">
<input type="hidden" id="likes_event_id" name="event_id" value="CHANGE_ME"/>
<input type="hidden" id="eventratingcount" name="eventratingcount" value="CHANGE_ME"/>
<input type="hidden" id="likes_email" name="email" value="CHANGE_ME"/>
<input type="hidden" id="submiteventrating" name="submiteventrating" value=""/>
</form>


<?php
  dj_events("los angeles");
?>

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
</div>



</body>
</html>
    
