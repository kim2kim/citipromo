if(isset($_POST['manageaccountrequestsubmit'])) {
	echo "<font style=\"color:white;\">A secret key has been sent to your email.  Please use the secret key to manage your account</font>";
        $secret_key = rand();

        include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");
        $sql = "INSERT INTO account (email, secret_key) VALUES('$_POST[email]', '$secret_key');
        if ( ! mysql_query($sql, $con) )
        {
                die('Error: ' . mysql_error());
        }

        mysql_close($con);
        $to = $_POST_[email];
        $subject = "Delete Event Request";
        $headers = "From: support@citipromo.com" . $_POST[email];
        $message = "Please enter this key inorder to delete or update your event. " . $secret_key;

        mail($to, $subject, $message, $headers);
	echo "<font style=\"color:white;\">A secret key has been sent to your email.  Please use the secret key to manage your account</font>";
}

if(isset($_POST['verifyaccountsubmit'])) {
        include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

        $sql = "UPDATE account SET verified = 1 where secret_key = \"". $_POST['secret_key'] . "\"";

        if ( ! mysql_query($sql, $con) )
        {
                die('Error: ' . mysql_error());
        }

        mysql_close($con);
}

if(isset($_POST['loginsubmit'])) {

  include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");
  $sql = "SELECT email FROM account where secret_key = \"" . $_POST[secret_key] . "\" and verified = 1";

  $result = mysql_query($sql);
  if(!$result){
    // silent fail
    echo 'Could not run query ' . mysql_error();
    exit;
  }
  $row = mysql_fetch_row($result);

  $sql = "SELECT * FROM events where email = \"" . $row[0] . "\" and enabled = 1";
  findEvents($sql);
  $sql = "SELECT * FROM playlist where email = \"" . $row[0] . "\" and enabled = 1";
  findPlaylist($sql);
}

function findEvents($sql){
  $result = mysql_query($sql);

  while($row = mysql_fetch_array($result))
  { 
    <div style="padding:10px; background-color:#ffccee">
    $row['date']
    <br/>
    $row['location']
    <br/>
    $row['description']
    <br/>
    $row['attending']
    <br/>
    $row['likes']
    <br/>
    </div>
  }
}

function findPlaylist($sql){
  $result = mysql_query($sql);

  while($row = mysql_fetch_array($result))
  { 
    <div style="padding:10px; background-color:#ffccff">
    $row['link']
    <br/>
    $row['artist']
    <br/>
    $row['title']
    <br/>
    $row['category']
    <br/>
    $row['likes']
    <br/>
    </div>
  }
}
