<?php

$secretPassword = "WELCOME";
$message = "This is our secret message";
// $hash = md5($message.$secretPassword);
$hash = mhash( MHASH_SHA512, $message, $secretPassword );
echo bin2hex( $hash );