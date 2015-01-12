
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
<title> CitiPromo - Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="events service in los angeles" />
<meta name="keywords" content="social networking, mixer, events service, dating service, los angles, love, singles, romance, soulmate, date, citipromo, sex, porn, celebrities, actress, actors, rate, rating, hotness, beauty, entertainment, trance, rap, soul, alcohol, vodka, hennessy cognac, music, hot, lesbian, gay, match, dating, wedding, marriage, couples, cupid, entertainment, events, drinking, alcohol, parties" />


<link rel='stylesheet' type='text/css' href='/files/main_style.css' />

<script type="text/javascript" src="http://www.citipromo.com/script/dj.js">  </script>

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

include("/home/users/web/b283/ipg.citicupidcom/inc/djevents.php");

<p>
Request a secret key to manage your account
</p>

<!-- hidden form -->
<form action="<?php echo $PHP_SELF; ?>" method="POST" name="deleterequestform">
<div style="margin:10px 5px 10px 5px;">
<input type="hidden" id="event_id" name="event_id" value="CHANGE_ME"/>
<input type="text" id="email" name="email" />
<input type="hidden" id="submiteventdeleterequest" name="submiteventdeleterequest" value=""/>
<div class="weebly-form-field" style="margin:0px 0px 10px 0px;">
<?php if($_POST['email'] == '') { ?>
<label style="color:red;">Contact:</label> &nbsp;&nbsp; <input type="text" name="email" style="width:300px;"/>
<?php } else { ?>
<label style="color:red;">Contact:</label> &nbsp;&nbsp; <input type="text" name="email" value="<?php echo $_POST['email'] ?>"  style="width:300px;"/>
<?php } ?>
</div>
</div>
</form>




?>

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
    
