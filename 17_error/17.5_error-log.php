<?php 

echo ini_get("error_log");
// error_log("Error Message 2",0);

$headers = "From: system@server.com \r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
// error_log("Error Message 2",1,"admin@server.com", $headers);

$date = date("Y:m:d H:i:s");
// error_log সেট করা সত্ত্বেও যদি কোন নিউ ফাইলে পাঠাতে চাই 
error_log("[{$date}] Log in a new file 8 \n",3,"D:/Errors/new-error/error.txt");

// error_log("Their is another error message",0);


