<?php

$ch = curl_init("http://pobitroraj.com");
// curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_exec($ch);
$info = curl_getinfo($ch);                
print_r($info);

$headers = get_headers("http://pobitroraj.com");
print_r($headers);