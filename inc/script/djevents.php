
<?php
/* Include the Pear::Pager file */
/* require_once ('Pager/Pager.php'); */

function events_total_pages($location){
  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");
  $result=mysql_query("SELECT count(*) AS total FROM events where city = \"" . $location . "\" order by id", $con);

  $row = mysql_fetch_object($result);

  if ( ! $row )
  {
    die('Error: ' . mysql_error());
  }
  mysql_close($con);

  //echo "TOTAL : " . $row->total;

  echo "<div style=\"float:right;\">Pages:  &nbsp;&nbsp;";
  for ($i = 0; $i < $row->total / 10; $i++) {
    $start = 10 * $i;
    echo "<a href=\"/events.php?start=" . $start . "\">" . ($i + 1) . "</a> &nbsp;";
  }
  echo "</div>";
  echo "<div class=\"clr\"></div>";
}

function venue_events($location){
  include("/home/users/web/b283/ipg.citicupidcom/inc/view/eventsview.php");

  $sql = "SELECT * FROM events where city = \"" . $location . "\"  ORDER BY id desc limit " . $_GET[start] . ", 10";

  if(!$_GET[start]){
	$sql = "SELECT * FROM events where city = \"" . $location . "\"  ORDER BY id desc limit 0, 10";
  }


  display_events_list($sql);

}

if(isset($_POST['submitattending'])) {


 if($_POST[email] != ""){

    include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");
     $sql = "INSERT INTO attending (email, event_id) VALUES ('$_POST[email]', '$_POST[event_id]')"; 

    if ( ! mysql_query($sql, $con) )
    {
      die('Error: ' . mysql_error());
    }

    // only update attending if email is provided

    $sql = "UPDATE events SET attending = ". $_POST['attending'] . " WHERE id = ". $_POST['event_id'];

    if ( ! mysql_query($sql, $con) )
    {
      die('Error: ' . mysql_error());
    }

    mysql_close($con);
  }// end if email not blank
  else{
    echo "<div class=\"error left\">Please provide an email</div>";
  }
 
  $_POST['submitattending'] = '';

}

if(isset($_POST['submiteventrating'])) {

 if($_POST[email] != ""){

    include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

     $sql = "INSERT INTO event_rating (email, event_id) VALUES ('$_POST[email]', '$_POST[event_id]')"; 

    if ( ! mysql_query($sql, $con) )
    {
      echo 'Error: ' . mysql_error();
    }

    // only update attending if email is provided

    $sql = "UPDATE events SET likes = ". $_POST['eventratingcount'] . " WHERE id = " . $_POST['event_id'];

    if ( ! mysql_query($sql, $con) )
    {
      echo 'Error: ' . mysql_error();
    }

     mysql_close($con);
 }
  else{
    echo "<div class=\"error left\">Please provide an email</div>";
  }

  $_POST['submiteventrating'] = '';

}

?>

