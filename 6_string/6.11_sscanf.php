<?php

$name = "Pobitro Raj 01764787853 pob@gmail.com";
$parts = sscanf($name, "%s %s %11s %s");
print_r($parts);

//
sscanf($name, "%s %s %11s %s", $fname, $lname, $phone, $email);
echo $email;