
<?php
function display_record($sql){
?>

 <table style="color:black;padding-left:10px;">

<?php

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
  <tr>
  <td><?php echo $row['category'] ?></td>
  <td><?php echo $row['artist'] ?></td>
  <td><?php echo $row['title'] ?></td>
  <td>Likes - <?php echo $row['likes'] ?></td>
  <td><input type="checkbox" id="likes<?php echo $row[id] ?>" name="likes<?php echo $row[id] ?>" onclick="javascript:likesThisSong('<?php echo $likes ?>', '<?php echo $row[id] ?>'); "/></td>
   </tr>
<?php
    }
?>
  </table> 

<?php
}
?>