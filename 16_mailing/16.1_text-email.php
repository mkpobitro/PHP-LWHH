<?php
$to = "pobitroraj.07@gmail.com";
$subject = "PHP Test Email";
$message = "Lorem ipusm \n sit dolor amet";
$from = "Jhon Gillbart <jhon@gmail.com>";
$headers = "From: {$from}\r\n";
echo mail( $to, $subject, $message, $headers );
// echo "Mail sent";