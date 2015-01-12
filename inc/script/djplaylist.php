<?php

  include("/home/users/web/b283/ipg.citicupidcom/inc/view/playlistresult.php");

  if(isset($_POST['rateme'])) {
    include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

    $sql = "UPDATE playlist SET likes = ". $_POST['hot_count'] . " WHERE id = ". $_POST['soulmate_id'];

    if ( ! mysql_query($sql, $con) )
    {
      die('Error: ' . mysql_error());
    }

  }

function playlist_total_pages(){
  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");
  $result=mysql_query("SELECT count(*) AS total FROM playlist where email = \"" . $_POST[email] . "\"", $con);

  $row = mysql_fetch_object($result);

  if ( ! $row )
  {
    die('Error: ' . mysql_error());
  }
  mysql_close($con);

  echo "<div style=\"float:right;\">Pages:  &nbsp;&nbsp;";
  for ($i = 0; $i < $row->total / 100; $i++) {
    $start = 100 * $i;
    echo "<a href=\"/playlist.php?start=" . $start . "\">" . ($i + 1) . "</a> &nbsp;";
  }
  echo "</div>";
  echo "<div class=\"clr\"></div>";
}


function show_results(){

  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

  $sql = "SELECT * FROM playlist order by artist, likes desc limit 0, 100";
  if($_GET[start]){
    $sql = "SELECT * FROM playlist order by artist, likes desc limit " . $_GET[start] . ", 100";
  }

  display_record($sql);

}// end function show_results


 // add a new song
  if (isset($_POST['submit'])) {

    $mp3 = "";

    foreach ($_FILES["attachment"]["error"] as $key => $error)
    {
       $tmp_name = $_FILES["attachment"]["tmp_name"][$key];
       if (!$tmp_name) continue;

       $name = basename($_FILES["attachment"]["name"][$key]);
       $name = trim($name);
       $name = preg_replace('/\s\s+/', '', $name);

       $imagePath = '/home/users/web/b283/ipg.citicupidcom/publicimages/mp3/' . $name;

       if ($error == UPLOAD_ERR_OK)
       {
        if ( move_uploaded_file($tmp_name, $imagePath) ){

            $mp3 .= "/publicimages/mp3/" . $name;

        }else{
            $errormsg .= "Could not move uploaded file '".$tmp_name."'to'".$name."'<br/>\n";
        }
     }
     else $errormsg .= "Upload error. [".$error."] on file '".$name."'<br/>\n";
   }

    $today = Date('Y-m-d H:i:s');

    include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

   $sql = "INSERT INTO playlist (artist, title, category, email, link, created_on) VALUES ('$_POST[artist]', '$_POST[title]', '$_POST[category]', '$_POST[email]', '$mp3', '$today')"; 

  if ( ! mysql_query($sql, $con) )
    {
    die('Error: ' . mysql_error());
    }

    mysql_close($con); 

  }


// search for a song by category
function display_for_search_result(){
  if (isset($_POST['playlistsubmitme'])) {
    $sql = "SELECT * FROM playlist WHERE  category = \"" . $_POST['category'] . "\" order by artist, likes desc limit 100";

    if($_POST['email'] != ""){
      $sql = "SELECT * FROM playlist WHERE email = \"" . $_POST['email'] . "\" order by artist, likes desc limit 100";
    }else if($_POST['category'] == ''){
      $sql = "SELECT * FROM playlist WHERE order by artist, likes desc limit 100";
    }

    display_record($sql);
  }else{
    show_results();
  }
}


?>
