
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
<title> CitiCupid - Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="dating service in los angeles" />


<link rel='stylesheet' type='text/css' href='/files/main_style.css' />

 <script>

		function showhide(spanname, namefield) {
			if (document.getElementById(spanname).style.display=="") {
				document.getElementById(spanname).style.display="none";
                                document.getElementById(namefield).innerHTML = '[ + ] More';
			}
			else if (document.getElementById(spanname).style.display=="none"){
				document.getElementById(spanname).style.display="";
                                document.getElementById(namefield).innerHTML = '[ - ] Close';
			}
		}

function validate(form_id,email) {
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   var address = document.forms[form_id].elements[email].value;
   if(reg.test(address) == false) { 
      alert('Invalid Email Address');
      return false;
   }
}

function validateThis(dataform) { //This is the name of the function
  if( validate("signupform", "email") == false ){
    return false;
  }

   if (dataform.agree.checked == false) { //This checks to make sure the field is not empty
     alert("Please agree to our policy inorder to sign up.");
     return false; //This prevents the form from being submitted
   } else {
     return true;
   }

}
</script>

<style type='text/css'>

td{
  text-align:top;
  padding:5px;
  vertical-align:top;
}
div {
  white-space: nowrap;
}

#text {
    background: url("couple.jpg") no-repeat scroll center bottom transparent
}

.form-required {
  color:red;
}

</style>


</head>
<body class="weeblypage-index" style="background: url('couple.jpg');">
      <div id="wrapper">
            <div class="title"><span id="weebly_site_title">CitiCUPID (Los Angeles)</span><br><font style="font-size:17pt">Social VIP Events By Invite Only</font></div>

            <div id="content">
            <div id="navigation">
                
<ul style="color:white;">
  <li>


<div align="left" style="overflow-y: hidden;">
<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1">
</script>
<fb:like href="" send="true" width="350" show_faces="true" font="">
</fb:like>
</div>

  </li>
  <li><a href="/index.php">Search</a></li>
  <li style="color:red;">Register</li>
  <li><a href="/contact-us.html">Contact Us</a></li>
  <li><a href="http://twitter.com/#!/citicupid">Twitter</a></li>
  <li>
<a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="citicupid">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
  </li>
</ul>
            </div>
            <div id="text">
                <div id="header">
                    <div class="weebly_header"></div>
                </div>
                <div id="entry" style="background-color:white;">
                <div id='weebly_page_content_container'><!-- WEEBLY_START_CONTENT --><div id='weebly_page_content_container'><div >


<?php
$today = Date('Y-m-d H:i:s');

if (isset($_POST['submit'])) {

  $dbImageUrls = "";

  foreach ($_FILES["attachment"]["error"] as $key => $error)
  {
       $tmp_name = $_FILES["attachment"]["tmp_name"][$key];
       if (!$tmp_name) continue;

       $name = basename($_FILES["attachment"]["name"][$key]);

       $imagePath = '/home/users/web/b283/ipg.citicupidcom/images/' . $name;
       if($_POST[publicprofile] == 'on'){
         $imagePath = '/home/users/web/b283/ipg.citicupidcom/publicimages/' . $name;
       }

    if ($error == UPLOAD_ERR_OK)
    {
        if ( move_uploaded_file($tmp_name, $imagePath) ){
            $uploaded_array[] .= "Uploaded file '".$name."'.<br/>\n";
           
            $imageUrl = '/images/icons/' . $name;
            if($_POST[publicprofile] == 'on'){
              $imageUrl = '/publicimages/icons/' . $name;
            }

       $thumbnail_path = '/home/users/web/b283/ipg.citicupidcom/images/icons/' . $name;
       if($_POST[publicprofile] == 'on'){
         $thumbnail_path = '/home/users/web/b283/ipg.citicupidcom/publicimages/icons/' . $name;
       }

             $make_magick = system("convert -geometry 300 x 0 $imagePath $thumbnail_path", $retval);

            $dbImageUrls .= $imageUrl . ',';

        }else{
            $errormsg .= "Could not move uploaded file '".$tmp_name."'to'".$name."'<br/>\n";
        }
    }
    else $errormsg .= "Upload error. [".$error."] on file '".$name."'<br/>\n";
  }

echo "<font style='color:black'>You have successfully registered.</font>"; 

}
?>

<div  class="paragraph editable-text" style=" text-align: center; ">Get Registered Get Invited</div>

<div style="color: gray; padding: 5px;" >

<form id="signupform" enctype="multipart/form-data" action="<?php echo $PHP_SELF;?>" method="POST" onSubmit="return validateThis(this)">

<div style="margin-top:10px;">

<a href="javascript:showhide('profile2', 'profile2showhide');"><div id="profile2showhide" style="color:blue;padding:5px;">[ + ] More</div></a>
<table id="profile2" style="border: 1px solid gray; width:520px; display:none;">
<caption>Describe You</caption>
<tr><td>

<table><tr><td>

<div ><div class="weebly-form-field" style="margin:5px 0px 0px 0px;">
<label class="weebly-form-label">Pictures:</label>
<table>
<tr><td>
<span style="white-space:newline;"><input  tabindex="13" type="file" name="attachment[]" /></span>
</td></tr>
<!--
<tr><td>
<span style="white-space:newline;"><input  tabindex="14" type="file" name="attachment[]" /></span>
</td></tr>
<tr><td>
<span cstyle="white-space:newline;"><input  tabindex="15" type="file" name="attachment[]" /></span>
</td></tr>
-->
 </table>
</div></div>


</td></tr></table>


<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input type="checkbox" name="publicprofile" id="publicprofile" value="on" checked="1" /> &nbsp;&nbsp; Make your profile public<br />
</div>

<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input type="checkbox" name="agree" id="agree" /> <font style="color:red">*</font> Please agree to our policy<br />
</div>

<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input tabindex="36" type="submit" name="submit" value="Submit" />
</div>
</form>

<div id="624927300227336228" align="left" style="width: 100%; overflow-y: hidden;"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2178827339426285";
/* citi cupid */
google_ad_slot = "7556916937";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
</div>

</div>



</div></div>
                </div>    
            </div>
            <div class="clear"></div>     
            </div>
                <div id="footer" style="color:blue">

                    @Copyright 2011 |  
                     <a href="privacy.html">Privacy</a>  |
                     <a href="terms.html">Terms Of Use</a>  |
                     <a href="http://www.citicupid.com/testimonial">Testimonials</a>  |
                     <a href="http://www.ipage.com/join/index.bml?AffID=664390">Hosted By IPage</a>  |
                     <a href="http://www.ticketleap.com/?rc=rqd4w0e">Free Ticket Service</a>
            </div>

                </div>
    </div> 
</div>


</body>
</html>
    
