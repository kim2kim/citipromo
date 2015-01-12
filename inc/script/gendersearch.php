<?php

if (isset($_POST['submitme'])) {

  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

  $sql = "SELECT * FROM soulmate WHERE city = \"los angeles\" and gender = \"" . $_POST['gender'] . "\" ORDER BY RAND() limit 100";

  if($_POST['gender'] == ''){
    $sql = "SELECT * FROM soulmate WHERE city = \"los angeles\" ORDER BY RAND() limit 100";
  }else if($_POST['gender'] == 'dj'){
    $sql = "SELECT * FROM hoster WHERE city = \"los angeles\" ORDER BY RAND() limit 100";
  }

  $result = mysql_query($sql, $con);

if ( ! $result )
  {
  die('Error: ' . mysql_error());
  }

echo "<table>";

while($row = mysql_fetch_array($result))
  { 
    if($row['publicprofile'] == 'on'){
      $hot_count = $row['hot_count'] + 1;
      if($row['images'] != ''){
       $images = explode(",", $row['images']);

for($i = 0; $i < sizeof($images); ++$i)
{
   if($images[$i] != ''){
    echo "<tr><td><img src=\"" . $images[$i] . "\" /></td>";
?>
<td style="text-align:center;padding:10px;">
<label>
<?php
if($_POST['gender'] != 'dj'){
 echo "HOT";
}else{
 echo "Best Promoter / DJ";
}
?>
</label><br/><br/>
<input type="checkbox" id="hot<?php echo $row[id] ?>" name="hot<?php echo $row[id] ?>" onclick="javascript:submitForm('<?php echo $hot_count ?>', '<?php echo $row[id] ?>'); "/>
</td></tr>

<?php
   } // if there is an image print all this out
} // end of for loop

    } // if image split not empty
         } // if image not ""
  } // while

  echo "</table>";

  mysql_close($con);
}else {

  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

  $sql = "SELECT * FROM soulmate where publicprofile = 'on' and city = 'los angeles' ORDER BY RAND() limit 10";

  $result = mysql_query($sql, $con);

if ( ! $result )
  {
  die('Error: ' . mysql_error());
  }

echo "<table>";

while($row = mysql_fetch_array($result))
  { 
    if($row['publicprofile'] == 'on'){
      $hot_count = $row['hot_count'] + 1;
      if($row['images'] != ''){

        $images = explode(",", $row['images']);

for($i = 0; $i < sizeof($images); ++$i)
{
   if($images[$i] != ''){
    echo "<tr><td><img src=\"" . $images[$i] . "\"  /></td>";
?>

<td style="text-align:center;padding:10px;">
<label>
<?php
if($_POST['gender'] != 'dj'){
 echo "HOT";
}else{
 echo "Best Promoter / DJ";
}
?>
</label><br/><br/>
<input type="checkbox" id="hot<?php echo $row[id] ?>" name="hot<?php echo $row[id] ?>" onclick="javascript:submitForm('<?php echo $hot_count ?>', '<?php echo $row[id] ?>'); "/>
</td></tr>

<?php
   } // if there is an image print all this out
} // end of for loop

    } // if image split not empty
         } // if image not ""
  } // while

  echo "</table>";

} // else
?>