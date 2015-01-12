<link rel='stylesheet' href='http://www.citipromo.com/files/rotate_image.css' type='text/css' />
<script type="text/javascript" src="http://www.citipromo.com/script/rotate_image.js">  </script>

<?php

function display_events_list($sql){

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
      $likes = $row['likes'] + 1;
      $attending = $row['attending'] + 1;
      if($row['images'] != ''){
        $images = explode(",", $row['images']);
        for($i = 0; $i < sizeof($images); ++$i)
        {
            if($images[$i] != ''){
              if($first_image){    
                $first_image = false;
?>
		<img src="http://www.citipromo.com<?php echo $images[$i]; ?>" alt="<?php echo $row[id] ?>" />
		<div class="desc">
			<a href="#" class="collapse">Close Me!</a>
			<div class="block">
				<p><small><?php echo $row[name] ?></small></p>
                                <p><small>Attending? <input type="checkbox" id="attending<?php echo $row[id] ?>" name="attending<?php echo $row[id] ?>" onclick="javascript:submitAttendingForm('<?php echo $attending ?>', '<?php echo $row[id] ?>'); "/> YES</small>
                                <small>Like? <input type="checkbox" id="likes<?php echo $row[id] ?>" name="likes<?php echo $row[id] ?>" onclick="javascript:submitEventRatingForm('<?php echo $likes ?>', '<?php echo $row[id] ?>'); "/> YES</small></p>

                                <p><small><?php echo $row[email] ?></small><small><?php echo $row[date] ?></small></p>
				<p><small id="attendingView<?php echo $row['id'] ?>"><?php echo $row['attending'] ?> Attending!</small><small id="likesView<?php echo $row['id'] ?>"><?php echo $row['likes']?> Likes!</small></p>
                                <p><small><?php echo $row[location] ?></small></p>
                                <p><small><?php echo $row[description] ?></small></p>
			</div>
		</div>
	</div>
	<div class="image_thumb">
		<ul>
			<li>
<a href="http://www.citipromo.com<?php echo $images[$i]; ?>"><img src="http://www.citipromo.com<?php echo $images[$i]; ?>" alt="<?php echo $row[id] ?>" width="30px" height="30px"/></a>
				<div class="block">
				<p><small><?php echo $row[name] ?></small></p>
                                <p><small>Attending? <input type="checkbox" id="attending<?php echo $row[id] ?>" name="attending<?php echo $row[id] ?>" onclick="javascript:submitAttendingForm('<?php echo $attending ?>', '<?php echo $row[id] ?>'); "/> YES</small>
                                <small>Like? <input type="checkbox" id="likes<?php echo $row[id] ?>" name="likes<?php echo $row[id] ?>" onclick="javascript:submitEventRatingForm('<?php echo $likes ?>', '<?php echo $row[id] ?>'); "/> YES</small></p>

                                <p><small><?php echo $row[email] ?></small><small><?php echo $row[date] ?></small></p>
				<p><small id="attendingViewSide<?php echo $row['id'] ?>"><?php echo $row['attending'] ?> Attending!</small><small id="likesViewSide<?php echo $row['id'] ?>"><?php echo $row['likes']?> Likes!</small></p>
                                <p><small><?php echo $row[location] ?></small></p>
                                <p><small><?php echo $row[description] ?></small></p>
				</div>
			</li>

<?php
              }else{
?>

			<li>
<a href="http://www.citipromo.com/<?php echo $images[$i]; ?>"><img src="http://www.citipromo.com/<?php echo $images[$i]; ?>" alt="<?php echo $row[id] ?>" width="30px" height="30px"/></a>
				<div class="block">
				<p><small><?php echo $row[name] ?></small></p>
                                <p><small>Attending? <input type="checkbox" id="attending<?php echo $row[id] ?>" name="attending<?php echo $row[id] ?>" onclick="javascript:submitAttendingForm('<?php echo $attending ?>', '<?php echo $row[id] ?>'); "/> YES</small>
                                <small>Like? <input type="checkbox" id="likes<?php echo $row[id] ?>" name="likes<?php echo $row[id] ?>" onclick="javascript:submitEventRatingForm('<?php echo $likes ?>', '<?php echo $row[id] ?>'); "/> YES</small></p>

                                <p><small><?php echo $row[email] ?></small><small><?php echo $row[date] ?></small></p>
				<p><small id="attendingViewSide<?php echo $row['id'] ?>"><?php echo $row['attending'] ?> Attending!</small><small id="likesViewSide<?php echo $row['id'] ?>"><?php echo $row['likes']?> Likes!</small></p>
                                <p><small><?php echo $row[location] ?></small></p>
                                <p><small><?php echo $row[description] ?></small></p>
				</div>
			</li>

<?php
              }

   	  } // if there is an image print all this out
	} // end of for loop
    } else { // member did not upload an image 
      if($first_image){    
        $first_image = false;
?>
	<img src="http://www.citipromo.com/publicimages/icons/events.jpg" alt="<?php echo $row[id] ?>" />
		<div class="desc">
			<a href="#" class="collapse">Close Me!</a>
			<div class="block">
				<h2><small><?php echo $row[name] ?></small></h2>
                                <p><small>Attending? <input type="checkbox" id="attending<?php echo $row[id] ?>" name="attending<?php echo $row[id] ?>" onclick="javascript:submitAttendingForm('<?php echo $attending ?>', '<?php echo $row[id] ?>'); "/> YES</small>
                                <small>Like? <input type="checkbox" id="likes<?php echo $row[id] ?>" name="likes<?php echo $row[id] ?>" onclick="javascript:submitEventRatingForm('<?php echo $likes ?>', '<?php echo $row[id] ?>'); "/> YES</small></p>

                                <p><small><?php echo $row[email] ?></small><small><?php echo $row[date] ?></small></p><p><small id="attendingViewSide<?php echo $row['id'] ?>"><?php echo $row['attending'] ?> Attending!</small><small id="likesViewSide<?php echo $row['id'] ?>"><?php echo $row['likes']?> Likes!</small></p>
                                <p><small><?php echo $row[location] ?></small></p>
                                <p><small><?php echo $row[description] ?></small></p>
			</div>
		</div>
	</div>
	<div class="image_thumb">
		<ul>
			<li>
<a href="http://www.citipromo.com/publicimages/icons/events.jpg"><img src="http://www.citipromo.com/publicimages/icons/events.jpg" alt="<?php echo $row[id] ?>" width="30px" height="30px"/></a>
				<div class="block">
				<h2><small><?php echo $row[name] ?></small></h2>
                                <p><small>Attending? <input type="checkbox" id="attending<?php echo $row[id] ?>" name="attending<?php echo $row[id] ?>" onclick="javascript:submitAttendingForm('<?php echo $attending ?>', '<?php echo $row[id] ?>'); "/> YES</small>
                                <small>Like? <input type="checkbox" id="likes<?php echo $row[id] ?>" name="likes<?php echo $row[id] ?>" onclick="javascript:submitEventRatingForm('<?php echo $likes ?>', '<?php echo $row[id] ?>'); "/> YES</small></p>

                                <p><small><?php echo $row[email] ?></small><small><?php echo $row[date] ?></small></p><p><small id="attendingViewSide<?php echo $row['id'] ?>"><?php echo $row['attending'] ?> Attending!</small><small id="likesViewSide<?php echo $row['id'] ?>"><?php echo $row['likes']?> Likes!</small></p>
                                <p><small><?php echo $row[location] ?></small></p>
                                <p><small><?php echo $row[description] ?></small></p>
				</div>
			</li>

<?php
      }else{
?>

			<li>
<a href="http://www.citipromo.com/publicimages/icons/events.jpg"><img src="http://www.citipromo.com/publicimages/icons/events.jpg" alt="<?php echo $row[id] ?>" width="30px" height="30px"/></a>
				<div class="block">
				<h2><small><?php echo $row[name] ?></small></h2>
                                <p><small>Attending? <input type="checkbox" id="attending<?php echo $row[id] ?>" name="attending<?php echo $row[id] ?>" onclick="javascript:submitAttendingForm('<?php echo $attending ?>', '<?php echo $row[id] ?>'); "/> YES</small>
                                <small>Like? <input type="checkbox" id="likes<?php echo $row[id] ?>" name="likes<?php echo $row[id] ?>" onclick="javascript:submitEventRatingForm('<?php echo $likes ?>', '<?php echo $row[id] ?>'); "/> YES</small></p>

                                <p><small><?php echo $row[email] ?></small><small><?php echo $row[date] ?></small></p><p><small><?php echo $row['attending'] ?> Attending!</small><small><?php echo $row['likes']?> Likes!</small></p>
                                <p><small><?php echo $row[location] ?></small></p>
                                <p><small><?php echo $row[description] ?></small></p>
				</div>
			</li>

<?php
      }

    }
  } // while

?>



		</ul>
	</div>
</div>

<div class="clr"></div>

<h3>COMMENTS</h3>
<div id="comment-box">
<form method="POST" onSubmit="return false;">
<input type="hidden" id="type" name="type" value="events"/>
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
