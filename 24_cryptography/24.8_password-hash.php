<?php
$password = "Secret Password";
$hash = password_hash( $password, PASSWORD_BCRYPT );
echo $hash;
echo "\n";

$userInput = "Secret Password";
if ( password_verify( $userInput, $hash ) ) {
    echo "Access Matched";
} else {
    echo "Access Denied";
}