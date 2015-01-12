<?php   include("/home/users/web/b283/ipg.citicupidcom/inc/script/dj.php"); ?>

<?php

if(isset($_POST['djsubmitdetail'])) {
        include("/home/users/web/b283/ipg.citicupidcom/inc/view/djdetail.php");
	display_dj_details($_POST['dj_id']);
}

if(isset($_POST['guestlistsubmit'])){
    include("/home/users/web/b283/ipg.citicupidcom/inc/config.php");

    $today = Date('Y-m-d H:i:s');

    $sql = "INSERT INTO guestlist (email, gender, zip, created_on) VALUES ('$_POST[email]', '$_POST[gender]', '$_POST[zip]','$today')";

    if ( ! mysql_query($sql, $con) )
    {
    die('Error: ' . mysql_error());
    }

    mysql_close($con);

}

?>

