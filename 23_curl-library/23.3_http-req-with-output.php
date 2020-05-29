<?php 
$ch = curl_init('http://localhost/php-lwhh/23_curl-library/hello.php');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'secret=noodles');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$var = curl_exec($ch);
echo "<br>";
echo strtoupper($var);