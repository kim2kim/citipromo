
<?php
/* Include the Pear::Pager file */
/* require_once ('Pager/Pager.php'); */

function dj_events($location){

  include("/home/users/web/b283/ipg.citicupidcom/inc/eventsview.php");

  $sql = "SELECT * FROM events where city = \"" . $location . "\"";

/*
  $sql = setup_paging($sql);

  echo sql;
*/

  display_events_list($sql);

}

/*
function setup_paging($sql){
  $result=mysql_query("SELECT count(*) AS total FROM events", $connection);
  $row = mysql_fetch_row($result);

  $totalItems = $row['total'];

  $pager_options = array(
  'mode'       => 'Sliding',   // Sliding or Jumping mode. See below.
  'perPage'    => 2,   // Total rows to show per page
  'delta'      => 4,   // See below
  'totalItems' => $totalItems,
  );

  $pager = Pager::factory($pager_options);

  echo $pager->links;

  list($from, $to) = $pager->getOffsetByPageId();
  $from = $from - 1;
 
  $perPage = $pager_options['perPage'];

  $sql = $sql . " order by id desc limit $from, $perPage";

  return $sql;
}
*/

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
    echo "Please provide an email";
  }

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
    echo "Please provide an email";
  }

}

?>

