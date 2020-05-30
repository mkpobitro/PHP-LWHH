<?php

$password = "Hidden Password";
$hash = md5( $password );
// echo $hash;

$userInput = "Hidden Password";
if ( md5( $userInput ) == "c9cb66b9ca414245c2ee10aee2337df3" ) {
    echo "Password Correct";
} else {
    echo "Password Incorrect";
}