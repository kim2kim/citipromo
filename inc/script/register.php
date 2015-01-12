
<?php

/* Handles guest registration */
function registerNewUser($location)
{

  if (isset($_POST['submit'])) {
    include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

    $otherethnicity = $_POST[otherethnicity][0];

    for($i = 1; $i < count($_POST[otherethnicity]); ++$i){
      $otherethnicity .= ", " . $_POST[otherethnicity][$i];
    }

    $sql = "UPDATE soulmate SET profession = \"" . $_POST[profession] . "\", bmonth = \"" . $_POST[bmonth] . "\", bday = \"" . $_POST[bday] . "\", byear = \"" . $_POST[byear] . "\", income = \"" . $_POST[income] . "\", height = \"" . $_POST[height] . "\", weight = \"" . $_POST[weight] . "\", eyecolor = \"" . $_POST[eyecolor] . "\", haircolor = \"" . $_POST[haircolor] . "\", hairstyle = \"" . $_POST[hairstyle] . "\", bodytype = \"" . $_POST[bodytype]   . "\", ethnicity = \"" . $_POST[ethnicity]  . "\", persona = \"" . $_POST[persona] . "\", otherincome = \"" . $_POST[otherincome] . "\", othergender = \"" . $_POST[othergender]  . "\", otherheight = \"" . $_POST[otherheight] . "\", otherweight = \"" . $_POST[otherweight] . "\", othereyecolor = \"" . $_POST[othereyecolor] . "\", otherhaircolor = \"" . $_POST[otherhaircolor] . "\", otherhairstyle = \"" . $_POST[otherhairstyle] . "\", otherbodytype = \"" . $_POST[otherbodytype]   . "\", otherethnicity = \"" . $_POST[otherethnicity]  . "\", otherpersona = \"" . $_POST[otherpersona]. "\", status = \"" . $_POST[status] . "\", otherstatus = \"" . $_POST[otherstatus]  . "\", hobbies = \"" . $_POST[hobbies]. "\", musictype = \"" . $_POST[musictype]  . "\" WHERE email = \"" . $_POST[email] . "\""; 

    if ( ! mysql_query($sql, $con) )
    {
    die('Error: ' . mysql_error());
    }

    //$soulmateId = mysql_insert_id();

    mysql_close($con);

    echo "<div style='padding:10px;'><font style='color:black'>You have successfully registered.</font></div>"; 

    $_POST[submit] = '';

    // show first form
    return true;
 }

  if (isset($_POST['upload'])) {
    $today = Date('Y-m-d H:i:s');

    $dbImageUrls = "";

    foreach ($_FILES["attachment"]["error"] as $key => $error)
    {
       $tmp_name = $_FILES["attachment"]["tmp_name"][$key];
       if (!$tmp_name) continue;

       $name = basename($_FILES["attachment"]["name"][$key]);

       $name = trim($name);
       $name = preg_replace('/\s\s+/', '', $name);

       $imagePath = '/home/users/web/b283/ipg.citicupidcom/images/' . $name;
       if($_POST[publicprofile] == 'on'){
         $imagePath = '/home/users/web/b283/ipg.citicupidcom/publicimages/' . $name;
       }

       if ($error == UPLOAD_ERR_OK)
       {
        if ( move_uploaded_file($tmp_name, $imagePath) ){
            $uploaded_array[] .= "Uploaded file '".$name."'.<br/>\n";
           
            $imageUrl = '/images/icons/' . $name;
            if($_POST[publicprofile] == 'on'){
              $imageUrl = '/publicimages/icons/' . $name;
            }

        $thumbnail_path = '/home/users/web/b283/ipg.citicupidcom/images/icons/' . $name;
        if($_POST[publicprofile] == 'on'){
         $thumbnail_path = '/home/users/web/b283/ipg.citicupidcom/publicimages/icons/' . $name;
        }

             $make_magick = system("convert -geometry 450 x 0 $imagePath $thumbnail_path", $retval);

            $dbImageUrls .= $imageUrl . ',';

        }else{
            $errormsg .= "Could not move uploaded file '".$tmp_name."'to'".$name."'<br/>\n";
        }
     }
     else $errormsg .= "Upload error. [".$error."] on file '".$name."'<br/>\n";
   }

   include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

   $sql = "INSERT INTO soulmate (name, email, zip, created_on, images, publicprofile, referred_by, gender, city) VALUES ('$_POST[fullname]', '$_POST[email]', '$_POST[zip]','$today', '$dbImageUrls', '$_POST[publicprofile]', '$_POST[referredBy]', '$_POST[gender]', '$location')"; 

 
    if ( ! mysql_query($sql, $con) )
    {
      die('Error: ' . mysql_error());
    }

    mysql_close($con);

    $to = "register@citipromo.com";
    $subject = "New Sign Up";
    $headers = "From:" . $_POST[email];
    $message = "Register Step 1: " . $_POST[fullname] . " " . $_POST[gender] . " " . $_POST[email] . " " . $_POST[zip] . " " . $dbImageUrls . " " . $_POST[publicprofile] . " " . $location . " " . $_POST[referredBy];
    mail($to, $subject, $message, $headers);

    echo "<div style='padding:10px;'><font style='color:black'>Please fill in your profile info.</font></div>"; 

    $to = $_POST[email];
    $subject = "Thank you for signing up!";
    $headers = "From: register@citipromo.com";
    $message = "We look forward to seeing you at our next event.";
    mail($to, $subject, $message, $headers);

    $_POST['upload'] = '';
  
    // show second form
    return false;
  } // if submit otherwise upload

  // show first form
  return true;
}

?>
