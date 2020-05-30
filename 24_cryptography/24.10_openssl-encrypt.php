<?php
// print_r(openssl_get_cipher_methods());

$methodName = "aes-128-cbc";
$iv_length = openssl_cipher_iv_length( $methodName );
$iv = openssl_random_pseudo_bytes( $iv_length );

$message = "This is our secret message";
$password = "Secret Key";
$encrypted_message = openssl_encrypt( $message, $methodName, $password, 0, $iv );
echo $encrypted_message;
echo "\n";
echo openssl_decrypt( $encrypted_message, $methodName, $password, 0, $iv );