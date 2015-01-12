<?php

  $sql = "SELECT * FROM dj_comments where item_id = \"" . $_POST[item_id] . "\"";

  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

  $result = mysql_query($sql, $con);

  mysql_close($con);

  if ( ! $result )
  {
    die('Error: ' . mysql_error());
  }

    while($row = mysql_fetch_array($result))
    {
        echo "<div class=\"comment-title\">Posted On:  " . $row[create_on] . "</div>";
        echo "<div class=\"comment\"><p>" . $row['comment'] . "</p></div>";
    }

?>
