<?php
$publicKey = openssl_get_publickey( file_get_contents( "./keys/public.pem" ) );
$message = "My Secret Message updated";
openssl_public_encrypt( $message, $encryptedMessage, $publicKey );
echo bin2hex( $encryptedMessage );

echo "\n";

$privateKey = openssl_get_privatekey( file_get_contents( "./keys/private.pem" ), "pobitro" );
openssl_private_decrypt( $encryptedMessage, $decyptedMessage, $privateKey );
echo $decyptedMessage;