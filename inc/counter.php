<?php
function counter($file){
$count_my_page = ($file);
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);
echo "<div style=\"font-size:8pt;\">" . $hits[0] . " VISITS</div>";
}
?>
