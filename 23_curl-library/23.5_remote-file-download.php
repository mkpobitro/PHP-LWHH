<?php
set_time_limit(0);
$ch = curl_init("https://pobitroraj.com/wp-content/uploads/2019/06/Pobitro_Raj-removebg-preview.png");

$filename = fopen('pobitro.png', 'w');
curl_setopt($ch, CURLOPT_FILE, $filename);
curl_exec($ch);