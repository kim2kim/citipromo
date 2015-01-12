
<?php

        if(isset($_POST['djdetailsubmit'])) {
                include("/home/users/web/b283/ipg.citicupidcom/inc/view/djdetail.php");
                $sql = "SELECT * FROM dj where id = " . $_POST[dj_id] . "";
                display_dj_details($_POST['dj_id']);
        }
?>
