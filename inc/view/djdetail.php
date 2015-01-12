<?php

function display_dj_details($dj_id){

  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");
  $sql = "SELECT * FROM dj where id = " . $dj_id . "";

  $result = mysql_query($sql, $con);

  if ( ! $result )
  {
    die('Error: ' . mysql_error());
  }

  while($row = mysql_fetch_array($result))
  { 
      $like_count = $row[like_count] + 1;
      if($row['images'] != ''){
?>
                                <div id="rightBox">
                                        <div class="rightContent">
                                        
						<div style="float:left;"><h1><?php echo $row['name'] ?></h1></div><div style="float:right"> <input type="image" src="http://www.citipromo.com/publicimages/like.jpg" onClick="javascript:submitDjLike('<?php echo $like_count ?>', '<?php echo $row[id] ?>');" width="20px" height="20px"></div>
                                                <div class="clear"></div>

                                                <div class="righttBlock">
                                                <span class="img4"><img src="http://www.citipromo.com/<?php echo $row['images'] ?>" width="200px" alt="<?php echo $row[id] ?>" /></span>
                                                <span class="greenColor">
							<p><div id="updatefan<?php echo $row['id'] ?>"><?php echo $row['like_count'] ?> Fans!</div></p>
							<p><h2>Rate</h2></p>
							<p><?php echo $row['rate'] ?></p>
							<p><h2>Info</h2></p>
							<p><?php echo $row['info'] ?></p>
                                                </span>
                                                <span class="rightTxt">
						<p><?php echo $row[musictype] ?></p>

                                                <div class="clear"></div>
                                                </div>
                                                <div class="listBlock">
                                                <ul class="blockList">
                                                <li><a href="<?php echo $row[website] ?>">Visit Me</a></li>

                                                </ul>

                                                <div class="clear"></div>
                                                </div>
                                                <div class="listBlockRight">
                                                <ul class="blockList">
                                                <li><?php echo $row[address] ?></li>
                                                <li><?php echo $row[city] ?>, <?php echo $row[state] ?>, <?php echo $row[zip] ?></li>
                                                <li><?php echo $row[phone] ?></li>
                                                </ul>



                                                <div class="clear"></div>
                                                </div>
                                                <div class="clear"></div>



<h3>COMMENTS</h3>
<div id="comment-box">
<form method="POST" onSubmit="return false;">
<input type="hidden" id="type" name="type" value="dj"/>
<input type="hidden" id="item_id" name="item_id" value="<?php echo $row[id] ?>"/>
<div><textarea tabindex="1" rows="4" cols="40" type="text" id="comment" name="comment" style="width:400px;"></textarea></div>
<a href="#allcomments" onclick="javascript: commentSubmit();"> <img src="http://www.citipromo.com/publicimages/send.gif"/></a>
</form>
</div>

<div class="clr"></div>

<div id="comments"></div>

<div id="allcomments">

<?php

  $sql = "SELECT * FROM dj_comments where item_id = " . $row[id] ;

  $result = mysql_query($sql, $con);

  mysql_close($con);

  if ( ! $result )
  {
    die('Error: ' . mysql_error());
  }

  while($row = mysql_fetch_array($result))
  {
    echo "<div class=\"comment-title\">Posted On:  " . $row[create_on] . "</div>";
    echo "<div class=\"comment\">" . $row['comment'] . "</div>";
  }


?>

</div>

					</div>
				</div>
<?php
      }
  }
}
?>
