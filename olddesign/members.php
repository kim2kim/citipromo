
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
<title> CitiCupid - Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="dating service in los angeles" />
<meta name="keywords" content="mixer, dating service, los angles, love, singles, romance, soulmate, date, cupid, sex, porn, lesbian, gay, match, dating, wedding, marriage, couples, cupid, entertainment, events, drinking, alcohol, parties" />


<link rel='stylesheet' type='text/css' href='/files/main_style.css' />

 <script>

function validateThis(dataform) { //This is the name of the function

if (dataform.agree.checked == false) { //This checks to make sure the field is not empty
   alert("Please agree to our policy inorder to sign up.");
   return false; //This prevents the form from being submitted
   } else {
   return true;
   }

}
</script>

<style type='text/css'>

#wrapper{
  margin: 0px;
  width: 100%;
}

#content {
  width: 100%;
  text-align:left;
}

table {
  border: 1px solid gray;
}

th {
  color:black;
  padding: 5px;
  text-align:center;
}

td {
  text-align:left;
  padding:5px;
  vertical-align:top;
  color:black;
}
div {
  white-space: nowrap;
}

#text {
    background: url("") no-repeat scroll center bottom transparent;
    width: 1400px;
    text-align:left;
}

</style>


</head>
<body class="weeblypage-index" style="background: url('couple.jpg');color:balck;">
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
  <li><a href="/index.php">Sign Up</a></li>
  <li><a href="/events.html">Events</a></li>
  <li><a href="/contact-us.html">Contact Us</a></li>
  <li><a href="http://twitter.com/#!/citicupid">Twitter</a></li>
  <li>
<a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="citicupid">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
  </li>
</ul>
            </div>
            <div id="text">

                <div style="background-color:white;">
                <div id='weebly_page_content_container'>

<!-- WEEBLY_START_CONTENT -->
<div id='weebly_page_content_container'><div >

<table>
 


<?php

include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

$result = mysql_query("SELECT * FROM soulmate");

while($row = mysql_fetch_array($result))
  { 
    if($row['publicprofile'] == 'on'){
?>
<tr style="background-color:lightblue">
  <th>Joined On</th>
  <th>Name</th>
  <th>Email</th>
  <th>Zip</th>
  <th>Profession</th>
  <th>Hobbies</th>
  <th>Music Genre</th>
  <th>Birthday</th>
  <th colspan="3"></th>
</tr>
 <tr>
 <td><?php echo $row['created_on'] ?></td>
  <td><?php echo $row['name'] ?></td>
  <td><?php echo $row['email'] ?></td>
  <td><?php echo $row['zip'] ?></td>
  <td><?php echo $row['profession'] ?></td>
  <td><?php echo $row['hobbies'] ?></td>
  <td><?php echo $row['musictype'] ?></td>
  <td><?php echo $row['bmonth'] ?>-<?php echo $row['bday'] ?>-<?php echo $row['byear'] ?></td>
</tr>
<tr style="background-color:lightblue">
  <th>Income</th>
  <th>Gender</th>
  <th>Height</th>
  <th>Weight</th>
  <th>Eye Color</th>
  <th>Hair Color</th>
  <th>Hair Style</th>
  <th>Body Type</th>
  <th>Ethnicity</th>
  <th>Persona</th>
  <th>Status</th>
</tr>

<tr>
  <td><?php echo $row['income'] ?></td>
  <td><?php echo $row['gender'] ?></td>
  <td><?php echo $row['height'] ?></td>
  <td><?php echo $row['weight'] ?></td>
  <td><?php echo $row['eyecolor'] ?></td>
  <td><?php echo $row['haircolor'] ?></td>
  <td><?php echo $row['hairstyle'] ?></td>
  <td><?php echo $row['bodytype'] ?></td>
  <td><?php echo $row['ethnicity'] ?></td>
  <td><?php echo $row['persona'] ?></td>
  <td><?php echo $row['status'] ?></td>
</tr>

<tr>
  <td><?php echo $row['otherincome'] ?></td>
  <td><?php echo $row['othergender'] ?></td>
  <td><?php echo $row['otherheight'] ?></td>
  <td><?php echo $row['otherweight'] ?></td>
  <td><?php echo $row['othereyecolor'] ?></td>
  <td><?php echo $row['otherhaircolor'] ?></td>
  <td><?php echo $row['otherhairstyle'] ?></td>
  <td><?php echo $row['otherbodytype'] ?></td>
  <td style="white-space:normal;"><?php echo $row['otherethnicity'] ?></td>
  <td><?php echo $row['otherpersona'] ?></td>
  <td><?php echo $row['otherstatus'] ?></td>
</tr>

<tr>
  <td colspan="11"><?php 

$images = explode(",", $row['images']);

for($i = 0; $i < sizeof($images); ++$i)
{
   if($images[$i] != ''){
    echo "<img src=\"" . $images[$i] . "\" width=\"100px\" height=\"100px\" />";
   }
}

?>

</td>
</tr>

<?php
    }
  }
  mysql_close($con);
?>
 
</table>


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
    
