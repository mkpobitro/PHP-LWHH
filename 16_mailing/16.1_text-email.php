<?php
$to = "pobitroraj.07@gmail.com";
$subject = "PHP Test Email";
$message = "Lorem ipusm \n sit dolor amet";
$from = "Jhon Gillbart <jhon@gmail.com>";
$headers = "From: {$from}\r\n";

if(mail( $to, $subject, $message, $headers )){
    echo "Mail has been sent";
}else{
    echo "Failed";
}

