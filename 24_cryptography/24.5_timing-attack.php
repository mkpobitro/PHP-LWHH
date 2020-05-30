<?php
$password = "Secret Password";
$hash = hash( "sha1", $password );
echo $hash;

$userInputHash = hash( "sha1", $_POST['password'] );
if ( $hash == $userInputHash ) {
    echo "Password Matched";
}

if ( hash_equals( $hash, $userInputHash ) ) {
    echo "Matched";
}