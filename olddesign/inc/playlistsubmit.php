<?php

  include("/home/users/web/b283/ipg.citicupidcom/inc/playlistresult.php");

  if(isset($_POST['rateme'])) {
    include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

    $sql = "UPDATE playlist SET likes = ". $_POST['hot_count'] . " WHERE id = ". $_POST['soulmate_id'];

    if ( ! mysql_query($sql, $con) )
    {
      die('Error: ' . mysql_error());
    }

  }

function show_results(){

  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

  $sql = "SELECT * FROM playlist order by likes desc limit 100";

  display_record($sql);


}// end function show_results


 // add a new song
  if (isset($_POST['submit'])) {

    $today = Date('Y-m-d H:i:s');

    include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

   $sql = "INSERT INTO playlist (artist, title, category, email, link, created_on) VALUES ('$_POST[artist]', '$_POST[title]', '$_POST[category]', '$_POST[email]', '$_POST[link]', '$today')"; 

  if ( ! mysql_query($sql, $con) )
    {
    die('Error: ' . mysql_error());
    }

    mysql_close($con); 

  }


// search for a song by category
  if (isset($_POST['submitme'])) {
    $sql = "SELECT * FROM playlist WHERE  category = \"" . $_POST['category'] . "\" ORDER BY RAND() limit 100";

    if($_POST['email'] != ""){
      $sql = "SELECT * FROM playlist WHERE email = \"" . $_POST['email'] . "\" ORDER BY RAND() limit 100";
    }else if($_POST['category'] == ''){
      $sql = "SELECT * FROM playlist WHERE ORDER BY RAND() limit 100";
    }

    display_record($sql);
  }else{
    show_results();
  }


?>
