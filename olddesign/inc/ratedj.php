<?php



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


/*
if($_POST['hot_count'] %100) { // not even
}else{  // found 100
  $sql = "SELECT * FROM hoster WHERE id = ". $_POST['soulmate_id'];

  $result = mysql_query($sql, $con);

  if ( ! $result )
  {
  die('Error: ' . mysql_error());
  }
  
  $staticimagepath = '/home/users/web/b283/ipg.citicupidcom/files/theme/default_header.jpg';
  $rootPath = '/home/users/web/b283/ipg.citicupidcom';
  while($row = mysql_fetch_array($result)){
     $images = explode(",", $row['images']);

    for($i = 0; $i < sizeof($images); ++$i)
    {
       if($images[$i] != ''){
         $paths = explode("/", $images[$i]);

         $thehotimage = $rootPath . "/" . $paths[sizeof($paths) -3] . "/" . $paths[sizeof($paths) -1];
        
         $make_magick = system("convert -geometry 400 x 0 $thehotimage $staticimagepath", $retval);
         break;
       }
    }
  }
}
*/
 mysql_close($con);

}



function search_dj_by_gender($location){

  include("/home/users/web/b283/ipg.citicupidcom/inc/ratedjview.php");

  $sql = "SELECT * FROM hoster where publicprofile = 'on' and city = \"" . $location . "\" ORDER BY RAND() limit 10";

  if (isset($_POST['submitme'])) {

    $sql = "SELECT * FROM hoster WHERE city = \"" . $location . "\" and gender = \"" . $_POST['gender'] . "\" ORDER BY RAND() limit 100";

    if($_POST['gender'] == ''){
      $sql = "SELECT * FROM hoster WHERE city = \"" . $location . "\" ORDER BY RAND() limit 100";
    }

  }
    display_dj_ratings($sql);

}  // function ends

?>