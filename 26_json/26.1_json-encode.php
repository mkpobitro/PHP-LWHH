<?php
//PHP array to json convert

$data = array(
    "firstname" => "Jhon",
    "lastname"  => "Doe",
    "email"     => "jhon@doe.com",
);

echo json_encode($data, JSON_PRETTY_PRINT);