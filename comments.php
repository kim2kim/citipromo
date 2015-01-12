
<?php

 $today = Date('Y-m-d H:i:s');

 if($_POST['type'] == 'dj') {
   include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");
   $sql = "INSERT INTO dj_comments (comment, item_id) VALUES ('$_POST[comment]', '$_POST[item_id]')";

   if ( ! mysql_query($sql, $con) )
    {
      die('Error: ' . mysql_error());
    }

    mysql_close($con);

    echo "<div class=\"comment-title\">Posted On:  " . $today . "</div>";
    echo "<div class=\"comment\">" . $_POST[comment] . "</div>";
 }else if($_POST['type'] == 'guest') {
   include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");
   $sql = "INSERT INTO guest_comments (comment, item_id) VALUES ('$_POST[comment]', '$_POST[item_id]')";

   if ( ! mysql_query($sql, $con) )
    {
      die('Error: ' . mysql_error());
    }
    mysql_close($con);

    echo "<div class=\"comment-title\">Posted On:  " . $today . "</div>";
    echo "<div class=\"comment\">" . $_POST[comment] . "</div>";
 }else if($_POST['type'] == 'events') {
   include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");
   $sql = "INSERT INTO event_comments (comment, item_id) VALUES ('$_POST[comment]', '$_POST[item_id]')";

   if ( ! mysql_query($sql, $con) )
    {
      die('Error: ' . mysql_error());
    }
    mysql_close($con);

    echo "<div class=\"comment-title\">Posted On:  " . $today . "</div>";
    echo "<div class=\"comment\">" . $_POST[comment] . "</div>";
 }




?>
