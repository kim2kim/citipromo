
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
<title> CitiCupid - Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="dating service in los angeles" />
<meta name="keywords" content="mixer, dating service, los angles, love, singles, romance, soulmate, date, cupid, sex, porn, lesbian, gay, match, dating" />

 

<script type='text/javascript'>var STATIC_BASE = 'http://www.dragndropbuilder.com/';</script><script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/prototype/1.6.1/prototype.js' ></script>
<script type='text/javascript' src='http://www.dragndropbuilder.com/weebly/images/common/effects-1.8.2.js' ></script>
<script type='text/javascript' src='http://www.dragndropbuilder.com/weebly/images/common/weebly.js' ></script>
<script type='text/javascript' src='http://www.dragndropbuilder.com/weebly/images/common/lightbox202.js?8' ></script>
<script type='text/javascript' src='http://www.dragndropbuilder.com/weebly/libraries/flyout_menus.js?11'></script>
<script type='text/javascript'>function initFlyouts(){initPublishedFlyoutMenus([{"id":"856435877813501683","title":"Home","url":"index.html"}],'856435877813501683','<li class=\'weebly-nav-more\'><a href=\"#\">more...</a></li>','active')}if (Prototype.Browser.IE) window.onload=initFlyouts; else document.observe('dom:loaded', initFlyouts);</script>

<link rel='stylesheet' href='http://www.dragndropbuilder.com/weebly/images/common/common.css?6' type='text/css' />
<link rel='stylesheet' type='text/css' href='/files/main_style.css?790386873638684304' title='weebly-theme-css' />
<style type='text/css'>
#weebly_page_content_container div.paragraph, #weebly_page_content_container p, #weebly_page_content_container .product-description, .blog-sidebar div.paragraph, .blog-sidebar p{}
#weebly_page_content_container h2, #weebly_page_content_container .product-title, .blog-sidebar h2{}
#weebly_site_title{}

td, th{
  text-align:top;
  padding:5px;
  vertical-align:top;
}

th {
  background-color: light gray;
  white-space: nowrap;
}
div {
  white-space: nowrap;
}
</style>

</head>

<body>

<table>
 
<tr style="border: 1px solid black;">
  <th>Joined On</th>
  <th>Name</th>
  <th>Email</th>
  <th>Zip</th>
  <th>Profession</th>
  <th>Birthday</th>
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
  <th>Images</th>
</tr>

<?php

include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

$result = mysql_query("SELECT * FROM soulmate");

while($row = mysql_fetch_array($result))
  {
?>
 
 <tr style="background-color:lightyellow;">
 <td><?php echo $row['created_on'] ?></td>
  <td><?php echo $row['name'] ?></td>
  <td><?php echo $row['email'] ?></td>
  <td><?php echo $row['zip'] ?></td>
  <td><?php echo $row['profession'] ?></td>
  <td><?php echo $row['bmonth'] ?>-<?php echo $row['bday'] ?>-<?php echo $row['byear'] ?></td>
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
  <td><img src="<?php 

$images = explode(",", $row['images']);

for($i = 0; $i < sizeof($images); ++$i)
{
    echo $images[$i];
}

?>" width="100px" height="100px"/></td>
  </tr>

<tr style="background-color:lightblue">
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td><?php echo $row['otherincome'] ?></td>
  <td><?php echo $row['othergender'] ?></td>
  <td><?php echo $row['otherheight'] ?></td>
  <td><?php echo $row['otherweight'] ?></td>
  <td><?php echo $row['othereyecolor'] ?></td>
  <td><?php echo $row['otherhaircolor'] ?></td>
  <td><?php echo $row['otherhairstyle'] ?></td>
  <td><?php echo $row['otherbodytype'] ?></td>
  <td><?php echo $row['otherethnicity'] ?></td>
  <td><?php echo $row['otherpersona'] ?></td>
  <td><?php echo $row['otherstatus'] ?></td>

</tr>

<?php
  }
  mysql_close($con);
?>
 
</table>

</body></html>