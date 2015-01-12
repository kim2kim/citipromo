<?php
$con = mysql_connect("host", "database", "passowrd") or die(mysql_error()); 
mysql_select_db("username", $con) or die(mysql_error()); 
?>
