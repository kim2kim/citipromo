<link rel='stylesheet' href='http://www.citipromo.com/files/rotate_image.css' type='text/css' />
<script type="text/javascript" src="http://www.citipromo.com/script/jquery-1.3.2.min.js">  </script>
<script type="text/javascript" src="http://www.citipromo.com/script/rotate_image.js">  </script>

<?php

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
		<img src="http://www.citipromo.com/<?php echo $images[$i]; ?>" alt="" />
		<div class="desc">
			<a href="#" class="collapse">Close Me!</a>
			<div class="block">
				<h2><small><?php echo $row[profession] ?></small></h2>

                                <p><small>Best <?php echo $row[profession] ?>? &nbsp;<input type="checkbox" id="hot<?php echo $row[id] ?>" name="hot<?php echo $row[id] ?>" onclick="javascript:submitForm('<?php echo $hot_count ?>', '<?php echo $row[id] ?>'); "/></small></p>

                                <p><small><?php echo $row[email] ?></small><small><?php echo $row[facebook] ?></small><small><?php echo $row['hot_count'] ?> Fans!</small></p>
                                <p><small><?php echo $row[musictype] ?></small></p>
			</div>
		</div>
	</div>
	<div class="image_thumb">
		<ul>
			<li>
<a href="http://www.citipromo.com/<?php echo $images[$i]; ?>"><img src="http://www.citipromo.com/<?php echo $images[$i]; ?>" alt="Image Name" width="30px" height="30px"/></a>
				<div class="block">
				<h2><small><?php echo $row[profession] ?></small></h2>

                                <p><small>Best <?php echo $row[profession] ?>? &nbsp;<input type="checkbox" id="hot<?php echo $row[id] ?>" name="hot<?php echo $row[id] ?>" onclick="javascript:submitForm('<?php echo $hot_count ?>', '<?php echo $row[id] ?>'); "/></small></p>

                                <p><small><?php echo $row[email] ?></small><small><?php echo $row[facebook] ?></small><small><?php echo $row['hot_count'] ?> Fans!</small></p>
                                <p><small><?php echo $row[musictype] ?></small></p>
				</div>
			</li>
<?php
              }else{
?>

			<li>
<a href="http://www.citipromo.com/<?php echo $images[$i]; ?>"><img src="http://www.citipromo.com/<?php echo $images[$i]; ?>" alt="Image Name" width="30px" height="30px"/></a>
				<div class="block">
				<h2><small><?php echo $row[profession] ?></small></h2>

                                <p><small>Best <?php echo $row[profession] ?>? &nbsp;<input type="checkbox" id="hot<?php echo $row[id] ?>" name="hot<?php echo $row[id] ?>" onclick="javascript:submitForm('<?php echo $hot_count ?>', '<?php echo $row[id] ?>'); "/></small></p>

                                <p><small><?php echo $row[email] ?></small><small><?php echo $row[facebook] ?></small><small><?php echo $row['hot_count'] ?> Fans!</small></p>
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

<?php
} // end of function defintion
?>