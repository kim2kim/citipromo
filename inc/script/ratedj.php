<?php

 if(isset($_POST['djcommentsubmit'])) {
   include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");
   $sql = "INSERT INTO dj_comments (comment, item_id) VALUES ('$_POST[comment]', '$_POST[item_id]')";

   if ( ! mysql_query($sql, $con) )
    {
      die('Error: ' . mysql_error());
    }
  
    echo "<div>" . $_POST[comment] . "</div>";
 }

 if(isset($_POST['rateme'])) {

 include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

 if($_POST[email] != ""){

     $sql = "INSERT INTO hosterrating (email, soulmate_id) VALUES ('$_POST[email]', '$_POST[soulmate_id]')"; 

   if ( ! mysql_query($sql, $con) )
    {
      die('Error: ' . mysql_error());
    }

     // only update if email is entered 
     $sql = "UPDATE hoster SET hot_count = ". $_POST['hot_count'] . " WHERE id = ". $_POST['soulmate_id'];

    if ( ! mysql_query($sql, $con) )
    {
      die('Error: ' . mysql_error());
    }

  }// end if email not blank
  else{
	echo "<div class=\"left error\">Please provide an email</div>";
  }

// send email if you get 10 hot rating
 if($_POST['hot_count'] % 10) { // not even
 }else{ 

  $sql = "SELECT * FROM hoster WHERE id = ". $_POST['soulmate_id'];
  
  $result = mysql_query($sql, $con);

  if ( ! $result )
  {
  die('Error: ' . mysql_error());
  }

   while($row = mysql_fetch_array($result)){
    $to = $row['email'];
    $subject = "You have 10 new fans!";
    $headers = "From: citicupid@citicupid.com";
    $message = "You currently have " . $_POST['hot_count'] . " fans";

    mail($to, $subject, $message, $headers);
   }
}

 mysql_close($con);

}


function dj_total_pages($location){
  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");
  $result=mysql_query("SELECT count(*) AS total FROM hoster where city = \"" . $location . "\" order by id", $con);

  $row = mysql_fetch_object($result);

  if ( ! $row )
  {
    die('Error: ' . mysql_error());
  }
  mysql_close($con);

  echo "<div style=\"float:right;\">Pages:  &nbsp;&nbsp;";
  for ($i = 0; $i < $row->total / 10; $i++) {
    $start = 10 * $i;
    echo "<a href=\"/dj.php?start=" . $start . "\">" . ($i + 1) . "</a> &nbsp;";
  }
  echo "</div>";
  echo "<div class=\"clr\"></div>";
}



function search_dj_by_gender($location){

  include("/home/users/web/b283/ipg.citicupidcom/inc/view/ratedjview.php");

  $sql = "SELECT * FROM hoster where city = \"" . $location . "\"";

  if (isset($_POST['submitme'])) {
    $sql = "SELECT * FROM hoster WHERE city = \"" . $location . "\" and gender = \"" . $_POST['gender'] . "\"";

    if($_POST['gender'] == ''){
      $sql = "SELECT * FROM hoster WHERE city = \"" . $location . "\"";
    }
  }

    if($_GET[start]){
      $sql = $sql . " order by id limit " . $_GET[start] . ", 10";
    }else{
      $sql = $sql . " order by id limit 0, 10";
    }

    display_dj_ratings($sql);

}  // function ends

?>
