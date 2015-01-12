
<?php
function display_record($sql){

  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

  $result = mysql_query($sql, $con) ;

  if ( ! $result )
    {
    die('Error: ' . mysql_error());
    }

  mysql_close($con);

while($row = mysql_fetch_array($result))
  { 
    $likes = $row['likes'] + 1;
?>

<div style="white-space:nowrap;color:black;padding-top:5px;background-color:#eee;height:20px;width:100%;">
<div style="float:left;padding-left:10px;width:30%;"><?php echo $row['category'] ?></div>
<div style="float:left;padding-left:10px;width:40%"><?php echo $row['artist'] ?> - <?php echo $row['title'] ?></div>
<div style="float:right;padding-left:10px;width:10%" id="song_like<?php echo $row[id] ?>"><?php echo $row['likes'] ?></div>
<div style="float:right;padding-left:5px;width:5%">
<a href="#song_like<?php echo $row[id] ?>" onclick="javascript:likesThisSong('<?php echo $likes ?>', '<?php echo $row[id] ?>');"><img title="Click here if you like this song." style="border-style:none;" src="http://www.citipromo.com/publicimages/like.jpg"/></a></div>

<!--<input type="checkbox" id="likes<?php echo $row[id] ?>" name="likes<?php echo $row[id] ?>" onclick="javascript:likesThisSong('<?php echo $likes ?>', '<?php echo $row[id] ?>'); "/></div>-->

<div style="float:right;padding-left:5px;width:5%"><a href="#" onclick="javascript:playsong('<?php echo $row[id] ?>');"><img title="click here to play this song." style="border-style:none;" src="http://www.citipromo.com/publicimages/play.png"/></a></div>
</div>
<div class="clr"></div>
<div style="padding-bottom:5px;"></div>

<?php
    }
}
?>
