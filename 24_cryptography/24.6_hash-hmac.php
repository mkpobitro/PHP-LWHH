<?php

$message = "This is Secret Message";
$key = "mySecretKey";
// print_r(hash_hmac_algos());
echo hash_hmac( "sha512", $message, $key );
