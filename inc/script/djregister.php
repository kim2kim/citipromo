
<?php

// REGISTER A DJ/PROMOTER
function dj_register($location) {

 if (isset($_POST['registerme'])) {

  $today = Date('Y-m-d H:i:s');

  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");
 
    $dbImageUrls = "";

    foreach ($_FILES["attachment"]["error"] as $key => $error)
    {
       $tmp_name = $_FILES["attachment"]["tmp_name"][$key];
       if (!$tmp_name) continue;

       $name = basename($_FILES["attachment"]["name"][$key]);
	$name = trim($name);
	$name = preg_replace('/\s\s+/', '', $name);

         $imagePath = '/home/users/web/b283/ipg.citicupidcom/publicimages/' . $name;

       if ($error == UPLOAD_ERR_OK)
       {
        if ( move_uploaded_file($tmp_name, $imagePath) ){
            $uploaded_array[] .= "Uploaded file '".$name."'.<br/>\n";
           
              $imageUrl = '/publicimages/icons/' . $name;
 

         $thumbnail_path = '/home/users/web/b283/ipg.citicupidcom/publicimages/icons/' . $name;
 
             $make_magick = system("convert -geometry 450 x 0 $imagePath $thumbnail_path", $retval);

            $dbImageUrls .= $imageUrl . ',';

        }else{
            $errormsg .= "Could not move uploaded file '".$tmp_name."'to'".$name."'<br/>\n";
        }
     }
     else $errormsg .= "Upload error. [".$error."] on file '".$name."'<br/>\n";
   }

  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

$genre = $_POST[musictype][0];

for($i = 1; $i < count($_POST[musictype]); ++$i){
  $genre .= ", " . $_POST[musictype][$i];
}

 $sql = "INSERT INTO hoster (name, email, zip, profession, bmonth, bday, byear, gender, images, created_on, musictype, referred_by, info, city, address) VALUES ('$_POST[fullname]', '$_POST[email]', '$_POST[zip]', '$_POST[profession]', '$_POST[bmonth]', '$_POST[bday]', '$_POST[byear]', '$_POST[gender]', '$dbImageUrls',  '$today', '$genre', '$_POST[referredBy]', '$_POST[info]', '$location', '$_POST[address]')"; 

  if ( ! mysql_query($sql, $con) )
    {
    die('Error: ' . mysql_error());
    }

    mysql_close($con);

    echo "<div style='padding:10px;'><font style='color:black'>You have successfully registered as a promoter or DJ.</font></div>"; 

    $_POST['registerme'] = '';
  }


}

?>
