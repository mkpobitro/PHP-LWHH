<?php
//Crypt
$message = "This is a secret message";
$blowfish_salt = "#2yus@s$" . bin2hex( random_bytes( 11 ) );
$blowfish_salt = "#2yus@s$" . bin2hex( openssl_random_pseudo_bytes( 15 ) );
echo $blowfish_salt;

echo crypt( $message, $blowfish_salt );