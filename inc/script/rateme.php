<?php

 if(isset($_POST['rateme'])) {

         include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

 if($_POST[email] != ""){
   $sql = "INSERT INTO rating (email, soulmate_id) VALUES ('$_POST[email]', '$_POST[soulmate_id]')"; 

    if ( ! mysql_query($sql, $con) )
    {
      die('Error: ' . mysql_error());
    }

    $sql = "UPDATE soulmate SET hot_count = ". $_POST['hot_count'] . " WHERE id = ". $_POST['soulmate_id'];

    if ( ! mysql_query($sql, $con) )
    {
      die('Error: ' . mysql_error());
    }

  }// end if email not blank
  else{
        echo "<div class=\"left error\">Please provide an email</div>";
  }


 
if($_POST['hot_count'] % 10) { // not even
}else{ 

  $sql = "SELECT * FROM soulmate WHERE id = ". $_POST['soulmate_id'];
  
  $result = mysql_query($sql, $con);

  if ( ! $result )
  {
  die('Error: ' . mysql_error());
  }

   while($row = mysql_fetch_array($result)){
    $to = $row['email'];
    $subject = "10 more people thinks your very hot!";
    $headers = "From: info@citipromo.com";
    $message = "You currently have " . $_POST['hot_count'] . " hot counts";

    mail($to, $subject, $message, $headers);
   }
}

 mysql_close($con);
}


////////////////////   submit filter search

function guest_total_pages($location){
  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");
  $result=mysql_query("SELECT count(*) AS total FROM soulmate where city = \"" . $location . "\" order by id", $con);

  $row = mysql_fetch_object($result);

  if ( ! $row )
  {
    die('Error: ' . mysql_error());
  }
  mysql_close($con);

  echo "<div style=\"float:right;\">Pages:  &nbsp;&nbsp;";
  for ($i = 0; $i < $row->total / 10; $i++) {
    $start = 10 * $i;
    echo "<a href=\"/guest.php?start=" . $start . "\">" . ($i + 1) . "</a> &nbsp;";
  }
  echo "</div>";
  echo "<div class=\"clr\"></div>";
}


function search_by_gender($location){

  include("/home/users/web/b283/ipg.citicupidcom/inc/view/ratemeview.php");

  $sql = "SELECT * FROM soulmate where publicprofile = 'on' and city = \"" . $location . "\"";

  if (isset($_POST['submitme'])) {
    $sql = "SELECT * FROM soulmate WHERE publicprofile = 'on' and city = \"" . $location . "\" and gender = \"" . $_POST['gender'] . "\"";

    if($_POST['gender'] == ''){
      $sql = "SELECT * FROM soulmate WHERE publicprofile = 'on' and city = \"" . $location . "\"";
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
