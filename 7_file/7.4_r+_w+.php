<?php

$file = "D:\\Xampp\\htdocs\\php-lwhh\\7_file\\data\\data4.txt";
// $fp = fopen( $file, 'r+' );
$fp = fopen( $file, 'w+' );

fwrite( $fp, "Banglaesh\n" );
rewind( $fp );
$data4 = fgets( $fp );
echo $data4;

fclose( $fp );

//“W+” [ এটা write মোডে খুলবে কিন্তু সে আগের ডেটা গুলাকে সব মুছে দিবে ]
