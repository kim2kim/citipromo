<?php
$to = "citicupid@citicupid.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "kim2kim@gmail.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>