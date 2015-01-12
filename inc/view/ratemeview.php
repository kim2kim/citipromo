<link rel='stylesheet' href='http://www.citipromo.com/files/rotate_image.css' type='text/css' />
<script type="text/javascript" src="http://www.citipromo.com/script/rotate_image.js">  </script>

<?php

/* display all public guest */
function display_dj_ratings($sql){

?>

<div id="main" class="container">
	<div class="main_image">

<?php

  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

  $result = mysql_query($sql, $con);

   mysql_close($con);

  if ( ! $result )
  {
    die('Error: ' . mysql_error());
  }

  $first_image = true;

  while($row = mysql_fetch_array($result))
  { 
    if($row['publicprofile'] == 'on'){
      $hot_count = $row['hot_count'] + 1;
      if($row['images'] != ''){
        $images = explode(",", $row['images']);
        for($i = 0; $i < sizeof($images); ++$i)
        {
            if($images[$i] != ''){
              if($first_image){    
                $first_image = false;
?>
		<img src="http://www.citipromo.com/<?php echo $images[$i]; ?>" alt="<?php echo $row[id] ?>" />
		<div class="desc">
			<a href="#" class="collapse">Close Me!</a>
			<div class="block">
				<h2></h2>

                                <p><small>Hot ? &nbsp; <input type="checkbox" id="hot<?php echo $row[id] ?>" name="hot<?php echo $row[id] ?>" onclick="javascript:submitForm('<?php echo $hot_count ?>', '<?php echo $row[id] ?>'); "/></small></p>

                                <p><small id="updatefan<?php echo $row['id'] ?>"><?php echo $row['hot_count'] ?> Fans!</small></p>
                                <p><small><?php echo $row[musictype] ?></small></p>
			</div>
		</div>
	</div>
	<div class="image_thumb">
		<ul>
			<li>
<a href="http://www.citipromo.com/<?php echo $images[$i]; ?>"><img src="http://www.citipromo.com/<?php echo $images[$i]; ?>" alt="<?php echo $row[id] ?>" width="30px" height="30px"/></a>
				<div class="block">
				<h2></h2>

                                <p><small>Hot ? &nbsp; <input type="checkbox" id="hot<?php echo $row[id] ?>" name="hot<?php echo $row[id] ?>" onclick="javascript:submitForm('<?php echo $hot_count ?>', '<?php echo $row[id] ?>'); "/></small></p>

                                <p><small id="updatefan<?php echo $row['id'] ?>"><?php echo $row['hot_count'] ?> Fans!</small></p>
                                <p><small><?php echo $row[musictype] ?></small></p>
				</div>
			</li>
<?php
              }else{
?>

			<li>
<a href="http://www.citipromo.com/<?php echo $images[$i]; ?>"><img src="http://www.citipromo.com/<?php echo $images[$i]; ?>" alt="<?php echo $row[id] ?>" width="30px" height="30px"/></a>
				<div class="block">
				<h2></h2>

                                <p><small>Hot ? &nbsp; <input type="checkbox" id="hot<?php echo $row[id] ?>" name="hot<?php echo $row[id] ?>" onclick="javascript:submitForm('<?php echo $hot_count ?>', '<?php echo $row[id] ?>'); "/></small></p>

                                <p></small><small id="updatefan<?php echo $row['id'] ?>"><?php echo $row['hot_count'] ?> Fans!</small></p>
                                <p><small><?php echo $row[musictype] ?></small></p>
				</div>
			</li>
<?php    
              }

   } // if there is an image print all this out
} // end of for loop

    } // if image split not empty
         } // if image not ""
  } // while

?>

		</ul>
	</div>
</div>

<div class="clr"></div>

<h3>COMMENTS</h3>
<div id="comment-box">
<form method="POST" onSubmit="return false;">
<input type="hidden" id="type" name="type" value="guest"/>
<input type="hidden" id="item_id" name="item_id" value="CHANGEME"/>
<div><textarea tabindex="1" rows="4" cols="40" type="text" id="comment" name="comment" style="width:400px;"></textarea></div>
<a href="#allcomments" onclick="javascript: commentSubmit();"> <img src="http://www.citipromo.com/publicimages/send.gif"/></a>
</form>
</div>

<div class="clr"></div>

<div id="comments"></div>

<div id="allcomments"></div>

<?php
} // end of function defintion
?>


