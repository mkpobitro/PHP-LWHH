<?php

$salt = "@pobitro!@";
$password = "Hidden Password";
$hash = md5( $password . $salt );
// echo $hash;

$userInput = "Hidden Password";
if ( md5( $userInput . $salt ) == $hash ) {
    echo "Password Correct";
} else {
    echo "Password Incorrect";
}

?>