<?php
$file = "D:\\Xampp\\htdocs\\php-lwhh\\7_file\\data\\data5.txt";

// file_put_contents( $file, "India\n", FILE_APPEND );
// file_put_contents( $file, "China\n", FILE_APPEND );
file_put_contents( $file, "Canada\n", FILE_APPEND | LOCK_EX );
file_put_contents( $file, "US\n", FILE_APPEND | LOCK_EX );