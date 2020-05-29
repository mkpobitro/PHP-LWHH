<?php
$ch = curl_init("http://localhost:2000/23.13_curl-cookijar.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'user=pobitro&password=12345&submit=1');
$cookie_file = 'D:/cookies.txt';
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);
echo curl_exec($ch);

$ch2 = curl_init("http://localhost:2000/23.13_curl-cookijar.php");
curl_setopt($ch2, CURLOPT_COOKIEFILE, $cookie_file);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
echo curl_exec($ch2); 