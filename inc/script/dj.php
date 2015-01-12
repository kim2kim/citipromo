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

     // only update if email is entered 
     $sql = "UPDATE dj SET like_count = ". $_POST['like_count'] . " WHERE id = ". $_POST['dj_id'];

    if ( ! mysql_query($sql, $con) )
    {
      die('Error: ' . mysql_error());
    }

 mysql_close($con);

}

function dj_total_pages($location){
  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");
  $result=mysql_query("SELECT count(*) AS total FROM dj order by id", $con);

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



function search_dj_by_gender(){

  include("/home/users/web/b283/ipg.citicupidcom/inc/view/listdj.php");

  $sql = "SELECT * FROM dj";

    if($_GET[start]){
      $sql = $sql . " order by id limit " . $_GET[start] . ", 10";
    }else{
      $sql = $sql . " order by id limit 0, 10";
    }

    display_dj_ratings($sql);

}  // function ends

	
?>
