<?php
$to = "pobitroraj.07@gmail.com";
$subject = "PHP HTML Test Email";
$message = "<b>Hello</b> কি খবর তোমার";
$message .= "<img src='https://i.pinimg.com/736x/d6/a9/57/d6a957f1d8045c9c973c12bf5968326f.jpg'" >
$from = "Jhon Doe <jhon@example.com>";
$headers = "MIME-Version: 1.0 \r\n";
$headers .= "Content-type:text/html;charset=UTF-8\r\n";
$headers .= "From: {$from}\r\n";
echo mail( $to, $subject, $message, $headers );
// echo "Mail sent";