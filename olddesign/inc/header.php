<?php



function signup_header($location){

   $ip = $_SERVER['REMOTE_ADDR'];
   $pagina = $_SERVER['REQUEST_URI'];
   $datum = date("d-m-y / H:i:s");
   $invoegen = $datum . " - " . $ip . " - " . $pagina . "<br/>";
   $fopen = fopen("/hermes/bosweb/web028/b283/ipg.citicupidcom/ips.html", "a");
   fwrite($fopen, $invoegen);
   fclose($fopen);


?>
            <a href="http://ny.citipromo.com">New York</a> | <a href="http://sf.citipromo.com">San Francisco</a> | <a href="http://sd.citipromo.com">San Diego</a> | <a href="http://ca.citipromo.com">Chicago</a> | <a href="http://citipromo.com">Los Angeles</a>

            <div class="title"><span id="weebly_site_title" style="background-color: black;font-weight:bold;">CitiPromo (<?php echo $location ?>)</span><br><span style="background-color: black;font-weight:bold;font-size:17pt;">The Ultimate Promoter/DJ Guest List</span></div>

<?php
}

?>